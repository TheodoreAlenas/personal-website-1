<?php

// Function to recursively traverse the DOM and extract text content
function extract_text($node, $language) {
  $text = '';

  // echo var_dump($node);
  if ($node->nodeType === XML_TEXT_NODE) {
    $text .= $node->nodeValue;
  }

  elseif ($node->nodeType === XML_ELEMENT_NODE) {
    $n = $node->localName;
    $pre = '';
    $post = '';

    if ($n === "body" || $n === $language) {
      $pre .= "<!-- XML '<$n>' -->";
      $post .= "<!-- XML '</$n>' -->";
    }
    elseif ($n === "h2" || $n === "p") {
      $pre .= "<$n>";
      $post .= "</$n>";
    }
    elseif ($n === "youtube") {
      $pre .= "<a href=https://www.youtube.com/@theodorealenas3171>";
      $post .= "</a>";
    }
    elseif (in_array($n, ["en", "gr"])) {
      $text .= "<!-- XML '<$n>...</$n>' -->";
      return $text;
    }
    else {
      $text .= "<!-- INVALID XML '<$n>...</$n>' -->";
      return $text;
    }
    $text .= $pre;
    foreach ($node->childNodes as $childNode) {
      $text .= extract_text($childNode, $language);
    }
    $text .= $post;
  }

  return $text;
}

function extract_text_from($file_name, $language) {
  $dom = new DOMDocument();
  $file = fopen($file_name, "r");
  if ($file == false) {
    fclose($file);
    return false;
  }
  $dom->loadXML(fread($file, 1048576));
  fclose($file);
  return extract_text($dom->documentElement, $language);
}

echo "<html><body>";
echo extract_text_from("minimalism.xml", "en");
echo "</body></html>";

?>
