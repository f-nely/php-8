<?php

$firstName = 'Taylor';
$lastName = 'Otwell';

$lengthName = strlen($firstName) + strlen($lastName);

echo "<p>{$firstName} {$lastName}</p>";
echo "<p>O meu nome tem {$lengthName} caracteres.</p>";

echo mb_strlen('João Ribeiro');