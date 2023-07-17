<?php
// License at the bottom.

include_once("common/wraps/typical-layouts.php");

function get_portfolio_html(string $language) {

  return get_typical_layout(
    $language,
    "portfolio",
    [],
    "pre",
    get_file_contents("portfolio/contents.html")
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

function wrap_portfolio_links(array $datas) {
  $e = '';
  foreach ($datas as $data) {
    $e .= <<<EOHTML

<li>
  <a class='dont-be-like-link' href=$data[1]>
    <span class='be-like-link be-like-h2'>
      $data[0]
    </span>
    <ul class='dont-be-like-list flex-row-spar'>
      <li><pre role=img aria-label="Code snippet.">
        code snip snip
      </pre><span>forks</span></li>
      <li><pre>code snip snip</pre><span>Roman numerals</span></li>
      <li><pre>code snip snip</pre><span>tetris</span></li>
    </ul>
  </a>
</li>

EOHTML;
  }
}

function wrap_portfolio_link_elements(array $datas) {
  $e = '';
  foreach ($datas as $data) {
    $e .= <<<EOHTML

<li>
  <a class='dont-be-like-link' href=$data[1]>
    <span class='be-like-link be-like-h2'>
      $data[0]
    </span>
    <ul class='dont-be-like-list flex-row-spar'>
      <li><pre role=img aria-label="Code snippet.">
        code snip snip
      </pre><span>forks</span></li>
      <li><pre>code snip snip</pre><span>Roman numerals</span></li>
      <li><pre>code snip snip</pre><span>tetris</span></li>
    </ul>
  </a>
</li>

EOHTML;
  }
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

