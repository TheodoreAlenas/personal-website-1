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
    <script>

EOHTML . get_all_file_contents(["common/light-dark-theme/functions.js"]) . <<<EOHTML

    </script>

  </head>
  <body>
    <input
      id="dark-theme-switch"
      type="checkbox"
      class="dark-theme-switch disp-none"
    />

    <div id="theme-wrapper" class="theme-wrapper">
      <script> applyStoredTheme(); </script>

EOHTML;
}

function get_bottom_of_file() {
  return <<<EOHTML

      <script> setUpThemeSwitches(); </script>
    </div>
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
