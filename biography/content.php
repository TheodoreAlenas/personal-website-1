<?php

function get_bio_content(string $language) {
  if ($language == "gr") {
    return
      get_bio_school_gr() .
      get_bio_uni_gr() .
      get_bio_team_projects_gr() .
      get_bio_internship_gr() .
      get_bio_piano_gr() .
      get_bio_drawing_gr() .
      '';
  }
  return
    get_bio_school_en() .
    get_bio_uni_en() .
    get_bio_team_projects_en() .
    get_bio_internship_en() .
    get_bio_piano_en() .
    get_bio_drawing_en() .
    '';
}


function get_bio_school_en() {
  return <<<EOHTML

<p>
Studied <b>sciences</b> in secondary school in Greece
(math, physics, chemistry,
reading and writing formal essays)
in the second general high school of Amaliada,
and passed with 17325/20000 in 2019.
2019 is a year known for the extra difficulty
in the final exams.
</p>

EOHTML;
}

function get_bio_school_gr() {
  return <<<EOHTML

<p>
Ολοκλήρωσα στο 2ο Γενικό Λύκειο Αμαλιάδας
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

function get_bio_team_projects_en() {
  return <<<EOHTML

<p>
In the University
I've been in multiple <b>team projects</b>,
in my first 3 or 4 I was avoiding
collaboration as much as possible,
as it is usual.
In the 4th year I had
<a href="portfolio.html"
>one of the collaborations that I hold most dear</a>.
After that there were
2 other teams that were friendly,
but they weren't much into collaboration.
That got me in trouble, because I would
annoy them, drain all of my energy
and get depressed.
Then I did
<a href=portfolio.html
>my best collaboration</a>
with 3 new friends I made.
</p>

EOHTML;
}

function get_bio_team_projects_gr() {
  return <<<EOHTML
<p>
Στο Πανεπιστήμιο οι πιο σημαντικές εμπειρίες για μένα
ήταν οι ομαδικές εργασίες.
Στις πρώτες 3 με 4 απέφευγα την επικοινωνία.
Στο τέταρτο έτος είχα
<a href="portfolio.html"
>μία από τις σημαντικότερες εμπειρίες μου</a>.
Ύστερα από αυτό συνεργάστηκα σε δύο ομάδες
που τα άλλα άτομα ήταν φιλικά αλλά
δεν ενδιαφέρονταν για συνεργασία,
και αυτό το δυναμικό προκάλεσε προβλήματα
γιατί τους ήμουν ενοχλητικός,
ξόδευα όλη μου την ενέργεια
και έπεφτα ψυχολογικά.
Έπειτα έκανα
<a href=portfolio.html
>την καλύτερη συνεργασία που έχω κάνει ποτέ</a>
με τρεις από τους καινούριους μου φίλους.

EOHTML;
}

function get_bio_internship_en() {
  return <<<EOHTML

<p>
The only <b>internship</b> I've had so far,
as of summer of 2023,
was a little guidance to learn web development.
I didn't learn much because I didn't have the foundations
plus they didn't have a lot of time.
The company is called <a href=https://helvia.io>Helvia</a> and
it focuses on chatbots.
It was informal, and it happened because
my family had connections with them.
</p>

EOHTML;
}

function get_bio_internship_gr() {
  return <<<EOHTML

<p>
Η μόνη <b>πρακτική άσκηση</b> που έχω κάνει
μέχρι στιγμής, το καλοκαίρι του 2023,
είναι λίγη καθοδήγηση από μία εταιρεία
ώστε να μάθω βασικές έννοιες του web development.
Δεν έμαθα πολλά γιατί δεν είχα εμπειρία
και δεν είχαν χρόνο οι ίδιοι.
Η εταιρεία ονομάζεται <a href=https://helvia.io>Helvia</a> και
εστιάζει στα chatbots.
Η άσκηση ήταν ανεπίσημη, συνεργαστήκαμε
επειδή υπήρχαν οικογενειακές συνδέσεις.
</p>

EOHTML;
}

function get_bio_piano_en() {
  return <<<EOHTML

<p>
I played the <b>piano</b>
to the 7th out of the 9 levels,
the way it's measured in Greece.
Then I quit, when I realized that I wasn't playing
with a solid purpose.
</p>

EOHTML;
}
function get_bio_piano_gr() {
  return <<<EOHTML

<p>
Έφτασα στο επίπεδο πρώτης ανωτέρας στο πιάνο
και το διέκοψα γιατί ανακάλυψα ότι δεν έπαιζα με
καθαρό σκοπό.
</p>

EOHTML;
}

function get_bio_drawing_en() {
  return <<<EOHTML

<p>
I did papercrafts from a very young age
and in my 20s I took drawing seriously.
I got to the 5th lesson of
<a href=https://drawabox.com>Draw A Box</a>,
a series of written lessons
commonly viewed as notorious,
associated with an online group of practitioners
and a series of videos.
Drawing taught me to respect elderly professionals
and discipline.
Over 2 years I drew a series of short comics and
I sketched places I've been to and
there was always purpose that drove the drawing.
I quit after the Inking October because
I overdid it and missed multiple school projects.
</p>

EOHTML;
}

function get_bio_drawing_gr() {
  return <<<EOHTML

<p>
Ασχολούμουν με χαρτοκατασκευές από μικρή ηλικία
και στα 20 απέκτησα πάθος με τη ζωγραφική.
Έφτασα μέχρι το 5ο μάθημα της σειράς
<a href=https://drawabox.com>Draw A Box</a>,
μια επίπονη σειρά μαθημάτων
που συνοδεύεται από μία σειρά βίντεο και
μία διαδικτυακή κοινότητα από ακόλουθους.
Η ζωγραφική με δίδαξε να σέβομαι
επαγγελματίες προχωρημένης ηλικίας,
καθώς και την οργανωμένη, υπομονετική δουλειά.
Σε διάστημα 2 χρόνων σχεδίασα ένα σύνολο
από μικρές ιστορίες και τοπία,
και σταμάτησα επειδή από κακή οργάνωση
απορροφήθηκα και έχασα σχολικές εργασίες.
</p>

EOHTML;
}

?>
