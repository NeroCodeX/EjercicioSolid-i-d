<?php

include_once('manager.php');
include_once('diseniador.php');
include_once('desarrollador.php');
include_once('tester.php');

$manager = new Manager();
$diseniador = new Diseniador();
$desarrollador = new Desarrollador();

$manager->addEmpleado($diseniador);
$manager->addEmpleado($desarrollador);

// var_dump($manager->empleados);
// print_r($diseniador->trabajo());

?>