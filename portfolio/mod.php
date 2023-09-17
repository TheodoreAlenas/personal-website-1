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

  $title_text = '';
  $card_text = '';
  $excuse = '';
  if ($language == "gr") {
    $title_text = get_portfolio_this_site_title_gr();
    $card_text = get_portfolio_card_text_gr();
    $excuse = "Λυπάμαι, το χαρτοφυλάκιο είναι " .
      "υπό κατασκευή (Σεπτέμβριος 2023)";
  }
  else {
    $title_text = get_portfolio_this_site_title_en();
    $card_text = get_portfolio_card_text_en();
    $excuse = "I apologise, the portfolio is " .
      "unfinished (September 2023)";
  }


  $title = <<<EOHTML

<h2><a href=https://github.com/TheodoreAlenas/personal-home-page>
$title_text</a></h2>

EOHTML;

  $card = get_portfolio_card(
  get_portfolio_snippet_this_site(),
  $card_text);

  return $title . $card . $excuse;
}

function get_portfolio_this_site_title_en() {
  return "This website";
}

function get_portfolio_this_site_title_gr() {
  return "Ο παρών ιστοχώρος";
}

function get_portfolio_card_text_en() {
  return <<<EOHTML
<p>
Parts of this site are testable, in a way.
You may try them out by visiting
<a href=../test/menu-bar.html>
the test pages</a>.
</p>
EOHTML;
}

function get_portfolio_card_text_gr() {
  return <<<EOHTML
<p>
Μέρη αυτού του ιστοχώρου μπορούν να
δοκιμαστούν αυτούσια.
Για να τα δοκιμάσετε, μπορείτε να επισκευθείτε
<a href=../test/menu-bar.html>
τις δοκιμαστικές σελίδες</a>.
</p>
EOHTML;
}


function get_portfolio_card(string $code, string $text) {
  return <<<EOHTML
<div class='grid grid-col-to-row gap-2'>
  <div class='phone-scroll-x phone-smol'>
  <pre
    class='blue round mtb-like-p pad-no-ln-h w-h-max-cont phone-m0a'
  >$code</pre>
  </div>
  <div>
    $text
  </div>
</div>
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

