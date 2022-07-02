<?php

use Animal as GlobalAnimal;
use Mamifero as GlobalMamifero;

class Animal
{
    public function mover(): void
    {
        echo 'Mover a partir da classe base.';
    }
}

class Mamifero extends Animal
{

}

class Peixe extends Animal
{
    public function mover(): void
    {
        echo 'Mover a partir da classe peixe.';
    }
}

$animal = new Animal();
$animal->mover();
echo '<br>';

$mamifero = new Mamifero();
$mamifero->mover();
echo '<br>';

$peixe = new Peixe();
$peixe->mover();