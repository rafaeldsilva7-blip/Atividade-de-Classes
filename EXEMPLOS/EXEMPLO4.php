<?php

// Inicializando a classe
class contaBancaria{
    private string $titular;
    private float $saldo;

    // Criando método Contrutor
    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    // Função para exibir os parâmetros
    public function exibirTitular(){
        echo" | Nome: " . $this->titular;
        echo" | Saldo: " . $this->saldo;
    }

    public function saque($valor){
        if($valor > $this->saldo)
            echo"Não pode sacar este valor!";
        else{
            $this->saldo -= $valor;
            echo " | Novo saldo: R$" . $this->saldo;
        }
    }

    // Alteração de atributos (nome, saldo, idade, etc.)
    public function alteraTitular($novoNome, $novoSaldo){
        echo"<br><br>";
        $this->titular = $novoNome;
        $this->saldo = $novoSaldo;
    }
}

$conta1 = new contaBancaria("Rafael", 1000);
$conta1->exibirTitular();
$conta1->saque(200);
$conta1->alteraTitular('Luiz', 300);
$conta1->exibirTitular();
?>