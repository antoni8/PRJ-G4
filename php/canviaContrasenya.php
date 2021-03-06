<?php

include 'classes/usuari.php';

if ($_GET) {
    $contrasenya = $_GET['contrasenya'];
    $dni = $_SESSION['id'];

    $canviar = new Usuari();
    $canviar->canviaContra($dni,$contrasenya);

}

?>