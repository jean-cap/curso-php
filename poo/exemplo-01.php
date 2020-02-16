<?php
/*
 * Criando uma classe
 */
class Pessoa
{
    public $nome;

    public function falar()
    {
        return "O meu nome é $this->nome.";
    }
}

$jean = new Pessoa();
$jean->nome = 'Jean';

echo $jean->falar();
