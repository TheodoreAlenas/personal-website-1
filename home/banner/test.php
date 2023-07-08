<?php

include_once("common/test-util.php");
include_once("home/banner/mod.php");

function get_banner_test_subject() {
  [$banner_en, $banner_css] = get_banner_and_css("en");
  $banner_gr = get_banner("gr");
  return [
    get_wrapped_in_asymmetric_grid($banner_en) .
    get_wrapped_in_asymmetric_grid($banner_gr),
    $banner_css
  ];
}

?>

