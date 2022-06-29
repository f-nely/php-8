<?php

class HumanBeing
{
    public $firstName = 'João';
    public $lastName = 'Ribeiro';

    public function fullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}