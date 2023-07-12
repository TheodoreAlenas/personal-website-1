<?php

function get_banner_faces() {
  return
    '<div class="banner-faces">' .
    <<<EOHTML

<img
  src="../images/stripe-with-faces.png"
  style="background-image: url(
    '../images/stripe-with-faces-8-times-shorter.png'
    );"
  alt="varied facial expressions"
>

EOHTML .
    '</div>';
}

?>
