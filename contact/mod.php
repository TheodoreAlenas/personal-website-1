<?php

include_once("common/wraps/typical-layouts.php");

function get_contact_html(string $language) {
  return get_typical_layout($language, "contact", [], "", "hello");
}

?>
