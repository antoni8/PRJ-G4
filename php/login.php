<?php

include 'esencial.php';
include 'classes/usuari.php';

if ($_GET) {
    $correu = $_GET['correu'];
    $contrasenya = $_GET['contrasenya'];

    $login = new Usuari();
    $login = $login->login($correu,$contrasenya);
    if ($login == 0) {
        header("Location: error.php?error=correu");
    } elseif ($login == 2) {
        header("Location: error.php?error=contra");
    } else {
        header("Location: ../index.php#perfil");
    }
}

?>
