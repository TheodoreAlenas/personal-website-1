<?php

function get_content_and_css(string $language) {
  if ($language == "gr") {
    return [get_bio_school_gr(), []];
  }
  return [get_bio_school_en(), []];
}


function get_bio_school_en() {
  return <<<EOHTML

<p>
Studied <b>sciences</b> in secondary school in Greece
(math, physics, chemistry,
reading and writing formal essays)
and passed with 17325/20000 in 2019.
2019 is a year known for the extra difficulty
in the final exams.
</p>

EOHTML;
}

function get_bio_school_gr() {
  return <<<EOHTML

<p>
Ολοκλήρωσα σε Γενικό Λύκειο
σε κατεύθυνση <b>θετικών επιστημών</b>
με βαθμολογία 17325 μόρια στις Πανελλαδικές εξετάσεις,
το 2019.
Το 2019 ήταν έτος με αρκετά δύσκολες εξετάσεις.
</p>

EOHTML;
}

?>
