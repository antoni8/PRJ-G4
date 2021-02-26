<?php

// Classe de db
/* include 'classes/db.php';

$db = new DB(); */

// Clase de usuari
/* include 'classes/usuari.php';

$hola = new Usuari();

/* $hola->registrar("41622494S","adria","adrian@hola.com","hola",12345678k"); */

/* $hola->login("adrian@hola.com","hola");

var_dump($_SESSION); */

// Clase de prodcute
/* include 'classes/producte.php';

$taula = new Producte(); */

/* $taula->afegir("Taula",10,4.25,21,21); */
/* $taula->borrar(3); */
/* $taula->editarStock(1,5); */

// Clase de empresa
include 'classes/empresa.php';

$empresa = new Empresa();

/* echo $empresa->afegir('87654322D','Paco','Mi casa',123456789); */

echo $empresa->borrar('87654322D');

?>
