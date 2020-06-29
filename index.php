<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Colegio PFL</title>
		<link rel="stylesheet" href="estilos/normalize.css" />
		<link
			rel="stylesheet"
			href="estilos/estilosindex.css"
			type="text/css"
			media="all"
		/>
		<link rel="stylesheet" href="grid/gridindex.css" />
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
				<h1>Franco Peruano</h1>
				<h2>"Nacimos para ser grande"</h2>
			</div>
			<div class="wave" style="height: 30%; overflow: hidden;">
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
		<main>
			<section class="contenedor sobre-nosotros">
				<h2 class="titulo">Nuestro colegio</h2>
				<div class="contenedor-sobre-nosotros">
					<img
						src="imagenes/tres amigos.jpg"
						whith="300"
						height="300"
						alt=""
						class="imagen-about-us"
					/>
					<div class="contenido-textos">
						<h3><span>1</span>Visión</h3>
						<p>
							Ser una institución lider de la región, formando estudiantes de
							alta calidad acorde con los avances sociales, humanísticos y
							tecnológicos.
						</p>
						<h3><span>2</span>Misión</h3>
						<p>
							Formar estudiantes con iniciativa, liderazgo y autonomía;
							fortaleciendo su pensamiento reflexivo, analítico, crítico y
							creativo, buscando su crecimiento personal-integral, respetuoso de
							la cultura y del medio ambiente a fin de contribuir al desarrollo
							de la región del país.
						</p>
					</div>
				</div>
			</section>
			<section class="portafolio">
				<div class="contenedor">
					<h2 class="titulo">Infraestructura</h2>
					<div class="galeria-port">
						<div class="imagen-port">
							<img src="imagenes/imag1.jpg" alt="" />
							<div class="hover-galeria">
								<img src="imagenes/icono2.png" width="50" height+="50" alt="" />
								<p>Ofrecemos</p>
							</div>
						</div>
						<div class="imagen-port">
							<img src="imagenes/imag2.jpg" alt="" />
							<div class="hover-galeria">
								<img src="imagenes/icono2.png" width="50" height+="50" alt="" />
								<p>Ofrecemos</p>
							</div>
						</div>
						<div class="imagen-port">
							<img src="imagenes/imag3.jpg" alt="" />
							<div class="hover-galeria">
								<img src="imagenes/icono2.png" width="50" height+="50" alt="" />
								<p>Ofrecemos</p>
							</div>
						</div>
						<div class="imagen-port">
							<img src="imagenes/imag4.jpg" alt="" />
							<div class="hover-galeria">
								<img src="imagenes/icono2.png" width="50" height+="50" alt="" />
								<p>Ofrecemos</p>
							</div>
						</div>
						<div class="imagen-port">
							<img src="imagenes/imag5.jpg" alt="" />
							<div class="hover-galeria">
								<img src="imagenes/icono2.png" width="50" height+="50" alt="" />
								<p>Ofrecemos</p>
							</div>
						</div>
						<div class="imagen-port">
							<img src="imagenes/imag6.jpg" alt="" />
							<div class="hover-galeria">
								<img src="imagenes/icono2.png" width="50" height+="50" alt="" />
								<p>Ofrecemos</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="contenedor">
				<h2 class="titulo">Que dicen los padres</h2>
				<div class="cards">
					<div class="card">
						<img src="imagenes/face1.jpg" alt="" />
						<div class="contenido-texto-card">
							<h4>Name</h4>
							<p>
								Es todo lo que podría pedir para poder educar a mi hijo. Los
								profesores están muy bien capacitados y las enseñanzas brindadas
								puedes verce a penas mi hijo llega a casa.
							</p>
						</div>
					</div>
					<div class="card">
						<img src="imagenes/face2.jpg" alt="" />
						<div class="contenido-texto-card">
							<h4>Name</h4>
							<p>
								No todo es perfecto, pero puedo decir que es la educación más
								completa que he visto, enseñan cosas académicas y también
								refuerzan los valores que nosotros les mostramos.
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="about-services">
				<div class="contenedor">
					<h2 class="titulo">Nuestros servicios</h2>
					<div class="servicio-cont">
						<div class="servicio-ind">
							<img src="imagenes/ilustracion1.jpg" alt="" />
							<h3>Los Mejores Profesores</h3>
							<p>
								Tenemos a la mejor plana docente para cada uno de nuestros tres
								xniveles de enseñanza.
							</p>
						</div>
						<div class="servicio-ind">
							<img
								src="imagenes\Diferencias-entre-el-psicólogo-y-el-trabajador-social.jpg"
								alt=""
							/>
							<h3>Psicologia</h3>
							<p>
								Contamos con atención psicológica que puede ser pedida por los
								padres o por el mismo alumno, porque sabemos que una buena salud
								psicológica es la base de todo conocimiento.
							</p>
						</div>
						<div class="servicio-ind">
							<img src="imagenes\basquet.jpg" alt="" />
							<h3>Talleres</h3>
							<p>
								Tenemos distintos talleres en las tardes para el nivel
								secundario y primario, abarcando los deportes principales y
								preparandolos para representar a la escuela en campeonatos de
								Fútbol, Básquet y Volley.
							</p>
						</div>
					</div>
				</div>
			</section>
		</main>
	<?php 
		include "partials//footer.php";
	?>
	</body>
</html>
