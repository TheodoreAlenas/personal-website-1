<?php

function get_wrapped_in_asymmetric_grid(String $component) {

  return '<div class="test-wrapper">' .
    '<div class="main-container test-layout-tall phone-screen">' .
  $component .
  '</div>' .

  '<div class="main-container test-layout-almost">' .
  $component .
  '</div>' .

  '<div class="main-container test-layout-below-half phone-screen">' .
  $component .
  '</div>' .

  '<div class="main-container test-layout-above-half">' .
  $component .
  '</div>' .

  '</div>';
}

?>
