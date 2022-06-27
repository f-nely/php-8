<?php

for ($i = 1; $i < 10; $i++) {
    echo $i . '<br>';
}

echo '<hr>';

for ($contador = 1, $x = 10; $contador < 10; $contador++, $x--) {
    echo $x . '<br>';
}

echo '<hr>';

$nomes = ['joão', 'ana', 'carlos'];
for ($i = 0; $i < sizeof($nomes); $i++) {
    echo $nomes[$i] . '<br>';
}