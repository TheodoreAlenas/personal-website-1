<?php

function get_banner_faces() {
  return
    '<div class="banner-faces">' .
    get_littles_unwrapped() .
    '</div>';
}

function get_littles_unwrapped() {
  $e = '';
  $littles_dir = opendir("images/littles");
  if ($littles_dir != false) {
    $e .= get_littles_from_open_dir($littles_dir);
    closedir($littles_dir);
  }
  return $e;
}

function get_littles_from_open_dir($littles_dir) {
  $e = '';
  while (($image_name = readdir($littles_dir)) != false) {
    if ($image_name == '.' || $image_name == '..') {
      continue;
    }
    $e .= get_img_from_image_name($image_name);
  }
  return $e;
}

function get_img_from_image_name($image_name) {
  return "<img src=\"../images/littles/$image_name\"" .
    " style=\"background-image: url('" .
    "../images/littles-8-times-shorter/$image_name" .
    "');\">";
}

?>

