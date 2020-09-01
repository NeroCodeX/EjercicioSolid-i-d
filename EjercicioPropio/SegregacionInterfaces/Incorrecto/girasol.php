<?php
include_once('acciones.php');


class girasol implements acciones{

    function comer()
    {
        print_r("El girasol se esta alimentando\n");
    }

    function flor()
    {
        print_r("El girasol florece\n");
    }

    function cazan(){
        throw new Exception ("El girasol no caza\n");
    }
    
}

?>