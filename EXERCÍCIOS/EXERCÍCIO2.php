<?php

class notas{
    public string $nome;
    public float $nota1;
    public float $nota2;
    public float $media;

    //Método contrutor
    public function __construct($nota1, $nota2){
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->media = $this->calcularMedia();
    }

    public function calcularMedia(){
        return ($this->nota1 + $this->nota2) / 2;
    }
}

$media = new notas(10, 8.5);

echo"<pre>";
print_r($media);
echo"</pre>";

?>