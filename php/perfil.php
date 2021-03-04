<html>
<head>

</head>
<body>

<?php

include 'classes/usuari.php';

if ($_SESSION['login'] == true) {
    $usuari = new Usuari();
    $dni = $_SESSION['id'];
    $info = $usuari->perfil($dni);
    /* echo $info["DNI"];
    echo "<br>";
    echo $info['Nom'];
    echo "<br>";
    echo $info['Correu'];
    echo "<br>";
    echo $info['Rol'];
    echo "<br>";
    echo $info['NomE']; */
}

?>

<h1><?php echo $info['Nom']; ?></h1>
<h4><p><?php echo $info['NomE']; ?></p></h4>
<hr>
<p>DNI: <?php echo $info['DNI']; ?></p>
<p>Correu electrònic: <?php echo $info['Correu']; ?></p>
<p>Rol: <?php echo $info['Rol']; ?></p>
<hr>
<a href="canviaContrasenya.php">Canvia la contrasenya</a>
<button><a href="cerrar.php">Me cagon tom pare amb bolles amb es puta bottonet!!</a></button>
</body>
</html>
