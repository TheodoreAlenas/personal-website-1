<?php
// License at the bottom.

function get_hamburger_hint_and_css(string $extra_css_classes) {
  return [
    get_hamburger_hint($extra_css_classes),
    ["home/hinting-hamburger/m.css"]
  ];
}

function get_hamburger_hint(string $extra_css_classes) {
  return <<<EOHTML

<div class='$extra_css_classes
  hintham-round hintham-wide hintham-padded hintham-contrast'>
<div class='hintham-tall hintham-same-bg'>
<div class='hintham-short hintham-shadow'>
<div class='hintham-scale-text hintham-right hintham-glow'>
☰
</div>
</div>
</div>
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
