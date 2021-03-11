<?php
error_reporting(0);
include "php/perfil.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="fotos/logo.png">
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>A&sup2; - Benviguts a la nostra aplicació</title>
<meta name="description" content="Thoughts, reviews and ideas since 1999."/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="shortcut icon" href="#">
<link rel="stylesheet" type="text/css" href="css/index2.0.css"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic"/>
</head>
<body class="home-template">
<div class="site-wrapper">
	<nav class="main-nav overlay clearfix">
	<a class="blog-logo" href="index.php" style="height:64px;width:100px;"><img src="fotos/logo.png"/></a>
	<ul id="menu">
		<li class="nav-home nav-current" role="presentation"><a href="index.php">Inici</a></li>
		<!--<li class="nav-article-example" role="presentation"><a href="php/facturaprincipal.php">Factura</a></li>-->
    <li class="nav-about-us" role="presentation"><a href="php/factura.php">Factures</a></li>
		<li class="nav-about-us" role="presentation"><a href="php/magatzem.php">Magatzem</a></li>
		<li class="nav-author-page" role="presentation"><a href="php/administrar.php">Administrar usuaris</a></li>
		<span class="socialheader">
			<?php 
			if ($_SESSION['login']==true){
				echo "<a href='#perfil'><span class='symbol'>Perfil</span></a>";
			} else {
				echo "<a href='#registrar'><span class='symbol'>Registrar</span></a>";
				echo "<a href='#login'><span class='symbol'>Login</span></a>";
			}
			?>
		<a href="#"><span class='symbol'>circletwitterbird</span></a>
		<a href="#"><span class='symbol'>circlefacebook</span></a>
		<a href="#"><span class='symbol'>circlegoogleplus</span></a>
		<a href="mailto://amatamalas11837@gmail.com"><span class='symbol'>circleemail</span></a>
		</span>
	</ul>
	</nav>
	<header class="main-header" style="background-image: url('fotos/1.jpg')">
	<div class="vertical">
		<div class="main-header-content inner">
			<h1 class="page-title"></h1>
			<h2 class="page-description">Benvinguts a la nostra pàgina</h2>
			<div class="entry-title-divider">
				<span></span><span></span><span></span>
			</div>
		</div>
	</div>
	<a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll Down</span></a>
	</header>
	<main id="content" class="content" role="main">
	<div class="wraps">
		<img src="fotos/shadow.png" class="wrapshadow">
		<div class="grid">
			<div class="grid-item">
				<article class="post">
				<div class="wrapgriditem">
					<header class="post-header">
					<h2 class="post-title"><a href="article.html">ADRIÁN (SKILLS)</a></h2>
					</header>
					<section class="post-excerpt">
					<p>
						Un al·lot excepcional, futur guanyador dels SKILLS i qui ferà les pràctiques al Nadal
					</p>
				</div>
				</article>
			</div>
			<div class="grid-item">
				<article class="post">
				<div class="wrapgriditem">
					<header class="post-header">
					<h2 class="post-title"><a href="article.html">ANTONI (APACHE)</a></h2>
					</header>
					<section class="post-excerpt">
					<p>
						Alies 'ENCEN S'APACHE!!!'
					</p>
				</div>
				</article>
			</div>
			<div class="grid-item">
				<article class="post">
				<div class="wrapgriditem">
					<header class="post-header">
					<h2 class="post-title"><a href="article.html">ANA I VIOLETA</a></h2>
					</header>
					<section class="post-excerpt">
					<p>
						PORFI, APROVA 🥺
					</p>
				</div>
				</article>
			</div>
		</div>
	</div>
	</main>
	<aside class="read-next">
	<a class="read-next-story " style="background-image: url(../foto/flechae.png)" href="php/administrar.php">
	<section class="post">
	<h2>ADMINISTRACIÓ D'USUARIS</h2>
	</section>
	</a>
	<a class="read-next-story " style="background-image: url(../foto/flechae.png)" href="php/factura.php">
	<section class="post">
	<h2>FACTURES</h2>
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
<script type="text/javascript" src="java/masonry.min.js"></script>
<script type="text/javascript" src="java/jquery.fitvids.js"></script>
<script type="text/javascript" src="java/index.js"></script>
<div id="registrar" class="registrar">
  <div class="modal-dialog">
    <div class="modal-content">
      <header class="container">
        <a href="index.php" class="closebtn">x</a>
        <h2>REGISTRA'T</h2>
      </header>
      <div class="container">
        <form action="php/registrar.php" method="get">
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
	  <input type="text" name="empresa"><br>
	  <?php
		if (isset($_GET['dni']) == 'dni') {
			echo "El DNI ja ha sigut registrat";
		}
		if (isset($_GET['correu']) == 'correu') {
			echo "El correu ja ha sigut registrat";
		}
		if (isset($_GET['contra']) == 'contra') {
			echo "Les contrasenyes no coincideixen";
		}
	  ?>
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
      <a href='index.php' class='closebtn'>x</a>
      <h2>LOGIN</h2>
    </header>
      <div class='container'>
        <form action='php/login.php' method='get'>
          Introdueix el teu correu electrònic:
          <input type='email' name='correu'><br>
          Introdueix la teva contrasenya:
          <input type='password' name='contrasenya'>
          <h6><a href='#registrar'>Registrar-se</a></h6>
		  <?php
			if (isset($_GET['error']) == 'correu'){
				echo "El correu no està registrat";
			}
			if (isset($_GET['error2']) == 'contra') {
				echo "La contrasenya no és correcte";
			}
		  ?>
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
        <a href='index.php' class='closebtn'>x</a>
		<img src='fotos/perfil.png' style="width:25%;">
        <h1><?php echo $info['Nom'];?></h1>
        <h4><p><?php echo $info['NomE'];?></p></h4>
      </header>
      <div class='container'>
	<p>DNI: <?php echo $info['DNI'];?></p>
	<p>Correu electrònic: <?php echo $info['Correu'];?></p>
	<p>Rol: <?php echo $info['Rol'];?></p>
	<a href='php/canviarcontrasenya.php'>Canvia la contrasenya</a>
      </div>
      <footer class='container'>
	<button><a href='php/cerrar.php'>TANCA SESSIÓ</a></button>
      </footer>
    </div>
  </div>
</div>
</body>
</html>
