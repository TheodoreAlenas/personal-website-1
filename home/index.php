<?php

include("home/banner/mod.php");
include("common/ends-of-main-html.php");

$included_css = [];

[$banner, $banner_css] = get_banner_and_css("gr");
$included_css += $banner_css;

echo get_top_of_file("Theodore - Home", $included_css);
echo $banner;
echo get_bottom_of_file();

?>
