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

    if ($contrasenyao != $contrasenyar) {
        header("Location: error.php?error5=contra2");
    } else {

        $registrar = new Usuari();
        $registrar = $registrar->registrar($DNI,$nom,$correu,$contrasenyar,$empresa);

        if ($registrar == 0) {
            header("Location: error.php?error4=correu2");
        }
        if ($registrar == 3) {
            header("Location: error.php?error3=dni");
        } 
        if ($registrar == 1) {
            header("Location: ../index.php");
        }
    }
}

?>
