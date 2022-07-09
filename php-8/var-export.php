<?php

$name = 'Tailor';
var_export($name);
echo '<br>';

$values = [11, 17, 22, 4];
var_export($values);
echo '<br>';

$numbers = [];
for ($i = 0; $i < 10; $i++) {
    $numbers[] = rand(0, 100);
}
var_export($numbers);