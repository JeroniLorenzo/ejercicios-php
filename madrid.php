<!-- No se interpreta como php -->
<p>Esto es el header</p>

<?php
    echo '<h1>desde madrid</h1>';
?>
<?php
    define ('CONSTANTE', 'Esto va a ser una constante');
    define ('ARRAY_CONSTANT', ['uno', 'dos', 'tres']);
    print_r ('<h2>desde madrid</h2>');
    print_r ([1,2,3]);
    echo '<br>';
    var_dump ([4,5,6]);
    echo '<br>';
    $primeraVariable = 'Mi variable es un string';
    echo $primeraVariable;
    echo '<br>';
    $zumo = 'naranja';
    echo '<br>';
    echo 'Esto es un zumo de '.$zumo;
    echo '<br>';
    echo "Esto es un zumo de ${zumo}s";
    echo '<br>';
    $tipoBoolean = TRUE;
    echo '<br>';
    echo gettype($tipoBoolean);
    echo '<br>';
    echo CONSTANTE;
    echo '<br>';
    echo ARRAY_CONSTANT[0]." ".ARRAY_CONSTANT[1];
    echo '<br>';
    echo "PHP version ".PHP_VERSION;
    echo "PHP version ".PHP_OS;

?>
<!-- No se interpreta como php -->
<p>Esto es el footer</p>

<?php
echo 'esto es otra intruccion';
?>