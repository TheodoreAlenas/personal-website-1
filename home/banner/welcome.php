<?php
// License at the bottom.

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

/*
Copyright (c) 2023 Dimakopoulos Theodoros

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
?>
