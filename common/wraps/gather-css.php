<?php

function get_common_css_files() {
  return array_merge(
    get_css_snippet_files(),
    get_css_theme_files(),
  );
}

function get_css_snippet_files() {
  return [
    "common/css-snippets/popup.css",
    "common/css-snippets/fade.css",
    "common/css-snippets/margin-padding.css",
    "common/css-snippets/width-border.css",
    "common/css-snippets/display-position.css",
  ];
}

function get_css_theme_files() {
  return [
    "common/light-dark-theme/from-outside.css",
    "common/light-dark-theme/panels.css",
    "common/light-dark-theme/links.css",
  ];
}

?>
