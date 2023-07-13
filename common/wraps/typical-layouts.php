<?php

include_once("common/wraps/ends-of-main-html.php");
include_once("common/wraps/links.php");
include_once("common/wraps/gather-css.php");
include_once("common/menu-bar/mod.php");

function get_typical_layout(
  string $language,
  string $page_id,
  array $extra_css,
  string $pre_main,
  string $content,
) {

  [$menu_bar, $css_to_include] = get_menu_bar_and_typical_css(
    $page_id, $language, $extra_css);
  $title = get_typical_title($page_id, $language);

  return get_typical_layout_custom(
    $title, $menu_bar, $pre_main, $content, $css_to_include
  );

}

function get_typical_layout_custom(
  string $title,
  string $menu_bar,
  string $pre_main,
  string $content,
  array $css_to_include
) {
  return
    get_top_of_file($title, $css_to_include) .
    get_typical_menu_wrapping($menu_bar) .
    $pre_main .
    get_typical_main_wrapping($content) .
    get_bottom_of_file();
}

function get_typical_title(string $page_id, string $language) {

  $theo = localize_theodore($language);
  $home = get_link_name($page_id, $language);

  return "$theo - $home";
}

function localize_theodore(string $language) {
  if ($language == "gr") {
    return "Θοδωρής";
  }
  return "Theodore";
}

function get_menu_bar_and_typical_css($page_id, $language, $extra_css) {

  [$menu_bar, $menu_bar_css] = get_menu_bar_and_css(
    $page_id, $language);

  $css_to_include = array_merge(
    get_low_priority_common_css_files(),
    $menu_bar_css,
    $extra_css,
    get_high_priority_common_css_files(),
  );

  return [$menu_bar, $css_to_include];

}

function get_typical_menu_wrapping(string $menu_bar) {
  return <<<EOHTML

<header class='free-media-query sticky'>
$menu_bar
</header>

EOHTML;
}

function get_typical_main_wrapping(string $content) {
  return <<<EOHTML

<main class='free-media-query newspaper lrline p2'>
$content
</main>

EOHTML;
}

?>
