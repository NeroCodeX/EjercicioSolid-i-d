<?php
include_once('corredor.php');
include_once('nadador.php');
include_once('emitirsonido.php');
include_once('alimentarse.php');

class Gato implements Corredor, Nadador, EmitirSonido, Alimentarse{
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
        print_r("El gato esta maullando miauuuu\n");
    }

    function comer()
    {
        print_r("El gato esta comiendo\n");
    }
}

?>