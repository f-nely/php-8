<?php

class Pessoa
{
    public function __construct(
        public string $email,
        public string $nome,
        public string $cpf,
    ) { }
}

$pessoa = new Pessoa('taylor@email.com', 'Taylor Otwell', '000.000.000-00');

var_dump($pessoa);