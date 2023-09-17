<?php
// License at the bottom.

include_once(__DIR__ . "/opening.php");
include_once(__DIR__ . "/value-maturity.php");
include_once(__DIR__ . "/machine-communicator.php");
include_once(__DIR__ . "/people-solution.php");

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
    "<h2>" . get_story_maturity_title_en() . "</h2>" .
    get_story_card_maturity(get_story_maturity_en()) .
    "<h2>" . get_story_machine_communicator_title_en() . "</h2>" .
    get_story_card_machine_communicator(
      get_story_machine_communicator_1_en(),
      get_story_machine_communicator_2_en()) .
    "<h2>" . get_story_people_solution_title_en() . "</h2>" .
    get_story_people_solution_1_en() .
    get_story_people_solution_2_en();
}

function get_story_gr() {
  return
    get_story_opening_gr() .
    "<h2>" . get_story_maturity_title_gr() . "</h2>" .
    get_story_card_maturity(get_story_maturity_gr()) .
    "<h2>" . get_story_machine_communicator_title_gr() . "</h2>" .
    get_story_card_machine_communicator(
      get_story_machine_communicator_1_gr(),
      get_story_machine_communicator_2_gr()) .
    "<h2>" . get_story_people_solution_title_gr() . "</h2>" .
    get_story_people_solution_1_gr() .
    get_story_people_solution_2_gr();
}

function get_story_card_maturity(string $story_itself) {
  $html_styled_tmux = get_file_contents(__DIR__ . "/c-tdd-long-thin.html");
  return <<<EOHTML
<div class='grid grid-col-to-row gap-2'>
  <div class='phone-scroll-x phone-smol'>
  <pre
    class='
      blue round mtb-like-p pad-no-ln-h w-h-max-cont
      phone-m0a desktop-smol
  '>$html_styled_tmux</pre>
  </div>
  <div>
    $story_itself
  </div>
</div>
EOHTML;
}

function get_story_card_machine_communicator(
  string $story_left, string $story_right) {

  return <<<EOHTML
<div class='grid grid-col-to-row gap-2'>
  <div>
    $story_left
  </div>
  <div class='phone-scroll-x'>
    <img
      class='round mtb-like-p phone-m0a block'
      src='../images/prompt-display.png'
      alt="a dash friendly prompt and symlink display"
      style="background-image: url(
        '../images/prompt-display-32-times-shorter.png'
        );
        background-size: cover;
        "
    >
  </div>
  <div>
    $story_right
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
