<?php

function get_welcome(String $language) {
  if ($language == "gr")
    return "Θοδωρής<br>Δημακόπουλος";
  return "Good evening!<br>My name is Theodore.";
}

function get_banner_welcome_face(String $language) {
  return <<<EOHTML
<div class="banner-grid">

<span class="banner-welcome">
EOHTML .
get_welcome($language) .
<<<EOHTML
</span>

<img src="images/face.jpg" style="background-image: url('images/face-16-times-shorter.png');">

</div>
EOHTML;
}

?>
