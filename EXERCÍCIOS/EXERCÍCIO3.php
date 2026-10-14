<?php

class contaBancária{
    public string $titular;
    public float $saldo;

    //Método contrutor
    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($deposito){
        $this->saldo += $deposito;
        echo "Depósito de: R$" . $deposito;
    }

    public function saque($saque){
        $this->saldo -= $saque;
        echo "Saque de: R$" . $saque;
    }

    public function exibirValor(){
        echo "| Valor final: R$" . $this->saldo;
        echo"<br>";
    }
}

$conta = new contaBancária("Rafael", 1000);

$conta->depositar(100);
$conta->exibirValor();
$conta->saque(500);
$conta->exibirValor();

?>