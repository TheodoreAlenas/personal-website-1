<?php
// License at the bottom.

include_once("common/testing/util.php");
include_once("common/menu-bar/mod.php");

function get_draft_gr_menu() {
  return get_menu_bar("biography", "gr");
}
function get_draft_en_menu() {
  return get_menu_bar("biography", "en");
}

function get_menu_bar_test_subject() {
  $menu_bar_css = get_menu_bar_css();
  return [
    wrap_callable_in_asymmetric_grid("get_draft_en_menu") .
    wrap_callable_in_asymmetric_grid("get_draft_gr_menu") .
    "<div class='hamburger-on'>" .
    wrap_callable_in_asymmetric_grid("get_draft_en_menu") .
    wrap_callable_in_asymmetric_grid("get_draft_gr_menu") .
    "</div>",
    $menu_bar_css
  ];
}

echo wrap_for_test("menu-bar", "get_menu_bar_test_subject");

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
