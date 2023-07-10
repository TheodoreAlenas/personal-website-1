<?php

include_once(__DIR__ . "/opening.php");
include_once(__DIR__ . "/opening-more.php");
include_once(__DIR__ . "/value-maturity.php");
include_once(__DIR__ . "/value-learning.php");
include_once(__DIR__ . "/value-people.php");

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
    get_story_opening_en() .
    get_story_opening_more_en() .
    "<h2>" . get_story_maturity_title_en() . "</h2>" .
    get_story_maturity_en() .
    "<h2>" . get_story_learning_title_en() . "</h2>" .
    get_story_learning_en() .
    "<h2>" . get_story_people_title_en() . "</h2>" .
    get_story_people_1_en() .
    get_story_people_2_en();
}

function get_story_gr() {
  return
    get_story_opening_gr() .
    get_story_opening_more_gr() .
    "<h2>" . get_story_maturity_title_gr() . "</h2>" .
    get_story_maturity_gr() .
    "<h2>" . get_story_learning_title_gr() . "</h2>" .
    get_story_learning_gr() .
    "<h2>" . get_story_people_title_gr() . "</h2>" .
    get_story_people_1_gr() .
    get_story_people_2_gr();
}

?>
