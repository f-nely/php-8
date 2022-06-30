<?php

class Animal
{
    public string $especie;
    public float $peso;

    public function tipoEspecie(): string
    {
        return "Este animal é da espécie {$this->especie}";
    }
}

class Mamifero extends Animal
{
    public int $quantidadePernas;
    public bool $temPelo;

    public function temQuantasPernas(): string
    {
        return "O animal da espécie {$this->especie} tem {$this->quantidadePernas}";
    }
}

$mamifero = new Mamifero();
$mamifero->especie = 'Cavalo';
$mamifero->quantidadePernas = 4;

echo $mamifero->temQuantasPernas();