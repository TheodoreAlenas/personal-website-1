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

<table class='
mlra desktop-mtb4
phone-dont-be-like-table phone-iinside-mtb3 phone-txt-cent
'>
<tbody class='desktop-iinside-p2'>
<tr> <td>e-mail</td> <td class=ffat>dimakop<b>t</b>732@gmail.com</td> </tr>
<tr> <td>phone</td> <td class=ffat>+30 693 975 1642</td> </tr>
<tr> <td>school's ID</td> <td class=ffat>1115 2019 00048<br>UoA/ΕΚΠΑ</td> </tr>
</tbody>
</table>

<h2>More about me</h2>

<table class='mlra'>
<tbody class='iinside-p2'>
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

function get_contact_gr() {
  return get_contact_en();
}

?>
