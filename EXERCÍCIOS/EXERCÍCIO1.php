<?php

class Livro{
    public string $titulo;
    public string $autor;
    public float $paginas;
    public string $ano_de_public;

    //Método construtor
    public function __construct($titulo, $autor, $paginas, $ano_de_public){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->ano_de_publicacao = $ano_de_public;
    }

    public function exibirDetalhes(){
        echo "Título: " . $this->titulo . ",";
        echo " Autor: " . $this->autor . ",";
        echo " Páginas: " . $this->paginas . ",";
        echo " Ano de Publicação: " . $this->ano_de_publicacao . ".";
    }
}


$livro1 = new Livro("O alto da vida", "Gerônimo Dias", 230, "23/01/1992" );
$livro1->exibirDetalhes();

?>