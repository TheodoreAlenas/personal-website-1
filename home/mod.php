<?php
// License at the bottom.

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

