<?php
error_reporting(0);
include 'esencial.php';
include 'classes/usuari.php';

if (isset($_GET)) {
  $comprovar = new Usuari();
  $dni2 = $_SESSION['id'];
  $contrasenya2 = $_GET['password'];
}

if (isset($_POST)) {
    $contrasenya = $_POST['contranovar'];
    $dni = $_SESSION['id'];

    $canviar = new Usuari();
    $canviar->canviaContra($dni,$contrasenya);

}

echo "<html>
<head>
<title>A&sup2; - Canviar contrasenya</title>
<link rel='shortcut icon' href='../fotos/logo.png'>
<link rel='stylesheet' type='text/css' href='css/canvicontra.css'/>
</head>
<body>";
echo "<form action='' method='get'>";
echo "<input type='password' name='password'><input type='submit' value='VERIFICA'></form>";
if (isset($_GET["password"])&(($comprovar->comprovarContra($dni2,$contrasenya2) == true))){
  echo "<form action='' method='post'>";
  echo "Indica la nova contrasenya:\n<input type='password' name='contranovao'><br>";
  echo "Verifica la nova contraseya:\n<input type='password' name='contranovar'><br>";
  echo "<input type='submit' value='CANVIA'></form>";
}
echo "</body></html>";

?>
