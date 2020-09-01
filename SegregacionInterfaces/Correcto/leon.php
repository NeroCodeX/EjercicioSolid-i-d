<?php
include_once('corredor.php');
include_once('nadador.php');
include_once('emitirsonido.php');
include_once('alimentarse.php');

class Leon implements Corredor, Nadador, EmitirSonido, Alimentarse{
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