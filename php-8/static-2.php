<?php

use Operacoes as GlobalOperacoes;

class Operacoes
{
    public static function numeroAleatorio(int $min, int $max): int
    {
        return rand($min, $max);
    }

    public static function criarUmNome()
    {
        $nome = ['joão', 'ana', 'carlos', 'francisco', 'rui', 'nuno'];
        $sobrenome = ['silva', 'almeida', 'santos', 'rodrigues', 'oliveira'];
        return $nome[rand(0, count($nome) - 1)] . ' ' . $sobrenome[rand(0, count($sobrenome) - 1)];
    }
}

echo Operacoes::numeroAleatorio(0, 1000);
echo '<br>';
echo Operacoes::criarUmNome();