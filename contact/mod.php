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

<p style='font-size: 150%; font-family: monospace; text-align: center; letter-spacing: 0.1rem;'>dimakop<span style="color: red;">t</span>732@gmail.com</p>

<p style='font-size: 150%; font-family: monospace; text-align: center; letter-spacing: 0.1rem;'>+30 693 975 1642</p>

<h2>Student ID</h2>
<pre style='text-align: center;'>1115 2019 00048</pre>
<p style='text-align: center;'>
National and Kappodistrian University of Athens (UoA) /<br>
Εθνικό και Καπποδιστριακό Πανεπιστήμιο Αθηνών (ΕΚΠΑ)
</p>

EOHTML;
}

function get_contact_gr() {
  return <<<EOHTML

<h2>E-mail</h2>
<pre style='text-align: center;'>dimakopt732@gmail.com</pre>

<h2>Τηλέφωνο</h2>
<pre style='text-align: center;'>(+30) 693 975 1642</pre>

<h2>Φοιτητικός ΑΜ</h2>
<pre style='text-align: center;'>1115 2019 00048</pre>
<p style='text-align: center;'>
Εθνικό και Καπποδιστριακό Πανεπιστήμιο Αθηνών (ΕΚΠΑ) /<br>
National and Kappodistrian University of Athens (UoA)
</p>

EOHTML;
}

?>
