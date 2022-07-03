<?php

abstract class Forma
{
    public int $largura = 100;
    public int $altura = 200;

    abstract public function area(): int;

    public function recuperaAltura(): int
    {
        return $this->altura;
    }
}

class Retangulo extends Forma
{
    public function area(): int
    {
        return $this->largura * $this->altura;
    }
}

$retangulo = new Retangulo();
echo $retangulo->area();