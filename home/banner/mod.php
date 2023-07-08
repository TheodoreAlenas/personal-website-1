<?php

function get_welcome(String $language) {
  if ($language == "gr")
    return "Χαίρετε!<br>Ονομάζομαι Θοδωρής.";
  return "Good evening!<br>My name is Theodore.";
}

function get_banner_and_css(String $language) {
  return [get_banner($language), ["home/banner/banner.css"]];
}

function get_banner(String $language) {
  return <<<EOHTML
<div class="banner-back-and-front">
EOHTML .
get_banner_welcome_face($language) .
get_banner_faces() .
<<<EOHTML
</div>
EOHTML;
}

function get_banner_welcome_face(String $language) {
  return <<<EOHTML
<div class="banner-grid">

<span class="banner-welcome">
EOHTML .
get_welcome($language) .
<<<EOHTML
</span>

<img src="images/face.jpg" style="background-image: url('images/face-16-times-shorter.png');">

</div>
EOHTML;
}

function get_banner_faces() {
  $e = '<div class="banner-faces">';
  $littles_dir = opendir("images/littles");
  if ($littles_dir != false) {
    while (($image_name = readdir($littles_dir)) != false) {
      if ($image_name == '.' || $image_name == '..') {
        continue;
      }
      $html = '<img src="images/littles/' .
        $image_name .
        '" style="background-image: ' .
        "url('" .
        "images/littles-8-times-shorter/" .
        $image_name .
        "')" .
        '">';
      $e .= $html;
    }
    closedir($littles_dir);
  }
  $e = $e . '</div>';
  return $e;
}

function get_img_from_ls(String $ls) {
  $r = "";
  $r = $ls;
  return $r;
}

?>
