<?php

include_once("common/wraps/typical-layouts.php");

function get_contact_html(string $language) {
  return get_typical_layout(
    $language, "contact", [], "",
    <<<EOHTML

<h2>E-mail</h2>
<pre style='text-align: center;'>dimakopt732@gmail.com</pre>

<h2>Phone</h2>
<pre style='text-align: center;'>+30 693 975 1642</pre>

EOHTML
  );
}

?>
