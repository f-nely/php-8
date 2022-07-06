<?php

declare(strict_types=1);

// Com o PHP 8 aparece a possibilidade de definirmos mais do que um tipo para o mesmo argumento. Os tipos podem ser separados por barras verticais.

function conversar(int|string $mensagem): int|string
{
    return $mensagem;
}

echo conversar('Olá');
echo '<br>';
echo conversar(2500);