<?php

echo isset($value) ? $value : 'A variável não existe<br>';

$value2 = null;
echo isset($value2) ? 'sim' : 'não';

echo '<br>';

$name = 'João';
empty($name); // false
is_null($name1); // erro