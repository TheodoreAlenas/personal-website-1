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
  return
    "<nav class='menu-bar m0a relative'>" .
    "<span class='menu-bar-title phone inl-bl ptb1 pl3'>$title</span>" .
    "<ul class='" .
    "desktop-nav-list desktop " .
    "flex-row-spbet inside-last-child-fat inside-first-child-ffat" .
    "'>$li</ul>" .
    get_hamburger_checkbox_pair() .
    "<ul class='hamburger-nav-list phone'>$li</ul>" .
    "</nav>";
}

function get_hamburger_checkbox_pair() {
  $hamburger_hash = random_int(1, 1000);
  return
    "<input" .
    " id='hamburger-checkbox-$hamburger_hash'" .
    " type='checkbox'" .
    " class='hamburger-checkbox phone fat-ghost-on-check'" .
    "/>" .
    "<label" .
    " for='hamburger-checkbox-$hamburger_hash'" .
    " class='hamburger-label phone in-bl'" .
    "> ☰</label>";
}

function wrap_in_li(array $components) {
  $e = '';
  foreach ($components as $component) {
    $e .= "<li class='inside-block inside-p3 inside-toast'>";
    $e .= $component;
    $e .= "</li>";
  }
  return $e;
}

?>

