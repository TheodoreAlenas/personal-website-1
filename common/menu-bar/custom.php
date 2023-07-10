<?php

function get_custom_menu_bar_and_css(
  string $left_element, string $title, array $right_elements) {
  return [
    get_custom_menu_bar($left_element, $title, $right_elements),
    get_menu_bar_css()
  ];
}

function get_menu_bar_css() {
  return ["target/menu-bar.css"];
}

function get_custom_menu_bar(
  string $left_element, string $title, array $right_elements) {

  $li = wrap_in_li($right_elements);
  return
    "<header class='menu-bar'><nav>" .
    $left_element .
    "<span>$title</span>" .
    "<ul class='desktop-nav-list'>$li</ul>" .
    get_hamburger_checkbox_pair() .
    "<ul class='hamburger-nav-list'>$li</ul>" .
    "</nav></header>";
}

function get_hamburger_checkbox_pair() {
  $hamburger_hash = random_int(1, 1000);
  return
    "<input" .
    " id='hamburger-checkbox-$hamburger_hash'" .
    " type='checkbox'" .
    " class='hamburger-checkbox'" .
    "/>" .
    "<label" .
    " for='hamburger-checkbox-$hamburger_hash'" .
    " class='hamburger-label'" .
    "> ☰</label>";
}

function wrap_in_li(array $components) {
  $e = '';
  foreach ($components as $component) {
    $e .= "<li>$component</li>";
  }
  return $e;
}

?>

