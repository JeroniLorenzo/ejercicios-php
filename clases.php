<?php

class Producto {

    const IVA_GENERAL=0.21;
    const IVA_REDUCIDO=0.10;
    const IVA_SUPER_REDUCIDO=0.04;
    
    private $name;
    private $price;
    private $sku;


    public function __construct($name, $price, $sku)
    {
        $this->name = $name;
        $this->price = $price;
        $this->sku = $sku;
        
    }

    public function getName ():string
    {
        return $this->name;
    }

    public function getPrice():float
    {
        return $this->price;
    }

    public function getSku (): string
    {
        return $this->sku;
    }

    public function setName(string $newName)
    {
        $this->name = $newName;
    }

    public function setPrice(string $newPrice)
    {
        $this->price = $newPrice;
    }

    public function setSku(string $newSku)
    {
        $this->sku = $newSku;
    }

    public function calculoConIvaGeneral()
    {
        return $this->price + $this->price * self::IVA_GENERAL;
    }

    public function calculoConIvaReducido()
    {
        return $this->price + $this->price * self::IVA_REDUCIDO;
    }

    public function calculoConIvaSuperReducido()
    {
        return $this->price + $this->price * self::IVA_SUPER_REDUCIDO;
    }

    public function description(){
        return "La consola ".$this->name."  cuesta ".$this->price."  y tiene como Sku $this->sku";
    }

    public function toArray():array
    {
        
        // $array []= $this->name.$this->price.$this->sku;
        $array = [
           "Nombre" => $this->name,
            "Precio" => $this->price,
            "Sku" => $this->sku
        ];
        return $array;
    }
}

$producto1 = new Producto("PS-5", 600, "bjicfri");
$producto2 = new Producto("PS-4", 400, "bjicfcfrvrri");
// $producto1 -> setName("X-Box");
// $producto1 -> setPrice("450€");
// $producto1 -> setSku("777888555");

// print_r($producto1 -> getName());
// echo "<br>";
// print_r($producto1 -> getPrice());
// echo "<br>";
// print_r($producto1 -> getSku());
// echo "<br>";
// var_dump ($producto1->description());
// echo "<br>";
// var_dump ($producto2->description());
// echo "<br>";
// var_dump ($producto1->toArray());
// echo "<br>";
var_dump ($producto1->calculoConIvaGeneral());
var_dump ($producto1->calculoConIvaReducido());
var_dump ($producto1->calculoConIvaSuperReducido());

?>