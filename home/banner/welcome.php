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
  src="../images/face-4-times-shorter.png"
  style="background-image: url(data:image/png;base64,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);"
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
