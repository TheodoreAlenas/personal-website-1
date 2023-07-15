<?php

function get_face_and_name_aaand_css(
  string $face_file_name,
  string $alt_title,
  string $name,
  string $description) {

  return [
    get_face_and_name(
      $face_file_name,
      $alt_title,
      $name,
      $description),
    ["contact/face-and-name.css"]
  ];
}

function get_face_and_name(
  string $face_file_name,
  string $alt_title,
  string $name,
  string $description) {

  return <<<EOHTML

<div class=face-and-name>
<img src="$face_file_name" alt="$alt_title">
<span>$name</span>
<span>$description</span>
</div>

EOHTML;
}

?>
