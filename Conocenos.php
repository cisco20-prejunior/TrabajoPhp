<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Colegio PFL</title>
	<link rel="stylesheet" href="estilos/normalize.css" />
	<link rel="stylesheet" href="estilos/conocenos.css" />
	<link rel="stylesheet" href="grid/gridconocenos.css" />
	<script src="https://kit.fontawesome.com/65b1cfe81d.js" crossorigin="anonymous"></script>
</head>

<body>
	<header>
	<?php
		include "partials\header.php";
	?>
		<div class="textos-header">
			<h1>Conoce más sobre nosotros</h1>
		</div>
		<div class="wave" style="height: 150px; overflow: hidden;">
			<svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
				<path d="M0.00,49.98 C180.86,154.44 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
					style="stroke: none; fill: #fff;"></path>
			</svg>
		</div>
	</header>
	<main class="contenedor">
		<section class="contenido historia">
			<h2 class="titulo">Nuestra Historia</h2>
			<img src="imagenes/Historia.jpg" alt="" class="imagen img_historia" />
			<p class="parrafos">
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, quia?
				Dolorum, harum dolorem laborum expedita id nam animi, nobis voluptas
				incidunt accusantium repudiandae natus? Animi natus obcaecati expedita
				architecto delectus officia illo, exercitationem amet et dignissimos,
				quidem dolorem velit ipsam quibusdam nam? Amet deleniti magnam atque?
				Totam perspiciatis repellendus cumque.
			</p>
		</section>
		<section class="contenido director">
			<h2 class="titulo">DIRECTOR</h2>
			<p class="parrafos">
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, quia?
				Dolorum, harum dolorem laborum expedita id nam animi, nobis voluptas
				incidunt accusantium repudiandae natus? Animi natus obcaecati expedita
				architecto delectus officia illo, exercitationem amet et dignissimos,
				quidem dolorem velit ipsam quibusdam nam? Amet deleniti magnam atque?
				Totam perspiciatis repellendus cumque.
			</p>
			<figure class="imagen">
				<img src="imagenes/Director.jpg" alt="" class="imagen img_director" />
				<figcaption>
					<p>Roberto Alfaro Zolano</p>
				</figcaption>
			</figure>
		</section>
		<section class="contenido mision_vision">
			<div class="mision">
				<h2 class="titulo">Misión</h2>
				<p class="mision_p">
					Formar estudiantes con iniciativa, liderazgo y autonomía;
					fortaleciendo su pensamiento reflexivo, analítico, crítico y
					creativo, buscando su crecimiento personal-integral, respetuoso de
					la cultura y del medio ambiente a fin de contribuir al desarrollo de
					la región del país.
				</p>
			</div>
			<div class="vision">
				<h2 class="titulo">Visión</h2>
				<p class="mision_p">
					Ser una institución lider de la región, formando estudiantes de alta
					calidad acorde con los avances sociales, humanísticos y
					tecnológicos.
				</p>
			</div>
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