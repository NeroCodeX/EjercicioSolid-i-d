<?php

include_once('Facultad.php');

class teologia implements Facultad{
    function __construct()
    {
        print_r("Da clase de ciencia y biblia\n");
    }

    function ensenia(){
        print_r("Da clase de ciencia y biblia\n");
    }
}

?>