<?php

include 'esencial.php';
include 'classes/usuari.php';

$rol = $_GET['rol'];
$dni = $_GET['dni'];

$usuari = new Usuari();
$usuari->canviarRol($dni,$rol);
header("Location: administrar.php");

?>