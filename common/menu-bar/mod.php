<?php
// License at the bottom.

include_once("common/wraps/links.php");
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
    get_link_name($where_am_i, $language),
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
  class='theme-switch dont-be-like-button buttony line-h-1em smol'
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
      "<a class='smol' href='" .
      get_link_url($where_am_i, "en") .
      "'>English</a>";
  }
  return
    "<a class='smol' href='" .
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
      "<a href='face-and-name.html'>Facebook</a>",
      "<a href='menu-bar.html'>Menu Bar</a>",
      "<a href='contact.html'>Contact</a>",
    ]);
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
