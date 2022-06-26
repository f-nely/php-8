<?php

$a = 100;
$b = 200;

var_dump(($a < $b) && ($a < 1000));
var_dump(($a > $b) || ($a > 1000));
var_dump(($a < 150) && ($b > 300));
var_dump(($a > 10) || ($b > 500));

$c = false;

var_dump(!$c);