<?php

include_once(__DIR__ . "/opening.php");

function get_story_and_css(string $language) {
  return [
    get_story($language),
    []
  ];
}

function get_story(string $language) {
  if ($language == "gr") {
    return get_story_gr();
  }
  return get_story_en();
}

function get_story_en() {
  return
    get_story_opening_en().
    get_story_opening_en().
    get_story_opening_en().
    get_story_opening_en().
    get_story_opening_en().
    get_story_opening_en();
}

function get_story_gr() {
  return
    get_story_opening_gr().
    get_story_opening_gr().
    get_story_opening_gr().
    get_story_opening_gr().
    get_story_opening_gr().
    get_story_opening_gr();
}

?>
