<?php
// License at the bottom.

function phone_media_wrap(string $include_this) {
  echo "@media screen and (max-width: 800px) {";
  include($include_this);
  echo "}";
}

function prepend_class_to(string $prepend, string $css_file) {
  $file = fopen($css_file, "r");
  if ($file != false) {
    prepend_class_to_open_file($prepend, $file);
    fclose($file);
  }
}

function prepend_class_to_open_file(string $prepend, $file) {
  while (($line = fgets($file)) != false) {
    if ($line[0] == '.') {
      echo $prepend . $line;
    }
    else {
      echo $line;
    }
  }
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
