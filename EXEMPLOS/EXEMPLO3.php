<?php

class triangulo{
    public float $base;
    public float $altura;
    public float $area;

    //Método contrutor
    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
        $this->area = $this->calcularArea();
    }

    public function calcularArea(){
        return ($this->base * $this->altura) / 2;
    }
}

$triangulo1 = new triangulo(10, 20);

echo"<pre>";
print_r($triangulo1);
echo"</pre>";

?>