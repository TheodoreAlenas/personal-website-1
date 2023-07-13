<?php

include_once("common/wraps/ends-of-main-html.php");
include_once("common/wraps/gather-css.php");
include_once("common/menu-bar/mod.php");

function wrap_in_asymmetric_grid(string $component) {
  return wrap_4_elements_in_asymmetric_grid(
    [$component, $component, $component, $component]
  );
}

function wrap_callable_in_asymmetric_grid(callable $component) {
  return wrap_4_elements_in_asymmetric_grid(
    [$component(), $component(), $component(), $component()]
  );
}

function wrap_4_elements_in_asymmetric_grid(array $four_elements) {
  return <<<EOHTML
<div class="test-wrapper">

  <div class="debug-mode test-layout-tall phone-screen">
  $four_elements[0]
  </div>

  <div class="debug-mode test-layout-almost desktop-screen">
  $four_elements[1]
  </div>

  <div class="debug-mode test-layout-below-half phone-screen">
  $four_elements[2]
  </div>

  <div class="debug-mode test-layout-above-half desktop-screen">
  $four_elements[3]
  </div>

</div>
EOHTML;
}

function wrap_for_test(string $name, callable $get_test_component_and_css) {
  [$test_subject, $subject_css] = $get_test_component_and_css();
  [$menu, $menu_css] = get_menu_bar_for_test_navigation_and_css($name);

  echo get_top_of_file(
    "Theodore - Test $name",
    array_merge(
      get_low_priority_common_css_files(),
      ["common/testing/layout.css"],
      $subject_css,
      $menu_css,
      get_high_priority_common_css_files()
    ));
  echo "<header class='free-media-query'>";
  echo $menu;
  echo "</header>";
  echo $test_subject;
  echo get_bottom_of_file();
}

?>
