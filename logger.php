<?php

class Logger {
    private $fileName;

    public function __construct($fileName)
    {   
        
        $this->fileName = fopen($fileName, "a"); 
         
    }

     public function escribirLog ($mensaje)
     {
        $hora =  date ("d/m/Y - H:i:s");
        fputs($this->fileName, "[".$hora."]". $mensaje."\n");
     }
}

$logger = new Logger("madrid.txt");
$logger->escribirLog("Esto es el mensaje");
$logger->escribirLog("Esto es el mensaje de error");
$logger->escribirLog("Esto es el mensaje de info");

?>