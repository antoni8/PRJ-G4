<?php

include 'esencial.php';
include 'classes/producte.php';

$nom = $_GET['nom'];
$stock = $_GET['stock'];
$preu = $_GET['preu'];
$descompte = $_GET['descompte'];
$iva = $_GET['iva'];

$afegir = new Producte();
$afegir->afegir($nom,$stock,$preu,$descompte,$iva);
header("Location: magatzem.php");

?>