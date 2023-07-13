<?php

include_once("common/wraps/typical-layouts.php");
include_once("biography/content.php");

function get_biography_html(string $language) {

  return get_typical_layout(
    $language,
    "biography",
    [],
    "",
    get_bio_content($language)
  );

}

?>

