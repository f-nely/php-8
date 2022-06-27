<?php

// if
$nome = 'joão';

if ($nome == 'joão') {
    echo 'Foi identificado o nome do autor do vídeo.<br>';
}

// if - else
$idade = 18;
if ($idade <= 18) {
    echo 'Adolescente.<br>';
} else {
    echo 'Adulto.<br>';
}

// if - elseif - else
$nota = 5;
if ($nota <= 2) {
    echo 'Nota fraca<br>';
} elseif ($nota <= 4) {
    echo 'Nota insuficiente<br>';
} elseif ($nota <= 6) {
    echo 'Nota positiva<br>';
} elseif ($nota <= 8) {
    echo 'Nota muito positiva<br>';
} else {
    echo 'Nota excelente<br>';
}

