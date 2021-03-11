<?php

include 'esencial.php';
include 'classes/factura.php';

$id = $_GET['id'];

$factura = new Factura();
$factura->borrarFactura($id);
header("Location: factura.php");

?>