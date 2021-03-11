<?php
error_reporting(0);
include "perfil.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="../fotos/logo.png">
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>A&sup2; - FACTURA</title>
<meta name="description" content="Thoughts, reviews and ideas since 1999."/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="shortcut icon" href="#">
<link rel="stylesheet" type="text/css" href="../css/index2.0.css"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic"/>
</head>
<body class="home-template">
<div class="site-wrapper">
	<nav class="main-nav overlay clearfix">
	<a class="blog-logo" href="../index.php" style="height:64px;width:100px;"><img src="../fotos/logo.png"/></a>
	<ul id="menu">
  <li class="nav-home nav-current" role="presentation"><a href="../index.php">Inici</a></li>
		<!--<li class="nav-article-example" role="presentation"><a href="php/facturaprincipal.php">Factura</a></li>-->
    <li class="nav-about-us" role="presentation"><a href="factura.php">Factures</a></li>
		<li class="nav-about-us" role="presentation"><a href="magatzem.php">Magatzem</a></li>
		<li class="nav-author-page" role="presentation"><a href="administrar.php">Administrar usuaris</a></li>
		<span class="socialheader">
			<?php if ($_SESSION['login']==true){
		echo "<a href='#perfil'><span class='symbol'>Perfil</span></a>";}else {
		echo "<a href='#registrar'><span class='symbol'>Registrar</span></a>";
		echo "<a href='#login'><span class='symbol'>Login</span></a>";
		}?>
		<a href="#"><span class='symbol'>circletwitterbird</span></a>
		<a href="#"><span class='symbol'>circlefacebook</span></a>
		<a href="#"><span class='symbol'>circlegoogleplus</span></a>
		<a href="mailto://amatamalas11837@gmail.com"><span class='symbol'>circleemail</span></a>
		</span>
	</ul>
	</nav>
      	<header class="main-header" style="background-image: url(../fotos/2.jpg)">
      	<div class="vertical">
                <div class="main-header-content inner">
                        <h1 class="post-title">Administració de facturació</h1>
                        <div class="entry-title-divider">
                                <span></span><span></span><span></span>
                        </div>
                </div>
        </div>
		<a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll Down</span></a>
        </header>
        <main id="content" class="content" role="main">
	<div class="wraps">
		<!--<img src="../fotos/shadow.png" class="wrapshadow">-->
		<article class="post featured">
		<section class="post-content">
		<table>
        <?php

include 'classes/factura.php';
include 'classes/liniafactura.php';
if ($_SESSION['rol'] == 'Administrador' or $_SESSION['rol'] == 'Lector' or $_SESSION['rol'] == 'Editor') {
  $factures = new Factura();
  $factures = $factures->llistarFactures($_SESSION['nif']);
      
      foreach ($factures as $factura) {
          echo "<tr><th>ID</th><th>Data</th><th>Preu Total</th></tr>";
          echo "<tr>";
          echo "<td>";
          echo $factura['ID'];
          echo "</td>";

          echo "<td>";
          echo $factura['Data'];
          echo "</td>";

          echo "<td>";
          echo $factura['PreuTotal'];
          echo "</td>";

          echo "<td>";
          echo "<a href='eliminaFactura.php?id=".$factura['ID']."'>Elimina la factura</a><br>";
          echo "</td>";

          echo "</tr>";

          echo "<tr>";

          echo "<tr><th>ID</th><th>ID Producte</th><th>Nom</th><th>Quantitat</th><th>Preu</th></tr>";

          $linia = new LiniaFactura();
          $linia = $linia->llistarLiniesFactura($factura['ID']);
          
          foreach ($linia as $individual) {
              echo "<tr style='border-bottom:solid black';>";

              echo "<td>";
              echo $individual['ID'];
              echo "</td>";

              echo "<td>";
              echo $individual['ID_Producte'];
              echo "</td>";

              echo "<td>";
              echo $individual['Nom'];
              echo "</td>";

              echo "<td>";
              echo $individual['Quantitat'];
              echo "</td>";

              echo "<td>";
              echo $individual['PreuTotal'];
              echo "</td>";
              echo "</tr>";

          }

          echo "</tr>";

          
      }

      echo "</table>";
} else {
  echo "Has d'estar registrat per poder veure les factures";
}
?>
    </table>
    </p>
		</section>
		<script>
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://wowthemesdemo.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
		</article>
	</div>
	</main>
	<div class="clearfix">
	</div>
	<aside class="read-next">
	<a class="read-next-story " style="background-image: url(http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/10/2015/09/10175658/j6-520x779-520x600.jpg)" href="factura.php">
	<section class="post">
	<h2>Factures</h2>
	</section>
	</a>
	<a class="read-next-story prev " style="background-image: url(http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/10/2015/09/10175658/j7-520x780-520x600.jpg)" href="administrar.php">
	<section class="post">
	<h2>Administració de usuaris</h2>
	</section>
	</a>
	</aside>
	<footer class="site-footer clearfix">
	<a href="#top" id="back-to-top" class="back-top"></a>
	<div class="text-center">
		<a href="index.php">A&sup2;, SL</a> &copy; 2021<br>
		<p>Antoni: Tel. xxxxxxxxx | email: amatamalas11837@alumnes.iesmanacot.cat</p>
    <p>Adrià: Tel. yyyyyyyyy| email: acuevasdela14713@alumnes.iesmanacor.cat</p>
	</div>
	</footer>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../java/masonry.min.js"></script>
<script type="text/javascript" src="../java/jquery.fitvids.js"></script>
<script type="text/javascript" src="../java/index.js"></script>
<script type="text/javascript" src="../java/factura.js"></script>
<div id="registrar" class="registrar">
  <div class="modal-dialog">
    <div class="modal-content">
      <header class="container">
        <a href="factura.php" class="closebtn">x</a>
        <h2>REGISTRA'T</h2>
      </header>
      <div class="container">
        <form action="registrar.php" method="get">
        Introdueix el teu correu electronic:
        <input type="email" name="correu"><br>
	       Introdueix el teu nom d'usuari:
          <input type="text" name="nom"><br>
	       Introdueix el teu DNI:
          <input type="text" name="dni"><br>
          Introdueix la teva contrasenya:
          <input type="password" name="contrasenyao" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"><br>
	  Confirma la teva contrasenya:
          <input type="password" name="contrasenyar"><br>
	  Introdueix la teva empresa:
	  <input type="text" name="empresa">
      </div>
      <footer class="container">
        <input type="submit" value="REGISTRA'T">
      </footer>
      </form>
    </div>
  </div>
</div>
<div id='login' class='login'>
  <div class='modal-dialog'>
    <div class='modal-content'>
    <header class='container'>
      <a href='factura.php' class='closebtn'>x</a>
      <h2>LOGIN</h2>
    </header>
      <div class='container'>
        <form action='login.php' method='get'>
          Introdueix el teu correu electrònic:
          <input type='email' name='correu'><br>
          Introdueix la teva contrasenya:
          <input type='password' name='contrasenya'><br>
	  <a href='#rempwd'>Recordar contrasenya</a>
          <a href='#registrar'>Registrar-se</a>
      </div>
      <footer class='container'>
        <input type='submit' value='ENTRA'>
      </footer>
      </form>
    </div>
  </div>
</div>
<div id='perfil' class='perfil'>
   <div class='modal-dialog'>
    <div class='modal-content'>
      <header class='container'>
        <a href='factura.php' class='closebtn'>x</a>
        <img src='../fotos/perfil.png' style='width:25%;'>
        <h1><?php echo $info['Nom'];?></h1>
        <h4><p><?php echo $info['NomE'];?></p></h4>
      </header>
      <div class='container'>
	<p>DNI: <?php echo $info['DNI'];?></p>
	<p>Correu electrònic: <?php echo $info['Correu'];?></p>
	<p>Rol: <?php echo $info['Rol'];?></p>
	<a href='canviarcontrasenya.php'>Canvia la contrasenya</a>
      </div>
      <footer class='container'>
	<button><a href='cerrar.php'>Tanca sessió</a></button>
      </footer>
    </div>
  </div>
</div>
</body>
</html>
