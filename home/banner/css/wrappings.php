<?php

function phone_media_wrap(string $include_this) {
  echo "@media screen and (max-width: 800px) {";
  include($include_this);
  echo "}";
}

function prepend_class_to(string $prepend, string $css_file) {
  $file = fopen($css_file, "r");
  if ($file != false) {
    prepend_class_to_open_file($prepend, $file);
    fclose($file);
  }
}

function prepend_class_to_open_file(string $prepend, $file) {
  while (($line = fgets($file)) != false) {
    if ($line[0] == '.') {
      echo $prepend . $line;
    }
    else {
      echo $line;
    }
  }
}

?>
