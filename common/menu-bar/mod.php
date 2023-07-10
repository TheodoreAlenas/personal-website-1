<?php

include_once("common/data/links.php");
include_once("common/menu-bar/custom.php");

function get_menu_bar_and_css(
  string $title, string $where_am_i, string $language) {
  return [
    get_menu_bar($title, $where_am_i, $language),
    get_menu_bar_css()
  ];
}
function get_menu_bar_for_test_navigation_and_css(string $title) {
  return [get_menu_bar_for_test_navigation($title), get_menu_bar_css()];
}

function get_menu_bar(
  string $title, string $where_am_i, string $language) {

  return get_custom_menu_bar(
    get_maybe_im_here_link("home", $where_am_i, $language),
    $title,
    array_merge([
      "<a href='../gr/index.html'>GR</a>",
      "<a href='../en/index.html'>EN</a>"
    ], get_menu_bar_main_links($where_am_i, $language)));
}

function get_menu_bar_main_links(string $where_am_i, string $language) {
  $main_links = [];

  foreach (["portfolio", "biography", "contact"] as $link) {
    array_push(
      $main_links,
      get_maybe_im_here_link($link, $where_am_i, $language));
  }
  return $main_links;
}

function get_menu_bar_for_test_navigation(string $title) {
  return get_custom_menu_bar(
    "<a href='" . get_link_url("home") . "'>Normal</a>",
    $title,
    [
      "<a href='banner.html'>Banner</a>",
      "<a href='menu-bar.html'>Menu Bar</a>",
    ]);
}

?>
