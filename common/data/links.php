<?php

function get_a_tag(String $which, String $language) {
  [$name, $url] = get_link_name_and_url($which, $language);
  return "<a href='$url'>$name</a>";
}

function get_im_here_link(String $which, String $language) {
  $name = get_link_name_and_url($which, $language)[0];
  return "<span class='im-here'>$name</span>";
}

function get_maybe_im_here_link(
  string $which, string $where_am_i, string $language) {

  if ($which == $where_am_i) {
    return get_im_here_link($which, $language);
  }
  return get_a_tag($which, $language);
}

function get_link_url(String $which) {
  return get_link_name_and_url($which, "en")[1];
}

function get_link_name_and_url(String $which, String $language) {

  $all = [
    ["home", "Home", "Αρχική", "../en/index.html"],
    ["portfolio", "Portfolio", "Χαρτοφυλάκιο", "../en/portfolio.html"],
    ["biography", "Biography", "Βιογραφικό", "../en/biography.html"],
    ["contact", "Contact", "Επικοινωνία", "../en/contact.html"]
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
