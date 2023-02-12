<?php
    $colores = [['purpura', 'morado'], 'azul', 'rojo', 'verde'];
    echo $colores[1]
?>

<?php
    $colores = array (['purpura', 'morado'], 'azul', 'rojo', 'verde');
    echo $colores[0][0]
?>

<?php
$clase = [
    "alumnos" =>[
        "Diego", "Maria", "Alberto", "Mario", "Luis Felipe", "Fran", "Javi", "Jeroni"
    ],
    "nombre_clase" => "MR. 03",
    "aforo" => 10, 
    "docentes" => ["Pablo", "David", "Ana", "Jose", "Daniel"],
    "equipamiento" => ["tv" => TRUE,
    "regletas" => [ 
        "numero" => 10],
    "calefaccion" => TRUE
    ]
    ];

    echo " En la clase ".$clase["nombre_clase"]." ". "existen ".$clase["equipamiento"]["regletas"]["numero"]." "."regletas."
?>

