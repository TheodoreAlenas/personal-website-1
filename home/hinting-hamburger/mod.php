<?php

function get_hamburger_hint_and_css(string $extra_css_classes) {
  return [
    get_hamburger_hint($extra_css_classes),
    ["home/hinting-hamburger/m.css"]
  ];
}

function get_hamburger_hint(string $extra_css_classes) {
  return <<<EOHTML

<div class='$extra_css_classes
  hintham-round hintham-wide hintham-padded hintham-contrast'>
<div class='hintham-tall hintham-same-bg'>
<div class='hintham-short hintham-shadow'>
<div class='hintham-scale-text hintham-right hintham-glow'>
☰
</div>
</div>
</div>
</div>

EOHTML;
}

?>
