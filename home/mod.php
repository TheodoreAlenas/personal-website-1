<?php

include_once("common/wraps/typical-layouts.php");
include_once("home/banner/mod.php");
include_once("home/story/mod.php");
include_once("home/hinting-hamburger/mod.php");

function get_home_html(string $language) {

  [$banner, $banner_css] = get_banner_and_css($language);
  [$story, $story_css] = get_story_and_css($language);
  [$hint_ham, $hint_ham_css] = get_hamburger_hint_and_css(
    "phone m0a m-like-h2");

  return get_typical_layout(
    $language,
    "home",
    array_merge($banner_css, $story_css, $hint_ham_css),

    "<div class='banner-wrapper free-media-query'>" .
    $banner .
    "</div>",

    $story . $hint_ham
  );
}

?>

