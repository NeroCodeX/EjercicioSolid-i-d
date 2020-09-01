<?php

include_once('empleado.php');

class Desarrollador implements Empleado{
    function __construct()
    {
        print_r("Desarrollador agregado\n");
    }

    function trabajo(){
        print_r("Escribir el codigo del sitio web\n");
    }
}

?>