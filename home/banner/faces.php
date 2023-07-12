<?php

function get_banner_faces() {
  return
    '<div class="banner-faces">' .
    wrap_all([
      "aye",
      "hmm",
      "what",
      "nice",
      "why",
      "long",
      "oof",
      "ooh",
      "pat",
      "bee",
      "pyramid",
      "italiano",
      "diploma",
      "you",
    ]) .
    '</div>';
}

function wrap_all(array $image_names) {
  $e = '';
  foreach ($image_names as $image_name) {
    $e .= <<<EOHTML
<img
  src="../images/littles/$image_name.png"
  style="background-image: url(
    '../images/littles-8-times-shorter/$image_name.png'
    );"
  alt="expression $image_name"
>

EOHTML;
  }
  return $e;
}

