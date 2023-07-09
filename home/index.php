<?php

include_once("common/ends-of-main-html.php");
include_once("home/banner/mod.php");
include_once("common/menu-bar/mod.php");

$basic_css = ["common/html-body.css", "common/centering.css"];

[$menu_bar, $menu_bar_css] = get_menu_bar_and_css("", "gr");
[$banner, $banner_css] = get_banner_and_css("gr");

$css_to_include = array_merge($basic_css, $menu_bar_css, $banner_css);

echo get_top_of_file("Theodore - Home", $css_to_include);
echo $menu_bar;
echo "<div class='newspaper'>";
echo $banner;
echo "</div>";
echo get_bottom_of_file();

?>
