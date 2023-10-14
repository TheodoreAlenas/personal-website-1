<?php
// License at the bottom.

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

EOHTML . get_all_file_contents($css_files, "/* from ", " */\n") .
         <<<EOHTML

    </style>
    <script>

EOHTML . get_all_file_contents(["common/light-dark-theme/functions.js"],
                          "/* from ", " */\n") . <<<EOHTML

    </script>

  </head>
  <body class="default-ln-h default-font-family default-font-size m0">
    <div
      id="theme-wrapper"
      class="theme-wrapper"
      style="padding-bottom: 12rem"
    >
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

$PART_OF_LICENSE = <<<EOPART_OF_LICENSE
Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
EOPART_OF_LICENSE;

function get_all_file_contents(array $file_names,
                               string $comment_start,
                               string $comment_end) {
  $to_return = "";

  foreach (array_unique($file_names) as $file_name) {
    $file = fopen($file_name, "r");
    if ($file == false) {
      continue;
    }
    $read = fread($file, 1048576);
    fclose($file);
    $to_return .= $comment_start . $file_name . $comment_end .
               str_replace(<<<EOPART_OF_LICENSE
Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
EOPART_OF_LICENSE,
                           "[$file_name goes on]",
                           $read);
  }

  return $to_return;
}

/*
Copyright (c) 2023 Dimakopoulos Theodoros

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
?>
