<?php

include_once("common/testing/util.php");
include_once("contact/mod.php");

echo wrap_for_test("contact", "get_contact_test_subject");

function get_contact_test_subject() {

  $english_version = get_contact_en();
  $greek_version = get_contact_gr();

  return [
    wrap_in_asymmetric_grid($english_version) .
    wrap_in_asymmetric_grid($greek_version),
    []
  ];
}

?>


