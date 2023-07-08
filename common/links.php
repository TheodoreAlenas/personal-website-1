<?php

function get_a_tag(String $which, String $language) {
  [$name, $url] = get_link_name_and_url($which, $language);
  return "<a href='$url'>$name</a>";
}

function get_link_url(String $which, String $language) {
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
        return [$link[2], $link[3]];
      }
      else {
        return [$link[1], $link[3]];
      }
    }
  }
  return ["(broken)", "which-$which-language-$language"];
}

?>
