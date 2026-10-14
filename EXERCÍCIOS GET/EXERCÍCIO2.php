<?php

// Inicializando a classe
class produto{
    private string $nome;
    private float $preco;
    private int $quantidade;

    // Criando método Contrutor
    public function __construct($nome, $preco, $quantidade){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    // Função para exibir os parâmetros
    public function exibirProduto(){
        echo" | Nome do Produto: " . $this->nome;
        echo" | Preço do Produto: " . $this->preco;
        echo" | Quantidade do Produto: " . $this->quantidade;
    }

    public function venda($valor){
        $valorCompra = 0;
        $valorCompra = ($this->preco * $valor);
        echo " | Preço Total: R$" . $valorCompra . " <b>Compra concluída com SUCESSO!</b>";
    }

    public function alteraPreco($percentual){
        $valorAumentado = 0;
        $valorAumentado = ($this->preco * $percentual) + $this->preco;
        echo"<br><br>";
        echo"Valor do produto após seu aumento: R$" . $valorAumentado;
    }
}

$conta1 = new produto("Calça Jeans", 200, 5);
$conta1->exibirProduto();
$conta1->venda(3);
$conta1->alteraPreco(0.10);

?>