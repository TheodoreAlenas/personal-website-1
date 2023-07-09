<?php

include_once("common/test-util.php");
include_once("common/menu-bar/mod.php");

function get_draft_gr_menu() {
  return get_menu_bar("Titularos", "gr");
}
function get_draft_en_menu() {
  return get_menu_bar("Title", "en");
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

?>
