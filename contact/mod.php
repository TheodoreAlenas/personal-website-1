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
  $extra_table = get_contact_extra_table();
  
  $content = <<<EOHTML

<h2>I'll be happy to meet you!</h2>
$face_and_name
$extra_table

EOHTML;
  return [$content, $face_and_name_css];
}

function get_contact_and_css_gr() {

  [$face_and_name, $face_and_name_css] = get_contact_face_and_css();
  $extra_table = get_contact_extra_table();
  
  $content = <<<EOHTML

<h2>Σας περιμένω. Καλή συνέχεια!</h2>
$face_and_name
$extra_table

EOHTML;
  return [$content, $face_and_name_css];
}

function get_contact_face_and_css() {
  return get_face_and_name_aaand_css(
    "p3 m3 mlra round inverse-theme",
    "../images/pat.png",
    "mock of a social media pfp",
    "dimakop<b>t</b>732@gmail.com",
    "(+30) 693 975 1642");
}

function get_contact_extra_table() {
  return <<<EOHTML

<table class='m0a' style='border-spacing: 1em;'><tbody>
<tr><td>
<a href=https://www.di.uoa.gr>
UoA/ΕΚΠΑ</a>
</td><td>1115 2019 00048</td></tr>
<tr><td>YouTube</td><td>
<a href=https://www.youtube.com/channel/UCk-LNNSuhxvzXTdbiogd0Kg>
Theodore Alenas</a>
</td></tr>
<tr><td>GitHub</td><td>
<a href=https://github.com/TheodoreAlenas/>
TheodoreAlenas</a>
</td></tr>
</tbody></table>

EOHTML;
}

?>
