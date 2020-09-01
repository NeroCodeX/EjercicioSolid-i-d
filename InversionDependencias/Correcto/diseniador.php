<?php

include_once('empleado.php');

class Diseniador implements Empleado{
    function __construct()
    {
        print_r("Diseniador agregado\n");
    }

    function trabajo(){
        print_r("Modelar las vistas de un sitio web\n");
    }
}

?>