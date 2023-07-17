<?php

include_once("common/wraps/typical-layouts.php");

function get_portfolio_html(string $language) {

  return get_typical_layout(
    $language,
    "portfolio",
    [],
    "pre",
    get_file_contents("portfolio/contents.html")
  );
}

function get_file_contents(string $file_name) {
  $to_return = "";

  $file = fopen($file_name, "r");
  if ($file == false) {
    return "(file $file_name missing, bug)";
  }
  $to_return .= fread($file, 1048576);
  fclose($file);

  return $to_return;
}

function wrap_portfolio_links(array $datas) {
  $e = '';
  foreach ($datas as $data) {
    $e .= <<<EOHTML

<li>
  <a class='dont-be-like-link' href=$data[1]>
    <span class='be-like-link be-like-h2'>
      $data[0]
    </span>
    <ul class='dont-be-like-list flex-row-spar'>
      <li><pre role=img aria-label="Code snippet.">
        code snip snip
      </pre><span>forks</span></li>
      <li><pre>code snip snip</pre><span>Roman numerals</span></li>
      <li><pre>code snip snip</pre><span>tetris</span></li>
    </ul>
  </a>
</li>

EOHTML;
  }
}

function wrap_portfolio_link_elements(array $datas) {
  $e = '';
  foreach ($datas as $data) {
    $e .= <<<EOHTML

<li>
  <a class='dont-be-like-link' href=$data[1]>
    <span class='be-like-link be-like-h2'>
      $data[0]
    </span>
    <ul class='dont-be-like-list flex-row-spar'>
      <li><pre role=img aria-label="Code snippet.">
        code snip snip
      </pre><span>forks</span></li>
      <li><pre>code snip snip</pre><span>Roman numerals</span></li>
      <li><pre>code snip snip</pre><span>tetris</span></li>
    </ul>
  </a>
</li>

EOHTML;
  }
}

?>

