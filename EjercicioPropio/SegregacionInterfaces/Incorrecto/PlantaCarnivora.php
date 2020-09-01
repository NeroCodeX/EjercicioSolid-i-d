<?php
include_once('acciones.php');


class PlantaCarnivora implements acciones{

    function comer()
    {
        print_r("El Planta carnivora se esta alimentando\n");
    }

    function cazan()
    {
        print_r("La planta carnivora caza\n");
    }
    function flor()
    {
        
        print_r("La planta carnivora no florece\n");
    
    }
    
}


?>