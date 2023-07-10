<?php

include_once("common/test/util.php");
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
    array_merge($banner_css, ["common/centering.css"])
  ];
}

?>

