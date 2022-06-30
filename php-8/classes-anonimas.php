<?php

$user = new class 
{
    private string $name;
    
    public function setName(string $name): void
    {
        $this->name = $name;
    }
};

$user->setName('Ìcaro');
var_dump($user);