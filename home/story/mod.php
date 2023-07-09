<?php

function get_story_and_css(string $language) {
  return [
    get_story($language),
    []
  ];
}

function get_story(string $language) {
  if ($language == "gr") {
    return "no Greek sowwy";
  }
  return get_story_en();
}

function get_story_en() {
  return <<<EOHTML
english story
EOHTML;
}

?>
