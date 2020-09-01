<?php
include_once('corredor.php');
include_once('nadador.php');
include_once('emitirsonido.php');
include_once('alimentarse.php');

class Perro implements Corredor, Nadador, EmitirSonido, Alimentarse{
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