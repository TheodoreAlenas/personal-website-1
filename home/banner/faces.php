<?php

function get_banner_faces() {
  return
    '<div class="banner-faces">' .
    <<<EOHTML

<img
  src="../images/littles/stripe-with-all.png"
  style="background-image: url(
    '../images/littles/stripe-with-all-8-times-shorter.png'
    );"
  alt="varied facial expressions"
>

EOHTML .
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

