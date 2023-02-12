<?php

class Calculadora {
    public $num1;
    public $num2;

    public function __construct($num1, $num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function suma ()
    {
        return $this->num1 + $this->num2;
    }

    public function resta ()
    {
        return $this->num1 - $this->num2;
    }

    public function multi ()
    {
        return $this->num1 * $this->num2;
    }

    public function division ()
        {
            if($this->num2 == 0){
        
            return "El divisor no puede ser 0";
        }else{
            return $this->num1 / $this->num2;
        }
        
    }

    public function exponente ()
    {
        return $this->num1 ** $this->num2;
    }

    public function modulo ()
    {
        if($this->num2 == 0){
            return "El divisor no puede ser 0";
        }else{
            return $this->num1 % $this->num2;
        }
    }
}
$operacion1 = new Calculadora (6,2);
print_r("Operacion 1");
echo "<br>";
print_r($operacion1->suma());
echo "<br>";
print_r($operacion1->resta());
echo "<br>";
print_r($operacion1->multi());
echo "<br>";
print_r($operacion1->division());
echo "<br>";
print_r($operacion1->exponente());
echo "<br>";
print_r($operacion1->modulo());
echo "<br>";

$operacion2 = new Calculadora (10,0);
print_r("Operacion 2");
echo "<br>";
print_r($operacion2->suma());
echo "<br>";
print_r($operacion2->resta());
echo "<br>";
print_r($operacion2->multi());
echo "<br>";
print_r($operacion2->division());
echo "<br>";
print_r($operacion2->exponente());
echo "<br>";
print_r($operacion2->modulo());
echo "<br>";

$operacion3 = new Calculadora (-10,-5);
print_r("Operacion 3");
echo "<br>";
print_r($operacion3->suma());
echo "<br>";
print_r($operacion3->resta());
echo "<br>";
print_r($operacion3->multi());
echo "<br>";
print_r($operacion3->division());
echo "<br>";
print_r($operacion3->exponente());
echo "<br>";
print_r($operacion3->modulo());
echo "<br>";

$operacion4 = new Calculadora (10.5,5.5);
print_r("Operacion 4");
echo "<br>";
print_r($operacion4->suma());
echo "<br>";
print_r($operacion4->resta());
echo "<br>";
print_r($operacion4->multi());
echo "<br>";
print_r($operacion4->division());
echo "<br>";
print_r($operacion4->exponente());
echo "<br>";
print_r($operacion4->modulo());
echo "<br>";

?>