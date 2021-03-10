<?php

include 'esencial.php';
include 'classes/usuari.php';

if ($_GET) {
    $DNI = $_GET['dni'];
    $nom = $_GET['nom'];
    $correu = $_GET['correu'];
    $contrasenyao = $_GET['contrasenyao'];
    $contrasenyar = $_GET['contrasenyar'];
    $empresa = $_GET['empresa'];

    if ($contrasenyao == $contrasenyar) {
        header("Location: error.php?error2=contra2#registrar");
    }

    $registrar = new Usuari();
    $registrar = $registrar->registrar($DNI,$nom,$correu,$contrasenyar,$empresa);

    if ($registrar == 0) {
        header("Location: error.php?error2=correu2#registrar");
    }
    if ($registrar == 3) {
        header("Location: error.php?error2=dni#registrar");
    } else {
        header("Location: ../index.php");
    }
}

?>
