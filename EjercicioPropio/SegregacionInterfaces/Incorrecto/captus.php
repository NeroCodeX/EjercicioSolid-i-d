<?php
include_once('acciones.php');

class captus implements acciones{

    function comer()
    {
        print_r("El captus se alimenta\n");
    }

    function flor()
    {
        print_r("El captus florece\n");
    }
    function cazan(){
        throw new Exception ("El captus no caza\n");
    }
}

?>