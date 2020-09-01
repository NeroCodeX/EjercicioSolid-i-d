<?php
include_once('leon.php');
include_once('perro.php');
include_once('gato.php');
include_once('salmon.php');

$leon = new Leon();
$gato = new Gato();
$perro = new Perro();
$salmon = new Salmon();

$animales = array($leon, $gato, $perro, $salmon);

foreach ($animales as $animal) {
    $animalFunciones = get_class_methods($animal);
    foreach ($animalFunciones as $funcion) {
        $animal->$funcion();
    }
    echo "\n";
}

?>