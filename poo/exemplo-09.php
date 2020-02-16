<?php
/*
 * Classe abstrata
 */

interface Veiculo
{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo
{
    public function acelerar($velocidade)
    {
        echo "O veículo acelerou até $velocidade km/h<br>";
    }
    public function frenar($velocidade)
    {
        echo "O veículo frenou até $velocidade km/h<br>";
    }
    public function trocarMarcha($marcha)
    {
        echo "O veículo trocou para a $marcha ª marcha<br>";
    }
}

class DelRey extends Automovel
{
    public function empurrar()
    {
    }
}

$carro = new DelRey();
$carro->trocarMarcha('1');
$carro->acelerar('20');
$carro->trocarMarcha('2');
$carro->acelerar('35');