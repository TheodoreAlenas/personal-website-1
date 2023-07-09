<?php

include_once(__DIR__ . "/wrappings.php");

include(__DIR__ . "/default.css");
prepend_class_to(".phone-screen ", __DIR__ . "/phone.css");
phone_media_wrap(__DIR__ . "/phone.css");

?>
