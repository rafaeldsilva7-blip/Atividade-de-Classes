<?php

// Inicializando a classe
class funcionario{
    private string $nome;
    private float $salario;

    // Criando método Contrutor
    public function __construct($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    // Função para exibir os parâmetros
    public function exibirFuncionario(){
        echo" | Nome do Funcionário: " . $this->nome;
        echo" | Salário: " . $this->salario;
    }

    public function salarioNovo($valor){
            $this->salario += $this->salario * $valor;
            echo " | Novo Salario: R$" . $this->salario;
    }
}

$conta1 = new funcionario("Geraldo", 1621);
$conta1->exibirFuncionario();
$conta1->salarioNovo(0.10);

?>