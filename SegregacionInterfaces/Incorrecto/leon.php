<?php

include_once('animal.php');

class Leon implements Animal{
    function correr()
    {
        print_r("El leon esta corriendo\n");
    }

    function nadar()
    {
        print_r("El leon esta nadando\n");
    }

    function sonido()
    {
        print_r("El leon esta rugiendo raaaaar\n");
    }

    function comer()
    {
        print_r("El leon esta comiendo\n");
    }
}

?>