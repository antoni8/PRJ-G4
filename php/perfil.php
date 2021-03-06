<?php

include 'classes/usuari.php';

if ($_SESSION['login'] == true) {
    $usuari = new Usuari();
    $dni = $_SESSION['id'];
    $info = $usuari->perfil($dni);
}
?>
<!--<html>
<head>
</head>
<body>
  <div id='perfil' class='perfil'>
    <div class='modal-dialog'>
     <div class='modal-content'>
       <header class='container'>
 				<h1> <?php echo $info['Nom'];?></h1>
 				<h4><p> <?php echo $info['NomE'];?></p></h4>
 				<a href='index.php' class='closebtn'>x</a>
       </header>
       <div class='container'>
 	<p>DNI: <?php echo $info['DNI'];?></p>
 	<p>Correu electrònic: <?php echo $info['Correu'];?></p>
 	<p>Rol: <?php echo $info['Rol'];?></p>
       </div>
       <footer class='container'>
 	<a href='canviaContrasenya.php'>Canvia la contrasenya</a>
 	<button><a href='php/cerrar.php'>Tanca sessió</a></button>
       </footer>
     </div>
   </div>
 </div>
</body>
</html>-->
