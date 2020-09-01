<?php
include_once('girasol.php');
include_once('PlantaCarnivora.php');
include_once('captus.php');


$plantaCarnivora = new PlantaCarnivora();
$captus = new captus();
$girasol = new girasol();


$plantas = array($plantaCarnivora, $captus, $girasol);

foreach ($plantas as $planta) {
    $plantaFunciones = get_class_methods($planta);
    foreach ($plantaFunciones as $funcion) {
        try {
            $planta->$funcion();
        } catch (Exception $e) {
            echo 'Ha habido una excepción: ' . $e->getMessage();
        }
    }
    echo "\n";
}

?>