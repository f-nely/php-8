<?php

// O PHP 8 introduz uma novidade: named arguments.
function add(int $n1, $n2 = 10, $n3 = 30): int
{
    return $n1 + $n2 + $n3;
}

echo add(100, 10, 300);

echo '<hr>';

echo add(n3: 1000, n1: 1);

echo '<hr>';

echo add(500, n3: 1000);