<?php
// License at the bottom.

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

$face_and_name
<ul class="dont-be-like-list txt-cent">
<li>I'm looking for internship from September 2023 for 6 months,</li>
<li>I live in Zografou, Athens, and I'm sorry but</li>
<li>I can't provide with ΕΣΠΑ money.</li>
</ul>
$extra_table

EOHTML;
  return [$content, $face_and_name_css];
}

function get_contact_and_css_gr() {

  [$face_and_name, $face_and_name_css] = get_contact_face_and_css();
  $extra_table = get_contact_extra_table();
  
  $content = <<<EOHTML

$face_and_name
<p>
<ul class="dont-be-like-list txt-cent">
<li>Ψάχνω για πρακτική άσκηση από Σεπτέμβριο 2023 για το εξάμηνο.</li>
<li>Μένω στη Ζωγράφου, Αθήνα, και λυπάμαι αλλά</li>
<li>δεν έχω δηλώσει για χρηματοδότηση ΕΣΠΑ.</li>
</ul>
</p>
$extra_table

EOHTML;
  return [$content, $face_and_name_css];
}

function get_contact_face_and_css() {
  return get_face_and_name_aaand_css(
    "p3 phone-p2 m-like-h2 mlra round inverse-theme",
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

/*
Copyright (c) 2023 Dimakopoulos Theodoros

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
?>
