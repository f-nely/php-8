<?php

$x = 20;
$y = 30;

$myFunction = fn($z) => "{$x} - {$y} - {$z}";

echo $myFunction(10);

echo '<hr>';

$valorDoEmprestimo = 3000;
$taxaDeJuros = 18.63;

$jurosCalculados = fn ($emprestimo) => $emprestimo * ($taxaDeJuros / 100);

echo $jurosCalculados($valorDoEmprestimo);
$jurosTotal = $jurosCalculados($valorDoEmprestimo);
$totalAPagar = $valorDoEmprestimo + $jurosTotal;
echo '<br>';
echo 'Total a apagar: ' . $totalAPagar;

echo '<hr>';