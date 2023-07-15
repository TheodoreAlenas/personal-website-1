<?php

include_once("common/wraps/typical-layouts.php");

function get_contact_html(string $language) {
  return get_typical_layout(
    $language, "contact", [], "", get_contact($language)
  );
}

function get_contact(string $language) {
  if ($language == "gr") {
    return get_contact_gr();
  }
  return get_contact_en();
}

function get_contact_en() {
  return get_contact_with_text(get_contact_text_en());
}
function get_contact_gr() {
  return get_contact_with_text(get_contact_text_gr());
}

function get_contact_with_text($fields) {
  $dimakopt = "dimakop<b>t</b>732@gmail.com";
  
  return <<<EOHTML

<table class='
mlra desktop-mtb4
dont-be-like-table iinside-mtb3 txt-cent
'>
<tbody>
<tr><td>$fields[0]</td><td class=ffat>$dimakopt</td></tr>
<tr><td>$fields[1]</td><td class=ffat>$fields[2]</td></tr>
<tr><td>$fields[3]</td><td class=ffat>$fields[4]<br>$fields[5]</td></tr>
</tbody>
</table>

<h2 style='margin: initial;'>$fields[6]</h2>

<table class='mlra'>
<tbody class='iinside-p1'>
<tr><td>YouTube</td><td>
  <a href=https://www.youtube.com/channel/UCk-LNNSuhxvzXTdbiogd0Kg>
    Theodore Alenas
  </a>
</td></tr>

<tr><td>GitHub</td><td>
  <a href=https://github.com/TheodoreAlenas>
    TheodoreAlenas
  </a>
</td></tr>
</tbody>
</table>

EOHTML;
}

function get_contact_text_en() {
  return [
    'e-mail',
    'phone (Greece)', '+30 693 975 1642',
    "school's ID", '1115 2019 00048', 'UoA/ΕΚΠΑ',
    'Links',
  ];
}

function get_contact_text_gr() {
  return [
    'E-mail',
    'Τηλέφωνο', '(+30) 693 975 1642',
    "Φοιτητικός Α.Μ.", '1115 2019 00048', 'UoA/ΕΚΠΑ',
    'Σύνδεσμοι',
  ];
}

?>
