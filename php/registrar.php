<?php

include 'classes/usuari.php';

if ($_GET) {
    $DNI = $_GET['dni'];
    $nom = $_GET['nom'];
    $correu = $_GET['correu'];
    $contrasenya = $_GET['contrasenya'];
    $empresa = $_GET['empresa'];

    $registrar = new Usuari();
    
    $registrar->registrar($DNI,$nom,$correu,$contrasenya,$empresa);
}

?>