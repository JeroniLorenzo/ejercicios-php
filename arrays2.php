<?php
    $valores = [
        "a" => 1,
        3 => 2,
        0 => 56,
        "x" => 42
    ];

    $valores ["numero regletas"] = 56;

    
    unset($valores["x"]);
    var_dump($valores);
    echo ("<br>");

    foreach($valores as $key => $valor){
        echo $key."-".$valor."<br>";
    }


    $letras = [
        "A",
        "B",
        "C",
        "D",
        "E",
        "F",
        "G",
        "H",
        "I"
    ];
    function ordenLetras($array){
        $longitud= count($array);
        return $longitud;
    }
    echo ("<br>");
    // echo ordenLetras($letras);


    function mostrarElementoRandom ($array){
        $longitud= count($array);
        $randomPosition = rand(0, $longitud-1);
        return $array[$randomPosition];
    }

    echo mostrarElementoRandom($letras);

    echo ("<br>");

    function arrayInverso ($array){
        $invertido = array_reverse($array);
        return $invertido;

    }
    var_dump(arrayInverso($letras));

    echo ("<br>");

    function parImpar ($number){
        if($number %2==0){
            return "es par";
        }else{
            return "es impar";
        };
    
    }
    echo parImpar(21);
    echo ("<br>");

    $numeros=[
        5,10,15,20,25,101,102,103,104,105

    ];


    function mayorQue ($arrayDeNumeros, $numeroAFiltrar){
        $nuevoArrayFiltrado = [];
        foreach ($arrayDeNumeros as $filtro){
            if($filtro >= $numeroAFiltrar ){
            $nuevoArrayFiltrado[]=$filtro;
        }
        }
        return $nuevoArrayFiltrado;
        
    }
    var_dump(mayorQue($numeros, 100));
    echo "<br>";

    function menorQue ($arrayDeNumeros, $numeroAFiltrar){
        $nuevoArray = [];
        foreach ($arrayDeNumeros as $filtro){
            if($filtro <=$numeroAFiltrar){
                $nuevoArray[]=$filtro;
            }
        }
        return $nuevoArray;
    }
    var_dump(menorQue($numeros, 100));
    echo "<br>";

    function sustituirLetras ($cadenaTexto){
        $nuevaCadena = str_replace(
            ["ñ", "á", "é", "í", "ó", "ú"],
            ["n", "a", "e", "i", "o", "u"],
            $cadenaTexto
        );
        return $nuevaCadena;

    }
    echo sustituirLetras("Españá pénjada duna caña")
?>

