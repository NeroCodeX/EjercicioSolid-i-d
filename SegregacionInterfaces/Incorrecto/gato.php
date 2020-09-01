<?php

include_once('animal.php');

class Gato implements Animal{
    function correr()
    {
        print_r("El gato esta corriendo\n");
    }

    function nadar()
    {
        print_r("El gato esta nadando\n");
    }

    function sonido()
    {
        print_r("El gato esta maullando miauuu\n");
    }

    function comer()
    {
        print_r("El gato esta comiendo\n");
    }
}

?>