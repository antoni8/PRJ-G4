<?php

session_start();

$_SESSION['login'] = null;
$_SESSION['id'] = null;
$_SESSION['nom'] = null;
$_SESSION['correu'] = null;
$_SESSION['rol'] = null;
$_SESSION['nif'] = null;

header("Location: ../index.php");

?>