<?php
include_once('alimentarse.php');
include_once('florecen.php');



class captus implements alimentarse, florecen{

    function comer()
    {
        print_r("El captus se alimenta\n");
    }

    function flor()
    {
        print_r("El captus florece\n");
    }
    
}

?>