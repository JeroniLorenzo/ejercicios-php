<?php

class Persona {
    public $name;
    protected $apellido;
    protected $dni;
    protected $nacionalidad;

    public function __construct($name, $apellido, $dni, $nacionalidad)
    {
        $this->name = $name;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->nacionalidad = $nacionalidad;
        
    }
    public function getName (): string
    {
        return $this->name;
    }
    public function getApellido ():string
    {
        return $this->apellido;
    }
    public function getDni ():string
    {
        return $this->dni;
    }
    public function getNacionalidad ():string
    {
        return $this->nacionalidad;
    }
    public function setName(string $newName)
    {
        $this->name = $newName;
    }
    public function setApellido(string $newApellido)
    {
        $this->apellido = $newApellido;
    }
    public function setDni(string $newDni)
    {
        $this->dni = $newDni;
    }
    public function setNacionalidad(string $newNacionalidad)
    {
        $this->nacionalidad = $newNacionalidad;
    }
    public function toArray():array
    {
        $array = [
           "Nombre" => $this->name,
            "Apellido" => $this->apellido,
            "Dni" => $this->dni,
            "Nacionalidad" => $this->nacionalidad
        ];
        return $array;
    }
}

class Trabajador extends Persona{
    protected $cargo;
    protected $sueldo;

    public function __construct($name, $apellido, $dni, $nacionalidad, $cargo, $sueldo)
    {
        parent::__construct($name, $apellido, $dni, $nacionalidad);
        $this->cargo = $cargo;
        $this->sueldo = $sueldo;
        
    }
    public function getCargo ():string
    {
        return $this->cargo;
    }
    public function getSueldo ():string
    {
        return $this->sueldo;
    }
    public function setCargo(string $newCargo)
    {
        $this->cargo = $newCargo;
    }
    public function setSueldo(string $newSueldo)
    {
        $this->sueldo = $newSueldo;
    }
    public function cargoAcrossFather ()
    {
        return $this->getCargo();
    }
    public function sueldoAcrossFather ()
    {
        return $this->getSueldo();
    }
    public function toArray():array
    {
        $array = [
            "Cargo" => $this->cargo,
            "Sueldo" => $this->sueldo,
        ];
        return $array;
    }
    
}
$trabajador1 = new Trabajador("Jeroni", "Lorenzo", "11222333-O", "Española", "Desarrollador", "18.000€");
print_r($trabajador1->getName());
echo "<br>";
print_r($trabajador1 -> getApellido());
echo "<br>";
print_r($trabajador1 -> getDni());
echo "<br>";
print_r($trabajador1 -> getNacionalidad());
echo "<br>";
print_r($trabajador1 -> cargoAcrossFather());
echo "<br>";
print_r($trabajador1 -> getSueldo());
echo "<br>";


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
