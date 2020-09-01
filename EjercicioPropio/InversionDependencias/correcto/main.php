<?php

include_once('EducacionHumanidades.php');
include_once('fcee.php');
include_once('ingenieria.php');
include_once('Salud.php');
include_once('Teologia.php');
include_once('Rector.php');

$rector =new Rector();
$ingenieria = new ingenieria();
$salud = new salud();
$teologia = new teologia();

$rector->addFacultades($ingenieria);
$rector->addFacultades($salud);
$rector->addFacultades($teologia);



?>