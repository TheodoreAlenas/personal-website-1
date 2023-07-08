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
<div class="banner-grid">
<span class="banner-welcome">
EOHTML . get_welcome($language) . <<<EOHTML
</span>
<img src="images/face.jpg">
</div>
<div>
<img src="images/littles/oof.png">
</div>
</div>
EOHTML;
}

?>
