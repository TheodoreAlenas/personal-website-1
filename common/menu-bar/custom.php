<?php
// License at the bottom.

function get_custom_menu_bar_and_css(string $title, array $elements) {
  return [
    get_custom_menu_bar($title, $elements),
    get_menu_bar_css()
  ];
}

function get_menu_bar_css() {
  return [
    str_replace(getcwd().'/', '', __DIR__) . "/css/default.css",
    str_replace(getcwd().'/', '', __DIR__) . "/css/phone.css",
  ];
}

function get_custom_menu_bar(string $title, array $elements) {

  $li = wrap_in_li($elements);
  $hamburgers = get_hamburger_checkbox_pair();
  return <<<EOHTML
<nav class='menu-bar bar-center relative'>
  <span class='
    menu-bar-title phone inl-bl ptb1 pl3
  '>$title</span>
  <ul class='
    desktop dont-be-like-list flex-row-spbet
    iinside-last-child-fat iinside-first-child-ffat
    inside-first-child-mra
    iinside-p3
  '>$li</ul>
  $hamburgers
  <ul class='
    hamburger-nav-list
    phone dont-be-like-list iinside-p2 absolute round ovf-hid
  '>$li</ul>
</nav>
EOHTML;
}

function get_hamburger_checkbox_pair() {
  $hamburger_hash = random_int(1, 1000);
  return <<<EOHTML
<input
  id='hamburger-checkbox-$hamburger_hash'
  type='checkbox'
  class='hamburger-checkbox phone fat-ghost-on-check'
/>
<label
  for='hamburger-checkbox-$hamburger_hash'
  class='abs-t-r hamburger-prettify phone inl-bl'
  role='img'
  aria-label='show menu'
> ☰</label>
EOHTML;
}

function wrap_in_li(array $components) {
  $e = '';
  foreach ($components as $component) {
    $e .= "<li class='inside-block'>";
    $e .= $component;
    $e .= "</li>";
  }
  return $e;
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

