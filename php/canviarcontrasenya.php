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
  echo "<form action='' method='post'>";
  echo "Indica la nova contrasenya:\n<input type='password' name='contranovao'><br>";
  echo "Verifica la nova contraseya:\n<input type='password' name='contranovar'><br>";
  echo "<input type='submit' value='CANVIA'></form>";
}
echo "</body></html>";
?>
