<?php

include_once("common/wraps/typical-layouts.php");

function get_portfolio_tdd_html(string $language) {

  return get_typical_layout(
    $language,
    "portfolio-tdd",
    [],
    "pre",
    get_file_contents("portfolio/tdd/contents.html")
  );
}

function get_file_contents(string $file_name) {
  $to_return = "";

  $file = fopen($file_name, "r");
  if ($file == false) {
    return "(file $file_name missing, bug)";
  }
  $to_return .= fread($file, 1048576);
  fclose($file);

  return $to_return;
}


?>


