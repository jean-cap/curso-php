<?php
/*
 * Métodos mágicos
 */
class Endereco
{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($logradouro, $numero, $cidade)
    {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->cidade = $cidade;
    }

    public function __toString()
    {
        return "$this->logradouro, $this->numero, $this->cidade";
    }

    public function __destruct()
    {
        var_dump('OBJETO DESTRUÍDO!');
    }
}

$meuEndereco = new Endereco('Rua XV de novembro', '123', 'Joinville');

echo $meuEndereco;

var_dump($meuEndereco);
