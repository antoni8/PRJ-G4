<?php

include 'esencial.php';
include 'classes/usuari.php';

$dni = $_GET['dni'];

$usuari = new Usuari();
$usuari = $usuari->eliminar($dni);
header("Location: administrar.php");

?>