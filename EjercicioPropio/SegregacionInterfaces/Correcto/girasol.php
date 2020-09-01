<?php
include_once('alimentarse.php');
include_once('florecen.php');


class girasol implements alimentarse, florecen{

    function comer()
    {
        print_r("El girasol se esta alimentando\n");
    }

    function flor()
    {
        print_r("El girasol florece\n");
    }
    
}

?>