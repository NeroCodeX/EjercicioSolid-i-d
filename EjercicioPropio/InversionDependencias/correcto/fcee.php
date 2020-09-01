<?php

include_once('Facultad.php');

class fcee implements Facultad{
    function __construct()
    {
        print_r("Da clase de administracion y economia\n");
    }

    function ensenia(){
        print_r("Da clase de administracion y economia\n");
    }
}

?>