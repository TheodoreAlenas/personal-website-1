<?php
// License at the bottom.

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

/*
Copyright (c) 2023 Dimakopoulos Theodoros

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
?>
