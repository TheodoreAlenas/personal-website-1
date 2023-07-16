<?php

function get_face_and_name_aaand_css(
  string $extra_css_classes,
  string $face_file_name,
  string $alt_title,
  string $name,
  string $description) {

  return [
    get_face_and_name(
      $extra_css_classes,
      $face_file_name,
      $alt_title,
      $name,
      $description),
    ["contact/face-and-name.css"]
  ];
}

function get_face_and_name(
  string $extra_css_classes,
  string $face_file_name,
  string $alt_title,
  string $name,
  string $description) {

  return <<<EOHTML

<div class='face-and-name $extra_css_classes'>
<img src="$face_file_name" alt="$alt_title">
<span>$name</span>
<span>$description</span>
</div>

EOHTML;
}

?>
