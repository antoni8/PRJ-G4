<?php
echo "<html>
<head>
<title>A&sup2; - Canviar contrasenya</title>
<link rel='stylesheet' type='text/css' href='css/canvicontra.css'/>
</head>
<body>";
echo "<form action='' method='get'>";
echo "<input type='password' name='password'><input type='submit' value='VERIFICA'></form>";
if (isset($_GET["password"])){
  echo "<form action='<?php echo $_SERVER[PHP_SELF']; ?>' method='post'>";
  echo "Indica la nova contrasenya:\n<input type='password' name='contranovao'><br>";
  echo "Verifica la nova contraseya:\n<input type='password' name='contranovar'><br>";
  echo "<input type='submit' value='CANVIA'></form>";
}
echo "</body></html>";

include 'classes/usuari.php';

if (isset($_GET)) {
    $contrasenya = $_GET['contranovar'];
    $dni = $_SESSION['id'];

    $canviar = new Usuari();
    $canviar->canviaContra($dni,$contrasenya);

}

?>