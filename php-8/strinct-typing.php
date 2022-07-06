<?php

declare(strict_types=1);

function falar(string $mensagem): string
{
    return $mensagem;
}

echo falar('Olá Mundo');
echo '<br>';
echo falar('2500');
echo '<br>';

// A partir do PHP 7.1 passou a ser possível usar um tipo de declaração nullable.
function speak(?string $message): ?string
{
    return $message;
}

echo speak('My message');
echo '<br>';
echo speak(null);
echo '<br>';


