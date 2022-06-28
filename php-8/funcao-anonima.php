<?php

$isEven = function (int $number): bool {
    return $number % 2 == 0;
};

echo $isEven(8);
var_dump($isEven);

echo '<hr>';

$speak = function ($message): void {
    echo "<p>I say: {$message}</p>";
};

$speak('I\' here!');