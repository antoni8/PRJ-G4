<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>A&sup2; - MAGATZEM</title>
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
		<li class="nav-author-page" role="presentation"><a href="#perfil">Perfil</a></li>
		<span class="socialheader">
		<a href="#registrar"><span class='symbol'>Registrar</span></a>
		<a href="#login"><span class='symbol'>Login</span></a>
		<a href="#"><span class='symbol'>circletwitterbird</span></a>
		<a href="#"><span class='symbol'>circlefacebook</span></a>
		<a href="#"><span class='symbol'>circlegoogleplus</span></a>
		<a href="mailto://amatamalas11837@gmail.com"><span class='symbol'>circleemail</span></a>
		</span>
	</ul>
	</nav>
      	<header class="main-header" style="background-image: url(../fotos/fondo_1.jpg)">
      	<div class="vertical">
                <div class="main-header-content inner">
                        <h1 class="post-title">Administració de l'Stock</h1>
                        <div class="entry-title-divider">
                                <span></span><span></span><span></span>
                        </div>
                </div>
        </div>
        </header>
        <main id="content" class="content" role="main">
	<div class="wraps">
		<!--<img src="../fotos/shadow.png" class="wrapshadow">-->
		<article class="post featured">
		<section class="post-content">
    <p>
		<!--<H2>ALBARÀ</H2>
    <h3>INTRODUEIX EL TEU ALBARÀ</h3>
  <FORM ACTION='' METHOD='GET'>
    <table border="1" id="demo">
      <tr><input type="date" name="data">
      <tr>
        <td>Referencia</td>
        <td>Nombre</td>
        <td>Texto</td>
        <td>Almacén</td>
        <td>Cantidad</td>
        <td>Precio</td>
        <td>Dto.</td>
        <td>IVA</td>
        <td>Importe</td>
        <td>Tria</td>
      </tr>
      <tr>
        <td class="ref"><input type='text' name='referència' autofocus></td>
        <td><?php //echo $hola->getNom($_GET['referencia']);?></td>
        <td><input type='text' name='text' value='[vacío]'></td>
        <td><input type='text' name='almacen'></td>
        <td><input type='number' name='quantitat'></td>
        <td><?php //echo $preu;?></td>
        <td><?php //echo $descompte;?></td>
        <td><?php //echo $iva;?></td>
        <td><?php //echo $import;?></td>
        <td><input type="checkbox" name="check"></td>
      </tr>
      <tr>
        <td><button type="button" onclick='addRow()'>Añadir fila</button></td>
        <td><button type="button" onclick='deleteRow()'>Eliminar fila</button></td>
      </tr>
    </table>
    <input type="submit" value="INTRODUEIX LA FACTURA">
    </FORM>-->
    <h1>Stock</h1>
    <table class='customers'>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Stock</th>
        <th>Preu</th>
        <th>Descompte</th>
        <th>IVA</th>
      </tr>
    <?php

    include 'esencial.php';
    include 'classes/producte.php';

    $productes = new Producte();
$productes = $productes->llistar();

foreach ($productes as $individual) {
    echo "<tr>";
    echo "<td>";
    echo $individual['ID'];
    echo "</td>";

    echo "<td>";
    echo $individual['Nom'];
    echo "</td>";

    echo "<td>";
    echo $individual['Stock'];
    echo "</td>";

    echo "<td>";
    echo $individual['Preu'];
    echo "</td>";

    echo "<td>";
    echo $individual['Descompte'];
    echo "</td>";

    echo "<td>";
    echo $individual['IVA'];
    echo "</td>";

    if ($_SESSION['rol'] == 'Editor' or $_SESSION['rol'] == 'Administrador') {
        echo "<td>";
        echo "<a href=''>Elimina el producte</a>";
        echo "</td>";
    }
    echo "</tr>";
}?>
    </table>
    </p>
		</section>
		<footer class="post-footer">
		<figure class="author-image">
		<a class="img" href="../nectaria/author.html" style="background-image: url(../nectaria/assets/img/gravatar.jpg"><span class="hidden">David's Picture</span></a>
		</figure>
		<section class="author">
		<h4><a href="../nectaria/author/ghosty/">David</a></h4>
		<p>
			The blog combining journalist David&#x27;s years of experience covering fashion and culture for among others. Read my blog and you will learn how to become a fashion editor
		</p>
		<div class="author-meta">
			<span class="author-location icon-location">Europe</span>
			<span class="author-link icon-link"><a href="https://www.wowthemes.net">https://www.wowthemes.net</a></span>
		</div>
		</section><br>
		<section class="share">
		<h4>Share this post</h4>
		<a class="icon-twitter" href="https://twitter.com/intent/tweet?text=Once%20Upon%20a%20Time&amp;url=#" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
		<span class="hidden">Twitter</span>
		</a>
		<a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=#" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">
		<span class="hidden">Facebook</span>
		</a>
		<a class="icon-google-plus" href="https://plus.google.com/share?url=#" onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">
		<span class="hidden">Google+</span>
		</a>
    </section>
		</footer>
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
	<p>
		I had accompanied Ashok on several occasions earlier to the glass shop and watched as he ordered glass explaining&hellip;
	</p>
	</section>
	</a>
	<a class="read-next-story prev " style="background-image: url(http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/10/2015/09/10175658/j7-520x780-520x600.jpg)" href="administrar.php">
	<section class="post">
	<h2>Administració de usuaris</h2>
	<p>
		Ashok’s shop is not very large. It is a two-roomed shop on the ground floor of the Gomes&hellip;
	</p>
	</section>
	</a>
	</aside>
	<footer class="site-footer clearfix">
	<a href="#top" id="back-to-top" class="back-top"></a>
	<div class="text-center">
		<a href="index.php">A&sup2;, SL</a> &copy; 2021<br>
		<p>Tel. xxxxxxxxx o yyyyyyyyy| email: amatamalas11837@alumnes.iesmanacot.cat o acuevasdela14713@alumnes.iesmanacor.cat</p>
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
        <a href="magatzem.php" class="closebtn">x</a>
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
      <a href='magatzem.php' class='closebtn'>x</a>
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
        <a href='magatzem.php' class='closebtn'>x</a>
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
