<?php

include 'classes/usuari.php';

if ($_GET) {
    $correu = $_GET['correu'];
    $contrasenya = $_GET['contrasenya'];

    $login = new Usuari();
    $login = $login->login($correu,$contrasenya);
    header("Location: ../index.php#perfil");
}

?>
