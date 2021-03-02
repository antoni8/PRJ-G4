<?php

include 'classes/usuari.php';

if ($_GET) {
    $correu = $_GET['correu'];
    $contrasenya = $_GET['contrasenya'];

    $login = new Usuari();
    $login = $login->login($correu,$contrasenya);
    var_dump($_SESSION);
    //header("Location: ../html/perfil.php");
}

?>