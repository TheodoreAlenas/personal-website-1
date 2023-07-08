<?php

include_once("common/ends-of-main-html.php");

function wrap_in_asymmetric_grid(string $component) {

  return '<div class="test-wrapper">' .
    '<div class="main-container debug-mode test-layout-tall phone-screen">' .
  $component .
  '</div>' .

  '<div class="main-container debug-mode test-layout-almost">' .
  $component .
  '</div>' .

  '<div class="main-container debug-mode test-layout-below-half phone-screen">' .
  $component .
  '</div>' .

  '<div class="main-container debug-mode test-layout-above-half">' .
  $component .
  '</div>' .

  '</div>';
}

function wrap_callable_in_asymmetric_grid(callable $component) {

  return '<div class="test-wrapper">' .
    '<div class="main-container debug-mode test-layout-tall phone-screen">' .
  $component() .
  '</div>' .

  '<div class="main-container debug-mode test-layout-almost">' .
  $component() .
  '</div>' .

  '<div class="main-container debug-mode test-layout-below-half phone-screen">' .
  $component() .
  '</div>' .

  '<div class="main-container debug-mode test-layout-above-half">' .
  $component() .
  '</div>' .

  '</div>';
}

function wrap_for_test(string $name, callable $get_test_component) {
  [$test_subject, $css] = $get_test_component();

  echo get_top_of_file(
    "Theodore - Test $name",
    array_merge(
      [
        "common/html-body.css",
        "common/test-layout.css"
      ],
      $css));
  echo $test_subject;
  echo get_bottom_of_file();
}

?>
