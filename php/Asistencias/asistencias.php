<?php
session_start();
if(isset($_SESSION['usuario']))
{
$encabezado='
			<thead>
				<tr>
					<th>Alumnos</th>
					<th>Nota</th>
					<th>Nota</th>
					<th>Nota</th>
					<th>Nota</th>
					<th>Final</th>
					<th>Promedio</th>
					<th>Estado</th>
					<th>Acciones</th>
				</tr>
			</thead>';
			
$detalle='			
		<tbody>
			<tr>
				<th>asd</th>
				<th>asd</th>
				<th>asd</th>
				<th>asd</th>
				<th>asd</th>
				<th>asd</th>
				<th>asd</th>
				<th>asd</th>
				<th><img src="images/File-edit-icon.png" width="25" height="19" onClick="modificarRow();">
				<img src="images/ico-trash 2.png" width="25" height="19" onClick="eliminarRow();">
				</th>
			</tr>
			<tr>
				<th>asd</th>
				<th>asd</th>
				<th>asd</th>
				<th>asd</th>
				<th>asd</th>
				<th>asd</th>
				<th>asd</th>
				<th>asd</th>
				<th><img src="images/File-edit-icon.png" width="25" height="19" onClick="modificarRow();">
				<img src="images/ico-trash 2.png" width="25" height="19" onClick="eliminarRow();">
				</th>
			</tr>
		</tbody>';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../../css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="../../css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="../../css/style.css" type="text/css" media="all">
		<link rel="stylesheet" href="../../css/tablas.css" type="text/css" media="all">
		<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
		<![endif]-->
		<!--[if lt IE 7]>
			<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
		</div>
		<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body,td,th {
	color: #000000;
}
body {
	background-color: #FFFFFF;
}
-->
</style></head>
	<body id="page1">
		<div class="main">
		<!--header -->
			<header class="header-index">
				<div class="wrapper">
					<h1><a href="../../index.php" id="logo">logo</a></h1>
					<form id="status" method="post">
						<fieldset>
							<div id="estadoSession">
							<p>Bienvenido: <?php echo $_SESSION['usuario']; ?></p>
							<a style="" href="../../logout.php">Cerrar Session</a></p>
							</div>
						</fieldset>
					</form>
				</div>
				<nav>
					<ul id="menu">
						<li><a href="../../index.php"><span>Inicio</span></a></li>
						<li class="active"><a href="asistencias.php"><span>Asistencias</span></a></li>
						<li><a href="../LibroDeTemas/librodetemas.php"><span>Libro de temas</span></a></li>
						<li><a href="../Evaluaciones/evaluaciones.php"><span>Evaluaciones</span></a></li>
						<li class="last"><a href="../../contacto.php"><span>Contacto</span></a></li>
					</ul>
				</nav>
			</header>
		</div>
		<div class="content">	
		<table class="tablaEvaluaciones">
			<?php echo $encabezado?>
			<?php echo $detalle?>
		</table>
		<br>
		<br>				
		</div>
		<div class="main">
		  <footer>
			<ul id="icons">
				<li class="first">Seginos en:</li>
				<li><a href="https://www.facebook.com/pages/ISFT-N%C2%BA-179-Dr-Carlos-Pellegrini/272044409620642" target="_blank" class="normaltip" title="Facebook"><img src="../../images/icon1.jpg" alt=""></a></li>
				<li><a href="#" class="normaltip" title="Twitter"><img src="../../images/icon2.jpg" alt=""></a></li>
				<li><a href="#" class="normaltip" title="Picasa"><img src="../../images/icon3.jpg" alt=""></a></li>
				<li><a href="#" class="normaltip" title="YouTube"><img src="../../images/icon4.jpg" alt=""></a></li>
			</ul>
			<p>Copyright © 2016 I.S.F.T. Nº 179 Dr. Carlos Pellegrini<br>
		    All Rights Reserved</p>
		</footer>
		</div>
	</body>
</html>
<?php
}
else
{
	header('Location : login.php');
	echo '<script>location.href="../../login.php";</script>';
}
?>