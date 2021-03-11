<?php

include 'esencial.php';
include 'classes/usuari.php';

if (isset($_SESSION['login']) == true) {
    $usuari = new Usuari();
    $dni = $_SESSION['id'];
    $info = $usuari->perfil($dni);
}
?>

