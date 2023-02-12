<?php
// include './variables.php';
require_once './header.php';
require_once './variables.php';
require_once './footer.php';
    $presentacion = "Hola, mi nombre es ".$nombre." ".$apellidos."  y tengo ".$edad."  años.";
    echo $header;
    echo $presentacion;
    echo $footer;
?>