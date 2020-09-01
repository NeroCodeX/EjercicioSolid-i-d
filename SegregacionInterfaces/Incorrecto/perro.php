<?php

include_once('animal.php');

class Perro implements Animal{
    function correr()
    {
        print_r("El perro esta corriendo\n");
    }

    function nadar()
    {
        print_r("El perro esta nadando\n");
    }

    function sonido()
    {
        print_r("El perro esta ladrando guau guau\n");
    }

    function comer()
    {
        print_r("El perro esta comiendo\n");
    }
}

?>