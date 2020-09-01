<?php

include_once('Facultad.php');

class salud implements Facultad{
    function __construct()
    {
        print_r("Da clase de en el area de la buena salud\n");
    }

    function ensenia(){
        print_r("Da clase de salud y bienestar\n");
    }
}

?>