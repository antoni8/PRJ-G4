<?php
include 'esencial.php';
include 'classes/usuari.php';

$usuari = new Usuari();
var_dump($usuari = $usuari->llistar());

?>
