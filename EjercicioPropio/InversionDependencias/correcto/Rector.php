<?php

include_once('Facultad.php');

class Rector {
    public $facultades = array();
    function addFacultades(Facultad $facultad){
        array_push($this->facultades, $facultad);
    }
}

?>