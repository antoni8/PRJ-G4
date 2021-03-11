<?php 

include 'esencial.php';
include 'classes/producte.php';

$id = $_GET['id'];

$elimina = new Producte();

$elimina = $elimina->borrar($id);
header("Location: magatzem.php");

?>