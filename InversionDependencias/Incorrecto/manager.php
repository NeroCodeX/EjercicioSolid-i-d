<?php

include_once('diseniador.php');
include_once('desarrollador.php');
include_once('tester.php');

class Manager {
    public $diseniadores = array();
    public $desarrolladores = array();
    public $testers = array();

    function addDiseniadores(Diseniador $diseniador){
        array_push($this->diseniadores, $diseniador);
    }

    function addDesarrolladores(Desarrollador $desarrollador){
        array_push($this->desarrolladores, $desarrollador);
    }

    function addTesters(Tester $tester){
        array_push($this->testers, $tester);
    }
}

?>