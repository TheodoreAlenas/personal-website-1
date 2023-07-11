<?php

function get_css_files() {
  return array_merge(
    get_css_snippet_files(),
    get_css_theme_files(),
  );
}

function get_css_snippet_files() {
  return [
    "common/css/fade.css",
    "common/css/margin-padding.css",
    "common/css/display-position.css",
    "common/css/interactivity.css",
  ];
}

function get_css_theme_files() {
  return [
    "common/css/theme-from-outside.css",
    "common/css/theme-panels.css",
    "common/css/theme-links.css",
  ];
}

?>
