<?php

include_once("common/wraps/typical-layouts.php");
include_once("contact/face-and-name.php");

function get_contact_html(string $language) {
  [$contact, $css] = get_contact_and_css($language);
  return get_typical_layout(
    $language, "contact", $css, "", $contact
  );
}

function get_contact_and_css(string $language) {
  if ($language == "gr") {
    return get_contact_and_css_gr();
  }
  return get_contact_and_css_en();
}

function get_contact_and_css_en() {
  return get_contact_and_css_with_text(get_contact_text_en());
}
function get_contact_and_css_gr() {
  return get_contact_and_css_with_text(get_contact_text_gr());
}

function get_contact_and_css_with_text(array $fields) {

  [$face_and_name, $face_and_name_css] = get_face_and_name_aaand_css(
    "../images/pat.png",
    "mock of a social media pfp",
    "dimakop<b>t</b>732@gmail.com",
    "(+30) 693 975 1642");
  
  return [$face_and_name . $fields[0], $face_and_name_css];
}

function get_contact_text_en() {
  return [
    "school's ID", '1115 2019 00048', 'UoA/ΕΚΠΑ',
    "I'll be happy to meet you!",
    'Links',
  ];
}

function get_contact_text_gr() {
  return [
    "Φοιτητικός Α.Μ.", '1115 2019 00048', 'UoA/ΕΚΠΑ',
    "Σας περιμένω. Καλή συνέχεια!",
    'Σύνδεσμοι',
  ];
}

?>
