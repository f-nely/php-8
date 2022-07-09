<?php

// The Null coalescing operator returns its first operand if it exists and is not NULL; otherwise it returns its second operand.
$username = $_GET['username'] ?? 'not passed';
echo "{$username}<br>";

$apelido = null;
$apelido ??= 'Apelido desconhecido.';
echo "{$apelido}";