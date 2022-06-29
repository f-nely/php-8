<?php

class Humano
{
    private string $nome;
    private string $sobrenome;

    public function __construct(string $nome, string $sobrenome)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }

    public function nomeCompleto(): string
    {
        return $this->nome . ' ' . $this->sobrenome;
    }
}

$man = new Humano('João', 'Ribeiro');
$women = new Humano('Ana', 'Martins');

echo $man->nomeCompleto();
echo '<br>';
echo $women->nomeCompleto();