<?php

$a = 'Esta é uma string';
$b = "Esta é outra string";

echo $a . '<br>';
echo $b . '<br>';

$completeName = 'João' . ' ' . 'Ribeiro';
echo $completeName . '<br>';

$lastName = 'João';
$lastName .= ' ' . 'Ribeiro';

echo $lastName . '<br>';

$html = '<ul>';
$html .= '<li>product 1</li>';
$html .= '<li>product 2</li>';
$html .= '<li>product 3</li>';
$html = '</ul>';

$he = 'Adam';
$text = "$he said, <br>PHP is awesome.";
echo $text;
echo '<br>';

// Using herodoc and nowdoc we can write same code in the cleanest way
// Herodoc
// Heredoc strings are like double-quoted strings without escaping
$html = <<<HTML
<ul>
    <li>product 1</li>
    <li>product 2</li>
    <li>product 3</li>
</ul>
HTML;

echo $html;
echo '<br>';

$he = 'Adam';

$text = <<<TEXT
$he said, <br>
PHP is awesome.
TEXT;

echo $text;
echo '<br>';

// Nowdoc
// Nowdoc strings are like single-quoted strings without escaping
$name = 'Adam';
$text = <<<'TEXT'
My name is $name
TEXT;

echo $text;
