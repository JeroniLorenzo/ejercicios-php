<!-- <?php
    $nota = 3;
if($nota < 0 && $nota>10){
    echo 'Dame una nota entre el 0 y el 10';
}
if($nota < 5){
    echo 'insuficiente';}
if($nota >=5 && $nota <= 6 ){
    echo 'Suficiente';}
if($nota = 7 || $nota = 8 || $nota = 9){
    echo 'Notable';}
if($nota = 10) {
    echo 'Sobresaliente';
}
?> -->

<?php
    $nota = 4;
    $error = $nota < 0 && $nota > 10;
    $insuficiente = $nota >= 0 && $nota <= 4;
    $suficiente = $nota >= 5 && $nota <= 6;
    $notable = $nota >= 7 && $nota <= 8;
    $excelente = $nota >= 9 && $nota <= 10;


    switch ($nota){
        case $error;
        echo 'La nota tiene que ser entre 0 y 10';
        break;
        case $insuficiente;
        echo 'Insuficiente';
        break;
        case $suficiente;
        echo 'Suficiente';
        break;
        case $notable;
        echo 'Notable';
        break;
        case $excelente;
        echo 'Excelente';
        break;
    }

?>