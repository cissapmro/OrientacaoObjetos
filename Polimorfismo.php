<?php
interface forma {
    public function getTipo();
    public function getArea();
}
class Quadrado {
    private $largura;
    private $altura;
    public function __construct($l, $a){
        $this->largura = $l;
        $this->altura = $a;
    }
    public function getTipo() {
        return "Quadrado";
    }
    public function getArea(){
        return $this->largura * $this->altura;
    }
}
class Circulo {

    private $raio;

    public function __construct($a){
        $this->raio = $a;
    }
    public function getTipo() {
        return "Círculo";
    }
    public function getArea(){
        return pi() * ($this->raio* $this->raio);
    }
}
$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(7);

$objetos = [
  $quadrado,
  $circulo
];

foreach($objetos as $objeto){
    $tipo = $objeto->getTipo();
    $area = $objeto->getArea();

    echo "Área:" .$tipo. ':'.$area.'<br />';
}