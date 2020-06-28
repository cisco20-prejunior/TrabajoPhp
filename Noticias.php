<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Colegio PFL</title>
		<link rel="stylesheet" href="estilos/normalize.css" />
		<link rel="stylesheet" href="grid/gridnoticias.css" />
		<link rel="stylesheet" href="estilos/noticias.css" />
		<script
			src="https://kit.fontawesome.com/65b1cfe81d.js"
			crossorigin="anonymous"
		></script>
	</head>

	<body>
		<header>
		<?php
			include "partials\header.php";
		?>
			<div class="textos-header">
				<h1>Nuestras Noticias</h1>
			</div>
			<div class="wave" style="height: 150px; overflow: hidden;">
				<svg
					viewBox="0 0 500 150"
					preserveAspectRatio="none"
					style="height: 100%; width: 100%;"
				>
					<path
						d="M0.00,49.98 C180.86,154.44 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
						style="stroke: none; fill: #fff;"
					></path>
				</svg>
			</div>
		</header>
		<main class="not_fran">
			<section class="not_ind not1">
				<h3>Comunicado</h3>
				<img src="imagenes/comunicado covid19.jpg" alt="" />
				<p>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam,
					dolorem?
				</p>
			</section>
			<section class="not_ind not2 not_par">
				<h3>Comunicado</h3>
				<img src="imagenes/comunicado covid19.jpg" alt="" />
				<p>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam,
					dolorem?
				</p>
			</section>
			<section class="not_ind not3">
				<h3>Comunicado</h3>
				<img src="imagenes/comunicado covid19.jpg" alt="" />
				<p>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam,
					dolorem?
				</p>
			</section>
		</main>
		<footer>
			<div class="contenedor-footer">
				<div class="content-foo">
					<h4>Telefono</h4>
					<p>975489558</p>
				</div>
				<div class="content-foo">
					<h4>Email</h4>
					<p>PFL school</p>
				</div>
				<div class="content-foo">
					<h4>Ubicacion</h4>
					<p>La Cecilia 243</p>
				</div>
			</div>
			<h2 class="titulo-final">&copy; Colegio PFL | PaFraLu</h2>
		</footer>
	</body>
</html>
