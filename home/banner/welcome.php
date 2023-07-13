<?php

function get_welcome(String $language) {
  if ($language == "gr")
    return "Θοδωρής<br>Δημακόπουλος";
  return "Nice to see you!<br>My name is Theodore.";
}

function get_banner_welcome_face(String $language) {
  return <<<EOHTML
<div class="banner-grid">

<span class="banner-welcome">
EOHTML .
get_welcome($language) .
<<<EOHTML
</span>

<img
  src="../images/face.jpg"
  style="background-image: url(
    '../images/face-64-times-shorter.png'
    );"
  alt="a relaxed expression of Theodore"
>

</div>
EOHTML;
}

?>
