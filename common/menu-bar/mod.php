<?php

include_once("common/data/links.php");
include_once("common/menu-bar/custom.php");

function get_menu_bar_and_css(string $where_am_i, string $language) {
  return [
    get_menu_bar($where_am_i, $language),
    get_menu_bar_css()
  ];
}
function get_menu_bar_for_test_navigation_and_css(string $title) {
  return [get_menu_bar_for_test_navigation($title), get_menu_bar_css()];
}

function get_menu_bar(string $where_am_i, string $language) {

  return get_custom_menu_bar(
    get_link_name_and_url("home", $language)[0],
    array_merge([
      get_maybe_im_here_link("home", $where_am_i, $language),
      get_menu_bar_theme_button($language),
      get_menu_bar_lang_link($where_am_i, $language),
    ], get_menu_bar_main_links($where_am_i, $language)));
}

function get_menu_bar_theme_button($language) {
  $text_inside = get_menu_bar_localized_theme_label($language);
  return <<<EOHTML

<button
  class='theme-switch dont-be-like-button buttony line-h-1em'
  style='width: 100%; text-align: left;'
>
$text_inside
</button>

EOHTML;
}

function get_menu_bar_localized_theme_label(string $language) {
  if ($language == "gr") {
    return "Χρώμα";
  }
  return "Theme";
}

function get_menu_bar_lang_link(
  string $where_am_i, string $current_language) {

  if ($current_language == "gr") {
    return
      "<a href='" .
      get_link_url($where_am_i, "en") .
      "'>English</a>";
  }
  return
    "<a href='" .
    get_link_url($where_am_i, "gr") .
    "'>Greek</a>";
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
    $title,
    [
      "<a href='../en/index.html'>Normal</a>",
      "<a href='banner.html'>Banner</a>",
      "<a href='menu-bar.html'>Menu Bar</a>",
    ]);
}

?>
