<?php

include_once("common/wraps/ends-of-main-html.php");
include_once("common/menu-bar/mod.php");

function wrap_in_asymmetric_grid(string $component) {

  return '<div class="test-wrapper">' .
    '<div class="debug-mode test-layout-tall phone-screen">' .
  $component .
  '</div>' .

  '<div class="debug-mode test-layout-almost">' .
  $component .
  '</div>' .

  '<div class="debug-mode test-layout-below-half phone-screen">' .
  $component .
  '</div>' .

  '<div class="debug-mode test-layout-above-half">' .
  $component .
  '</div>' .

  '</div>';
}

function wrap_callable_in_asymmetric_grid(callable $component) {

  return '<div class="test-wrapper">' .
    '<div class="debug-mode test-layout-tall phone-screen">' .
  $component() .
  '</div>' .

  '<div class="debug-mode test-layout-almost">' .
  $component() .
  '</div>' .

  '<div class="debug-mode test-layout-below-half phone-screen">' .
  $component() .
  '</div>' .

  '<div class="debug-mode test-layout-above-half">' .
  $component() .
  '</div>' .

  '</div>';
}

function wrap_for_test(string $name, callable $get_test_component_and_css) {
  [$test_subject, $subject_css] = $get_test_component_and_css();
  [$menu, $menu_css] = get_menu_bar_for_test_navigation_and_css($name);

  echo get_top_of_file(
    "Theodore - Test $name",
    array_merge(
      [
        "common/wraps/html-body.css",
        "common/test/layout.css"
      ],
      $subject_css,
      $menu_css));
  echo $menu;
  echo $test_subject;
  echo get_bottom_of_file();
}

?>
