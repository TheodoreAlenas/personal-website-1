<?php
// License at the bottom.

function get_face_and_name_aaand_css(
  string $extra_css_classes,
  string $face_file_name,
  string $alt_title,
  string $name,
  string $description) {

  return [
    get_face_and_name(
      $extra_css_classes,
      $face_file_name,
      $alt_title,
      $name,
      $description),
    ["contact/face-and-name.css"]
  ];
}

function get_face_and_name(
  string $extra_css_classes,
  string $face_file_name,
  string $alt_title,
  string $name,
  string $description) {

  return <<<EOHTML

<div class='face-and-name $extra_css_classes'>
<img src="$face_file_name" alt="$alt_title">
<span>$name</span>
<span>$description</span>
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
