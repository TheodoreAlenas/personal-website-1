<?php

function get_wrapped_in_asymmetric_grid(String $component) {

  return '<div class="test-wrapper">' .
    '<div class="main-container test-layout-tall phone-screen outline">' .
  $component .
  '</div>' .

  '<div class="main-container test-layout-almost outline">' .
  $component .
  '</div>' .

  '<div class="main-container test-layout-below-half outline">' .
  $component .
  '</div>' .

  '<div class="main-container test-layout-above-half phone-screen outline">' .
  $component .
  '</div>' .

  '</div>';
}

include("home/banner/mod.php");
[$banner, $banner_css] = get_banner_and_css("en");

include("common/ends-of-main-html.php");
echo get_top_of_file(
  "Theodore - Test layouts",
  array_merge(
    [
      "common/html-body.css",
      "common/test-layout.css"
    ],
    $banner_css));
echo get_wrapped_in_asymmetric_grid($banner);
echo get_bottom_of_file();

?>
