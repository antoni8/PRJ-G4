<?php


include 'usuari.php';

$hola = new Usuari();

/* $hola->registrar("41622494S","adria","adrian@hola.com","hola",12345678k"); */

$hola->login("adrian@hola.com","hola");

var_dump($_SESSION);

?>
