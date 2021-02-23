<?php
//error_reporting(0);
include "../html/factura.html";
include "../js/factura.js";
$nom=$preu=$descompte=$iva=$import=0;
$ref=$_GET['referencia'];
$txt=$_GET['text'];
$stock=$_GET['almacen'];
$qtt=$_GET['quantitat'];
$chck=$_GET['check'];


?>
