<?php
// License at the bottom.

function get_high_priority_common_css_files() {
  return array_merge(
    get_css_snippet_files(),
    get_css_theme_files(),
  );
}

function get_low_priority_common_css_files() {
  return ["common/wraps/html-body.css"];
}

function get_css_snippet_files() {
  return [
    "common/css-snippets/morph.css",
    "common/css-snippets/popup.css",
    "common/css-snippets/fade.css",
    "common/css-snippets/margin-padding.css",
    "common/css-snippets/width-border.css",
    "common/css-snippets/display-position.css",
    "common/css-snippets/text.css",
  ];
}

function get_css_theme_files() {
  return [
    "common/light-dark-theme/from-outside.css",
    "common/light-dark-theme/panels.css",
    "common/light-dark-theme/links.css",
  ];
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
