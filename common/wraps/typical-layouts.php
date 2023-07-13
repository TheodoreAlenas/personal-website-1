<?php

include_once("common/wraps/ends-of-main-html.php");
include_once("common/wraps/links.php");
include_once("common/wraps/gather-css.php");
include_once("common/menu-bar/mod.php");

function get_typical_layout(
  string $language,
  string $page_id,
  array $extra_css,
  string $pre_main,
  string $content,
) {

  $basic_css = [
    "common/wraps/html-body.css",
  ];

  [$menu_bar, $menu_bar_css] = get_menu_bar_and_css(
    $page_id, $language);

  $css_to_include = array_merge(
    $basic_css,
    $menu_bar_css,
    $extra_css,
    get_common_css_files(),
  );

  $my_name = "Theodore";
  if ($language == "gr") {
    $my_name = "Θοδωρής";
  }
  $title = $my_name . " - " . get_link_name($page_id, $language);

  return
    get_top_of_file($title, $css_to_include) .
    "<header class='free-media-query sticky'>" .
    $menu_bar .
    "</header>" .
    $pre_main .
    "<main class='free-media-query newspaper lrline p2'>" .
    $content .
    "</main>" .
    get_bottom_of_file();
}

?>
