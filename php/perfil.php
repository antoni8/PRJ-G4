<?php

include 'classes/usuari.php';

if ($_SESSION['login'] == true) {
    $usuari = new Usuari();
    $dni = $_SESSION['id'];
    $info = $usuari->perfil($dni);
}
?>

