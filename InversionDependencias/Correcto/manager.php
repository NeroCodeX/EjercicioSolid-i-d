<?php

include_once('empleado.php');

class Manager {
    public $empleados = array();
    function addEmpleado(Empleado $empleado){
        array_push($this->empleados, $empleado);
    }
}

?>