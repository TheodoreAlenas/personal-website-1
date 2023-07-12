<?php

function get_bio_content(string $language) {
  if ($language == "gr") {
    return
      get_bio_school_gr() .
      get_bio_uni_gr();
  }
  return
    get_bio_school_en() .
    get_bio_uni_en();
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

function get_bio_uni_en() {
  return <<<EOHTML

<p>
Started in the Department of Informatics
and Telecommunications
in the <b>University of Athens</b> in 2019,
sometimes referred to as DI UoA.
Though formally the department was declared to
last 4 years at that time,
the professors agree that
it had the structure of a 5 year department.
Recently they formalized that.
Currently I just finished my 4th year,
and I expect to be done in 2 more years from now.
Typically in Greek departments subjects can be
taken in any order, with some constraints.
</p>

EOHTML;
}

function get_bio_uni_gr() {
  return <<<EOHTML

<p>
Ξεκίνησα το 2019 τις σπουδές μου στο
Εθνικό και Καπποδιστριακό Πανεπιστήμιο Αθηνών
(<b>ΕΚΠΑ</b>/UoA),
στο τμήμα Πληροφορικής και Τηλεπικοινωνιών.
Τώρα, το καλοκαίρι του 2023,
αναμένω να έχω τελειώσει το 2025,
σε δύο έτη από τώρα.
Το 2019 η σχολή ήταν επίσημα τετραετής,
αλλά όπως συμφωνούν οι καθηγητές του τμήματος,
η δομή του προγράμματος αντιστοιχεί σε πενταετή σχολή.
Τελευταία επισημοποιήθηκε αυτή η αναμενόμενη διάρκεια.
</p>

EOHTML;
}

?>
