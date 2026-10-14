<?php

// Inicializando a classe
class carro{
    private string $modelo;
    private float $consumo;
    private int $tanque;

    // Criando método Contrutor
    public function __construct($modelo, $consumo, $tanque){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanque;
    }

    // Função para exibir os parâmetros
    public function exibirInformacoes(){
        echo" | Nome do Carro: " . $this->modelo;
        echo" | Consumo: " . $this->consumo . "km/L";
        echo" | Quantidade de litros no tanque: " . $this->tanque;
    }

    public function abastecer($valor){
        $this->tanque += $valor;
        echo " <br><b>Tanque abastecido com SUCESSO! Quantidade em L: </b>" . $this->tanque;
    }

    public function dirigir($distancia){
        if ($distancia > $this->tanque){
            echo"Distância muito Longa, Pare para abastecer";
        }
        else{
        $this->tanque -= $distancia;
        echo"<br>";
        echo"Voce pode dirigir à vontade! Tanque após sua viagem de " . $distancia . "km: " . $this->tanque;
        }
    }
}

$conta1 = new carro("Honda Civic", 10, 100);
$conta1->exibirInformacoes();
$conta1->abastecer(20);
$conta1->dirigir(70);

?>