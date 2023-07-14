<?php

function get_custom_menu_bar_and_css(string $title, array $elements) {
  return [
    get_custom_menu_bar($title, $elements),
    get_menu_bar_css()
  ];
}

function get_menu_bar_css() {
  return [
    __DIR__ . "/css/default.css",
    __DIR__ . "/css/phone.css",
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
    desktop-nav-list
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

?>

