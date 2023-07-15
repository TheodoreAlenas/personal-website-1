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
  return <<<EOHTML

<table class='phone-dont-be-like-table phone-iinside-m3 phone-txt-cent'>
<tbody>
<tr> <td>e-mail</td> <td>dimakopt732@gmail.com</td> </tr>
<tr> <td>phone</td> <td>+30 693 975 1642</td> </tr>
<tr> <td>school's ID</td> <td>1115 2019 00048<br>UoA/ΕΚΠΑ</td> </tr>
</tbody>
</table>

<table class='phone-dont-be-like-table'>
<th>More about me</th>
<tr> <td>GitHub</td> <td>TheodoreAlenas</td> </tr>
<tr> <td>YouTube</td> <td>Theodore Alenas</td> </tr>
</table>

EOHTML;
}

function get_contact_gr() {
  return get_contact_en();
}

?>
