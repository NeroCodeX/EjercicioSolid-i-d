<?php
include_once('nadador.php');
include_once('alimentarse.php');

class Salmon implements Nadador, Alimentarse{
    function nadar()
    {
        print_r("El salmon esta nadando glu glu\n");
    }

    function comer()
    {
        print_r("El salmon esta comiendo\n");
    }
}

?>