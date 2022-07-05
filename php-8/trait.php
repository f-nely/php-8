<?php

trait MinhasHabilidas
{
    public function falar(string $mensagem): string
    {
        return "Eu digo: {$mensagem}";
    }
}

class Humano1
{
    use MinhasHabilidas;
}

$humano = new Humano1();
echo $humano->falar('Olá Mundo!');