<?php

$countries = require_once 'countries.php';

echo 'Country';
echo '<pre>';
print_r($countries);

echo 'Country';
echo '<hr>';
foreach ($countries as $country) {
    echo $country . '<br>';
}