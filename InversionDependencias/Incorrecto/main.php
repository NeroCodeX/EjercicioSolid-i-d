<?php

include_once('manager.php');
include_once('diseniador.php');
include_once('desarrollador.php');
include_once('tester.php');

$manager = new Manager();
$diseniador = new Diseniador();
$desarrollador = new Desarrollador();
$tester = new Tester();

$manager->addDiseniadores($diseniador);
$manager->addDesarrolladores($desarrollador);
$manager->addTesters($tester);

// var_dump($manager->list);
// print_r($diseniador->trabajo());

?>