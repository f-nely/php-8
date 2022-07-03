<?php

// https://www.php.net/manual/pt_BR/language.constants.magic.php

echo __LINE__ . '<br>'; // indica o número da linha de código no script

echo __FILE__ . '<br>'; // identifica o caminho completo do script

echo __DIR__ . '<br>'; // identifica a pasta onde o script está alojado

function teste()
{
    $a = true;
    echo __FUNCTION__ . '<br>'; // indica o nome da função
}

teste();

class MinhaClasse
{
    public function identificar()
    {
        echo __CLASS__ . '<br>'; // indica o nome da classe
        echo __METHOD__ . '<br>'; // indica o nome do método
    }
}

$a = new MinhaClasse();
$a->identificar();

echo __NAMESPACE__ . '<br>';

echo MinhaClasse::class;