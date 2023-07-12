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
    get_story_card_maturity(get_story_maturity_en()) .
    "<h2>" . get_story_learning_title_en() . "</h2>" .
    "<img src='../images/prompt-display.png'>" .
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
    "<pre>" . get_file_contents(__DIR__ . "/c-tdd-long-thin.html") . "</pre>" .
    get_story_maturity_gr() .
    "<h2>" . get_story_learning_title_gr() . "</h2>" .
    get_story_learning_gr() .
    "<h2>" . get_story_people_title_gr() . "</h2>" .
    get_story_people_1_gr() .
    get_story_people_2_gr();
}

function get_story_card_maturity(string $story_itself) {
  $html_styled_tmux = get_file_contents(__DIR__ . "/c-tdd-long-thin.html");
  return <<<EOHTML
<div class='grid-cols-aa gap-2'>
  <pre
    class='brown round pad-no-ln-h'
    style='height: max-content'
  >$html_styled_tmux</pre>
  <div>
    $story_itself
  </div>
</div>
EOHTML;
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
?>
