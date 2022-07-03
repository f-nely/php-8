<?php

class Circulo
{
    public const PI = 3.14;
}

echo Circulo::PI;
echo '<br>';

$c = new Circulo();
echo $c::PI;
echo '<br>';

define('APP_NAME', 'Minha Aplicação');
echo APP_NAME;