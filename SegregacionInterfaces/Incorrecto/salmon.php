<?php

include_once('animal.php');

class Salmon implements Animal{
    function correr()
    {
        throw new Exception ("El salmon no puede correr\n");
    }

    function nadar()
    {
        print_r("El salmon esta nadando\n");
    }

    function sonido()
    {
        throw new Exception ("El salmon no puede hacer sonidos\n");
    }

    function comer()
    {
        print_r("El salmon esta comiendo\n");
    }
}

?>