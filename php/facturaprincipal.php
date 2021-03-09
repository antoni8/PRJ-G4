<?php
include "perfil.php";
?>
<!DOCTYPE html>
<html>
<head>
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
		<li class="nav-article-example" role="presentation"><a href="facturaprincipal.php">Factura</a></li>
		<li class="nav-about-us" role="presentation"><a href="magatzem.php">Almacén</a></li>
		<li class="nav-author-page" role="presentation"><a href="#perfil">Perfil</a></li>
		<span class="socialheader">
		<a href="#"><span class='symbol'>circletwitterbird</span></a>
		<a href="#"><span class='symbol'>circlefacebook</span></a>
		<a href="#"><span class='symbol'>circlegoogleplus</span></a>
		<a href="mailto://amatamalas11837@gmail.com"><span class="symbol">circleemail</span></a>
		<a href="#login" style="width:25px;"><span class="symbol"><img src="../fotos/perfil.png" style="width:25px;"></span></a>
		</span>
	</ul>
	</nav>
      	<header class="main-header" <!--style="background-image: url(fotos/logo.png)"-->>
      	<div class="vertical">
                <div class="main-header-content inner">
                        <h1 class="post-title">Once Upon a Time</h1>
                        <div class="entry-title-divider">
                                <span></span><span></span><span></span>
                        </div>
                        <section class="post-meta">
                        <time class="post-date" datetime="2015-12-13">13 December 2016</time>
                        </section>
                </div>
        </div>
        </header>
        <main id="content" class="content" role="main">
        <div class="wraps">
        <H2>ALBARÀ</H2>
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
        <!--<td>Tria</td>-->
      </tr>
      <tr>
        <td class="ref"><input type='text' name='referència' autofocus></td>
        <td><?php echo $nom;?></td>
        <td><input type='text' name='text' value='[vacío]'></td>
        <td><input type='text' name='almacen'></td>
        <td><input type='number' name='quantitat'></td>
        <td><?php echo $preu;?></td>
        <td><?php echo $descompte;?></td>
        <td><?php echo $iva;?></td>
        <td><?php echo $import;?></td>
        <!--<td><input type="checkbox" name="check"></td>-->
      </tr>
      <tr>
        <td><button type="button" onclick='addRow()'>Añadir fila</button></td>
        <td><button type="button" onclick='deleteRow()'>Eliminar fila</button></td>
      </tr>
    </table>
    <input type="submit">
    </FORM>
        </div>
        </main>
        <div class="clearfix">
        </div>
        <aside class="read-next">
        <a class="read-next-story " style="background-image: url(http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/10/2015/09/10175658/j6-520x779-520x600.jpg)" href="facturaprincipal.php">
        <section class="post">
        <h2>The first journey in my life</h2>
        <p>
                I had accompanied Ashok on several occasions earlier to the glass shop and w>
        </p>
        </section>
        </a>
        <a class="read-next-story prev " style="background-image: url(http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/10/2015/09/10175658/j7-520x780-520x600.jpg)" href="facturaprincipal.php">
        <section class="post">
        <h2>Few days at his shop</h2>
        <p>
                Ashok’s shop is not very large. It is a two-roomed shop on the ground floor >
        </p>
        </section>
        </a>
        </aside>
        <footer class="site-footer clearfix">
	<a href="#top" id="back-to-top" class="back-top"></a>
	<div class="text-center">
		<a href="../index.php">A&sup2;, SL</a> &copy; 2021<br>
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
        <a href="facturaprincipal.php" class="closebtn">x</a>
        <h2>REGISTRA'T</h2>
      </header>
      <div class="container">
        <form action="../php/registrar.php" method="get">
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
      <a href='facturaprincipal.php' class='closebtn'>x</a>
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
        <a href='facturaprincipal.php' class='closebtn'>x</a>
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
