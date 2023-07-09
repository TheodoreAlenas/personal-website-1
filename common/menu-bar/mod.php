<?php

include_once("common/links.php");

function get_menu_bar_and_css(string $title, string $language) {
  return [get_menu_bar($title, $language), get_menu_bar_css()];
}

function get_menu_bar_css() {
  return [
    "common/menu-bar/menu-bar.css",
    "common/menu-bar/hamburger.css"
  ];
}

function get_menu_bar(string $title, string $language) {
  $li = wrap_in_li([
      get_a_tag("portfolio", $language),
      get_a_tag("biography", $language),
      get_a_tag("contact", $language)
    ]);
  return
    "<header class='menu-bar'><nav>" .
    get_a_tag("home", $language) .
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
