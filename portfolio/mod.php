<?php
// License at the bottom.

include_once("common/wraps/typical-layouts.php");
include_once("portfolio/this-site-ls.php");

function get_portfolio_html(string $language) {

  return get_typical_layout(
    $language,
    "portfolio",
    [],
    "",
    get_portfolio_contents($language)
  );
}

function get_portfolio_contents(string $language) {
  if ($language == "gr")
    return get_portfolio_contents_gr();
  return get_portfolio_contents_en();
}

function get_portfolio_contents_en() {
  $snippet_this_site = get_portfolio_snippet_this_site();
  return <<<EOHTML

<h2><a href=www.github.com/TheodoreAlenas/personal-web-page>
This website</a></h2>

<pre class="blue w-h-max-cont">
$snippet_this_site
</pre>

EOHTML;
}

function get_portfolio_contents_gr() {
  $snippet_this_site = get_portfolio_snippet_this_site();
  return <<<EOHTML

<h2><a href=www.github.com/TheodoreAlenas/personal-web-page>
This website</a></h2>

<pre class="blue w-h-max-cont">
$snippet_this_site
</pre>

EOHTML;
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

