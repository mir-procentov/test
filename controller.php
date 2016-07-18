<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/class/controller/front_controller.class");
include_once($_SERVER['DOCUMENT_ROOT'] . "/class/page/page.class");

Controller::init();
Controller::getPage();

//echo "<hr>front_controller OK<br>";
print_r($_SERVER);
print_r('<br>');
print_r($_SERVER);
print_r('<hr>');


