<?php

include 'classes/usuari.php';

if ($_GET) {
    $DNI = $_GET['dni'];
    $nom = $_GET['nom'];
    $correu = $_GET['correu'];
    $contrasenya = $_GET['contrasenyar'];
    $empresa = $_GET['empresa'];

    $registrar = new Usuari();

    echo $registrar->registrar($DNI,$nom,$correu,$contrasenya,$empresa);
    header("Location: ../html/perfil.php");
}

?>
