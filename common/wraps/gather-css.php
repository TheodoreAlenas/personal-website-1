<?php

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

?>
