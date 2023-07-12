<?php

include_once("common/wraps/ends-of-main-html.php");
include_once("common/wraps/gather-css.php");
include_once("common/menu-bar/mod.php");
include_once("biography/content.php");

function get_biography_html(string $language) {

  $basic_css = [
    "common/wraps/html-body.css",
  ];

  [$menu_bar, $menu_bar_css] = get_menu_bar_and_css(
    "biography", $language);
  [$content, $content_css] = get_content_and_css($language);

  $css_to_include = array_merge(
    $basic_css,
    $menu_bar_css,
    $content_css,
    get_common_css_files()
  );

  return
    get_top_of_file("Theodore - Home", $css_to_include) .
    "<header class='free-media-query sticky'>" .
    $menu_bar .
    "</header>" .
    $content .
    get_bottom_of_file();
}

?>

