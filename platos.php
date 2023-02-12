<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $platos = [
        "plato_1" => [
            "titulo" => "Pa amb oli",
            "comensales" => 1,
            "tipo de plato" => "Primero",
            "precio" => "8€"
        ],
        "plato_2" => [
            "titulo" => "Tumbet",
            "comensales" => 2,
            "tipo de plato" => "Segundo",
            "precio" => "18€"
        ],
         "plato_3" => [
            "titulo" => "Gató amb gelat",
            "comensales" => 1,
            "tipo de plato" => "Postre",
            "precio" => "8€"
            ]
        
    ];
    echo "<h1>Carta</h1>";
    foreach($platos as $plato){
        echo $plato["titulo"]."<br>";
        echo $plato["comensales"]."<br>";
        echo $plato["tipo de plato"]."<br>";
        echo $plato["precio"]."<br>";
    };
    echo "<ol>"


    
    ?>
</body>
</html>