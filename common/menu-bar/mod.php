<?php

include_once("common/links.php");

function get_menu_bar_and_css(string $title, string $language) {
  return [get_menu_bar($title, $language), get_menu_bar_css()];
}

function get_menu_bar_css() {
  return ["common/menu-bar/menu-bar.css"];
}

function get_menu_bar(string $title, string $language) {
  $hamid = random_int(1, 1000);
  return
    "<header class='menu-bar'><nav>" .
    get_a_tag("home", $language) .
    "<span>$title</span>" .
    wrap_in_list("<ul class='desktop-nav-list'>", "</ul>", [
      get_a_tag("portfolio", $language),
      get_a_tag("biography", $language),
      get_a_tag("contact", $language)
    ]) .
    "<input id='hamburger-checkbox-$hamid' type='checkbox' class='hamburger-checkbox' />" .
    "<label for='hamburger-checkbox-$hamid' class='hamburger-label'></label>" .
    wrap_in_list("<ul class='hamburger-nav-list'>", "</ul>", [
      get_a_tag("portfolio", $language),
      get_a_tag("biography", $language),
      get_a_tag("contact", $language)
    ]) .
    "</nav></header>";
}

function wrap_in_list(string $opening_tag, string $closing_tag, array $components) {
  $e = $opening_tag;
  foreach ($components as $component) {
    $e .= "<li>$component</li>";
  }
  $e .= $closing_tag;
  return $e;
}

?>
