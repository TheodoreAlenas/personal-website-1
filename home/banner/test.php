<?php

include_once("common/testing/util.php");
include_once("home/banner/mod.php");

echo wrap_for_test("banner", "get_banner_test_subject");

function get_banner_test_subject() {
  [$banner_en, $banner_css] = get_banner_and_css("en");
  $banner_gr = get_banner("gr");
  $en_wrapped = "<div class='banner-wrapper'>" . $banner_en . "</div>";
  $gr_wrapped = "<div class='banner-wrapper'>" . $banner_gr . "</div>";
  return [
    wrap_in_asymmetric_grid($en_wrapped) .
    wrap_in_asymmetric_grid($gr_wrapped),
    $banner_css
  ];
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

