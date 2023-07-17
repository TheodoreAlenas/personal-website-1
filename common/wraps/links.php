<?php
// License at the bottom.

function get_a_tag(String $which, String $language) {
  [$name, $url] = get_link_name_and_url($which, $language);
  return "<a href='$url'>$name</a>";
}

function get_im_here_link(String $which, String $language) {
  $name = get_link_name_and_url($which, $language)[0];
  return "<span class='inverse-theme'>$name</span>";
}

function get_maybe_im_here_link(
  string $which, string $where_am_i, string $language) {

  if ($which == $where_am_i) {
    return get_im_here_link($which, $language);
  }
  return get_a_tag($which, $language);
}

function get_link_name(string $which, string $language) {
  return get_link_name_and_url($which, $language)[0];
}

function get_link_url(string $which, string $language) {
  return get_link_name_and_url($which, $language)[1];
}

function get_link_name_and_url(String $which, String $language) {

  $all = [
    ["home", "Home", "Αρχική", "index.html"],
    ["portfolio", "Portfolio", "Χαρτοφυλάκιο", "portfolio.html"],
    ["biography", "Biography", "Βιογραφικό", "biography.html"],
    ["contact", "Contact", "Επικοινωνία", "contact.html"]
  ];

  foreach ($all as $link) {
    if ($link[0] == $which) {
      if ($language == "gr") {
        return [$link[2], "../gr/" . $link[3]];
      }
      else {
        return [$link[1], "../en/" . $link[3]];
      }
    }
  }
  return ["(broken)", "which-$which-language-$language"];
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
