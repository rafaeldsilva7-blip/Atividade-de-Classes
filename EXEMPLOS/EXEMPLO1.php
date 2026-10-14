<?php

class Pessoa{
    public string $nome;
    public int $idade;

    //Método contrutor deixa algums campos obrigatórios para ser preenchidos
    public function __construct($valor1, $valor2){
        $this->nome = $valor1;
        $this->idade = $valor2;
    }

    public function exibir_dadosPessoa(){
        echo"Nome: " . $this->nome . " | Idade: " . $this->idade;
    }

}

$pessoa = new Pessoa("Rafael", 16);

$pessoa->exibir_dadosPessoa();

// $pessoa->nome = "Recebe nome";
// $pessoa->idade = 16;
?>