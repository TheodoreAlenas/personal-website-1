<?php

function get_top_of_file(String $title, array $css_files) {
  return <<<EOHTML
<!DOCTYPE HTML>

<html lang="en">
  <head>

    <title>$title</title>

    <meta name="author" content="Dimakopoulos Theodoros">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <style>
EOHTML . get_all_file_contents($css_files) . <<<EOHTML
    </style>

  </head>
  <body>

EOHTML;
}

function get_bottom_of_file() {
  return <<<EOHTML

  </body>
</html>

EOHTML;
}

function get_all_file_contents(array $file_names) {
  $to_return = "";

  foreach (array_unique($file_names) as $file_name) {
    $file = fopen($file_name, "r");
    if ($file == false) {
      continue;
    }
    $to_return .= fread($file, 1048576);
    fclose($file);
  }

  return $to_return;
}

?>