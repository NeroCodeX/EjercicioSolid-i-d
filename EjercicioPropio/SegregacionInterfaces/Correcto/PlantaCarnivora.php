<?php
include_once('alimentarse.php');
include_once('cazadores.php');

class PlantaCarnivora implements alimentarse,cazadores{

    function comer()
    {
        print_r("El girasol se esta alimentando\n");
    }

    function cazan()
    {
        print_r("La planta carnivora caza\n");
    }
    
}


?>