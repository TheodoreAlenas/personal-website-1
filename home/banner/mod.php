<?php

include_once("home/banner/faces.php");
include_once("home/banner/welcome.php");

function get_banner_and_css(String $language) {
  return [get_banner($language), ["target/banner.css"]];
}

function get_banner(String $language) {
  return 
    get_banner_welcome_face($language) .
    get_banner_faces();
}

?>
