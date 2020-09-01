<?php

include_once('Facultad.php');

class ingenieria implements Facultad{
    function __construct()
    {
        print_r("Da clase de programacion y redes\n");
    }

    function ensenia(){
        print_r("programacion y redes\n");
    }
}

?>