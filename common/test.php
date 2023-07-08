<?php

include_once("home/banner/test.php");
include_once("common/ends-of-main-html.php");

[$banner_test_subject, $banner_css] = get_banner_test_subject();

echo get_top_of_file(
  "Theodore - Test layouts",
  array_merge(
    [
      "common/html-body.css",
      "common/test-layout.css"
    ],
    $banner_css));
echo $banner_test_subject;
echo get_bottom_of_file();


?>
