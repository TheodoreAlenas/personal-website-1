<?php

include_once("common/wraps/typical-layouts.php");
include_once("contact/face-and-name.php");

function get_contact_html(string $language) {
  [$contact, $css] = get_contact_and_css($language);
  $contact_wrapped = <<<EOHTML

<main class='newspaper'>
$contact
</main>

EOHTML;
  return get_typical_layout(
    $language, "contact", $css, "", $contact_wrapped
  );
}

function get_contact_and_css(string $language) {
  if ($language == "gr") {
    return get_contact_and_css_gr();
  }
  return get_contact_and_css_en();
}

function get_contact_and_css_en() {

  [$face_and_name, $face_and_name_css] = get_contact_face_and_css();
  
  $content = <<<EOHTML

$face_and_name
<h2>I'll be happy to meet you!</h2>
<table class='m0a'><tbody>
<tr><td>school's ID</td><td>1115 2019 00048 (UoA/ΕΚΠΑ)</td></tr>
<tr><td>YouTube</td><td>1115 2019 00048 (UoA/ΕΚΠΑ)</td></tr>
</tbody></table>

EOHTML;
  return [$content, $face_and_name_css];
}

function get_contact_and_css_gr() {

  [$face_and_name, $face_and_name_css] = get_contact_face_and_css();
  
  $content = <<<EOHTML

$face_and_name
<h2>Σας περιμένω. Καλή συνέχεια!</h2>
<table class='m0a'><tbody>
<tr><td>Φοιτητικός Α.Μ.</td><td>1115 2019 00048 (UoA/ΕΚΠΑ)</td></tr>
</tbody></table>

EOHTML;
  return [$content, $face_and_name_css];
}

function get_contact_face_and_css() {
  return get_face_and_name_aaand_css(
    "m-like-h2",
    "../images/pat.png",
    "mock of a social media pfp",
    "dimakop<b>t</b>732@gmail.com",
    "(+30) 693 975 1642");
}

?>
