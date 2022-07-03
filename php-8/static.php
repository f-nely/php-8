<?php

class Operacoes
{
    public static int $valo1;
    public static int $valo2;

    public static function adicionar(): int
    {
        return self::$valo1 + self::$valo2;
    }
}

Operacoes::$valo1 = 10;
Operacoes::$valo2 = 20;
echo Operacoes::adicionar();