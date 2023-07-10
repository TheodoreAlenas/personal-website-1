<?php

include_once("common/wraps/ends-of-main-html.php");
include_once("common/menu-bar/mod.php");
include_once("home/banner/mod.php");
include_once("home/story/mod.php");

function get_home_html(string $language) {

  $basic_css = [
    "common/wraps/html-body.css",
    "common/wraps/centering.css"];

  [$menu_bar, $menu_bar_css] = get_menu_bar_and_css(
    "Theodore", $language);
  [$banner, $banner_css] = get_banner_and_css($language);
  [$story, $story_css] = get_story_and_css($language);

  $css_to_include = array_merge(
    $basic_css,
    $menu_bar_css,
    $banner_css,
    $story_css);

  return
    get_top_of_file("Theodore - Home", $css_to_include) .
    $menu_bar .
    "<div class='banner-wrapper'>" .
    $banner .
    $story .
    "</div>" .
    get_bottom_of_file();
}

?>

