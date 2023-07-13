<?php

include_once("common/wraps/typical-layouts.php");
include_once("home/banner/mod.php");
include_once("home/story/mod.php");

function get_home_html(string $language) {

  [$banner, $banner_css] = get_banner_and_css($language);
  [$story, $story_css] = get_story_and_css($language);

  return get_typical_layout(
    $language,
    "home",
    array_merge($banner_css, $story_css),

    "<div class='banner-wrapper free-media-query'>" .
    $banner .
    "</div>",

    $story
  );
}

?>

