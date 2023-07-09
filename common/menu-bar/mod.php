<?php

include_once("common/links.php");
include_once("common/menu-bar/custom.php");

function get_menu_bar_and_css(string $title, string $language) {
  return [get_menu_bar($title, $language), get_menu_bar_css()];
}
function get_menu_bar_for_test_navigation_and_css(string $title) {
  return [get_menu_bar_for_test_navigation($title), get_menu_bar_css()];
}

function get_menu_bar(string $title, string $language) {
  return get_custom_menu_bar(
    get_a_tag("home", $language),
    $title,
    [
      get_a_tag("portfolio", $language),
      get_a_tag("biography", $language),
      get_a_tag("contact", $language)
    ]);
}

function get_menu_bar_for_test_navigation(string $title) {
  return get_custom_menu_bar(
    "<a href='#'>[No Homeo]</a>",
    $title,
    [
      "<a href='test-banner.html'>Banner</a>",
      "<a href='test-menu-bar.html'>Menu Bar</a>",
    ]);
}

?>
