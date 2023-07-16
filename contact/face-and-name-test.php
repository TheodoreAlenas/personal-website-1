<?php

include_once("contact/face-and-name.php");
include_once("common/testing/util.php");

echo wrap_for_test("Facebook", "get_face_and_name_test_subject");

function get_face_and_name_test_subject() {

  [$f, $css] = get_face_and_name_aaand_css(
    "",
    "../images/pat.png",
    "mock of a social media pfp",
    "dimakop<b>t</b>732@gmail.com",
    "(+30) 693 975 1642");

  return [$f, $css];
}

?>
