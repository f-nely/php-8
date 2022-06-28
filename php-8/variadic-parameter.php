<?php

// Não é muito comum, mas sendo possível, podemos usar um 
// argumento especial designado por variadic parameter.

function myFunction(...$argumentos)
{
    foreach ($argumentos as $v) {
        echo "{$v}<br>";
    }
}

myFunction(10, 20, 30, 40, 50);