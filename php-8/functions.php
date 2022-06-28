<?php

declare(strict_types=1);

function sum(int $num1, int $num2): int
{
    return $num1 + $num2;
}

echo sum(5, 4);

echo '<hr>';

adicionar(10, 20);

function adicionar(int $n1, int $n2): void
{
    echo "{$n1} + {$n2} = " . $n1 + $n2; // no PHP 7 emite um aviso
    echo '<br>';
    echo "{$n1} + {$n2} = " . ($n1 + $n2);
}

echo '<hr>';

$names = ['João', 'Ana', 'Carlos'];

function gretting(string $value)
{
    echo "Bom dia, {$value}.<br>";
}

foreach ($names as $name) {
    gretting($name);
}

