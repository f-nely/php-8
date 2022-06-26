<?php

$frase = 'Esta frase tem 29 caracteres.';

echo $frase[0];
echo '<br>';
echo $frase[5];
echo '<br>';

// retorna o número de caracteres da string
echo strlen($frase);
echo '<br>';

// retorna as letras a partir da posição 0 e durante 4 caracteres
$primeiraPalavra = substr($frase, 0, 4);
echo $primeiraPalavra;
echo '<br>';

// converte toda a string em letras maiúsculas
$todasMaiuscula = strtoupper($frase);
echo $todasMaiuscula;
echo '<br>';

// converte em letras minúsculas
$todasMinusculas = strtolower($frase);
echo $todasMinusculas;
echo '<br>';

// substituir uma letra por outra
$novaFrase = str_replace('a', 'x', $frase);
echo $novaFrase;
echo '<br>';

// verifica qual é a posição de um caracter dentro da string
$posicao = strpos($frase, 'a');
echo $posicao;
echo '<br>';

// no PHP 8 foram introduzidas mais algumas funções para usar com strings
$nome = 'Ana Maria Silva Cardoso';
$contemPalavra = str_contains($nome, 'Silva');
echo $contemPalavra;
echo '<br>';

// str_start_with()
$startWith = str_starts_with($nome, 'Ana');
echo $startWith;
echo '<br>';

$startWith2 = str_starts_with($nome, 'ana');
var_dump($startWith2);

// str_ends_with()
$endsWith = str_ends_with($nome, 'oso');
var_dump($endsWith);

$endsWith2 = str_ends_with($nome, 'Oso');
var_dump($endsWith2);

// echo '================================<br>';
// for ($i = 0; $i < strlen($frase); $i++) {
//     echo $frase[$i] . '<br>';
// }