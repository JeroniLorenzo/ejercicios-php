<?php
   function saludo($name, $apellido){
       return "Mi nombre es ".$name." ".$apellido;
   }
  echo saludo("Jeroni", "Lorenzo");
  echo "<br>";
  function suma ($num1, $num2){
   return $num1+$num2;
  }
  echo suma (5,5);
  echo "<br>";

  function añadirPlatoAPlatos ($platos, $plato){
   $platos[]= $plato;
   return $platos;
  }  
  var_dump(añadirPlatoAPlatos([1,2,3,4,5],6));
    echo "<br>";

   function lanzarDados ($numDados, $numCaras){
        $result = 0;
    for ($i = 0; $i < $numDados ; $i++) {
       $result = $result + rand(1,$numCaras);
    }

    // $valorDado1 = rand(1, $numCaras);
    // $valorDado2 = rand(1, $numCaras);
    return $result;
     

   }
    echo lanzarDados(2,6);
    echo "<br>";


  function cuantosDiasFaltan ($fechaLimite){
    $hoy = date("d-m-Y");
    // $fechaLimite = date("d-m-Y");
    echo $hoy;
    echo "<br>";
    $diferencia = strtotime($fechaLimite) - strtotime($hoy); //strtotime — Convierte una descripción de fecha/hora textual en Inglés a una fecha Unix
    return $diferencia;
  }
  var_dump(cuantosDiasFaltan(10-02-2023));
  

?>