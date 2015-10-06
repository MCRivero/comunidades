<?php
	session_start();
?>
<!doctype html>
<html>
<head>
	<title>Comunas</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<!-- CSS -->
	<link rel="stylesheet" href="css/styles.css?v=1.0">
	
	<!-- Libreria de jQuery  -->
	<script src="javascripts/jquery-1.9.1.min.js"></script>
	
	<!-- Libreria de jQuery para las animaciones -->
	<script src="javascripts/jquery.cycle.all.js"></script>
</head>

<body>

<div class="contenedor">
<header>
	<div id="logotipo">
		<img class="banner" src="imagenes/banner-siempre-comandante2.jpg" alt=""/>
		<p id="titulo">Ministerio de Ciencia y Tecnología</p>
		<p id="fecha"><script src="javascripts/fecha.js"></script></p>			
	</div>
	<h2 id="comunas">Comunas Industriales Socialistas</h2>
</header>

<div id="main">
	
	<div id="regiones">
		<nav>
			<ul>
				<li><a href="vallesdeltuy.html">Valles del Tuy</a></li>
				<li><a href="guaicaipuro.php">Guaicaipuro</a></li>
				<li><a href="elhatillo.html">El Hatillo</a></li>
			</ul>
		</nav>	
	</div>
	
	<div id="medios">
		<nav>
			<ul id="media">
				<li><a href="video.html">Video</a></li>
				<li><a href="tvweb.html">TV Web</a></li>
				<li><a href="ustream.html">TV en vivo</a></li>
				<li><a href="audio.html">Radio Web</a></li>
				<li class="historia"><a href="#">El pueblo cuenta su historia</a></li>
			</ul>
		</nav> 	
	</div>
	<!-- <img src="imagenes/banderas/IMG_0209.jpg"/>
		<img src="imagenes/banderas/IMG_0307.jpg"/>
		<img src="imagenes/banderas/IMG_0309.jpg"/>
		<img src="imagenes/banderas/IMG_0310.jpg"/>
		<img src="imagenes/banderas/IMG_0311.jpg"/>
		<img src="imagenes/banderas/IMG_0312.jpg"/>
		<img src="imagenes/banderas/IMG_0319.jpg"/>
		<img src="imagenes/banderas/IMG_0320.jpg"/>
		<img src="imagenes/banderas/IMG_0322.jpg"/>
		<img src="imagenes/banderas/IMG_0323.jpg"/>
		<img src="imagenes/banderas/IMG_0327.jpg"/>
	
	-->
	<div id="lado-derecho">
		<img src="imagenes/260px-Salto_angel_descubierto.jpg"/>
		<img src="imagenes/1024px-Canaima.jpg"/>
		<img src="imagenes/sandiego.jpg"/>
		<img src="imagenes/IMG01538-20121124-1143.jpg"/>
		<img src="imagenes/Mt_Roraima_in_Guyana.jpg"/>
		<img src="imagenes/1024px-Salto_Angel.jpg"/>
		<img src="imagenes/Auyan_Tepui_01.jpg"/>
		<img src="imagenes/Canaima_Lagoon_in_Venezuela_001.jpg"/>
		<img src="imagenes/1024px-Canaima.jpg"/>
		<img src="imagenes/banderas/IMG_0323.jpg"/>
		<img src="imagenes/banderas/IMG_0327.jpg"/>
	</div><!-- #lado-derecho -->
	
	<div id="lado-izquierdo">
		<div id="areas">
			<select id="mySelect" size="5">
				<option value="cis">Comunas industriales socialistas</option>
				<option value="pr">Proyectos</option>
				<option value="ti">Tejido industrial</option>
				<option value="ce">Consejos estudiantiles</option>
				<option value="cs">Contraloria social</option>	
			</select>
		</div>
		
		<section id="galeria">
			<img id="photo1" src="imagenes/Chavez el Soñador.jpg"/>
			<img id="photo2" src="imagenes/Chavez y Maduro.jpg"/>
			<img id="photo2" src="imagenes/chavez9.jpg"/>
		</section>
	
		<form id="acceso" method="post" action="rutina_login.php">
			<h4>Acceso a comunas</h4>
			<ul>
				<li class="datos">
					<label for="usuario">Usuario: </label>
					<input type="text" id="usuario" name="usuario" required>
				</li>
				<li class="datos">
					<label for="password">Contraseña: </label>
					<input type="password" id="password" name="password" required>
				</li>
			</ul>
			<input type="submit" id="entrar" value="Entrar"/>
		</form><!-- #acceso -->
		
		<section id="escuela">
			<header>
				<h4>Escuela de formacion permanente</h4>
				<h4>Hugo Chávez Frías</h4>
			</header>
			<a href="escuela.html"><img  src="imagenes/banderas/IMG_0306.jpg" alt="IMG_0306.jpg"></a>
		</section>
	
		<div class="social-media">
		<a href="" class="margen"><img src="logos/facebook.png"/></a>
		<a href=""><img src="logos/twitter.png"/></a>
		<a href=""><img src="logos/rss.png"/></a>	
		<a href=""><img src="logos/youtube.png"/></a>		
		</div>
	</div><!-- #lado-izquierdo -->
	
	<section id="contenido">
		<article class="ley">
			<h4>1. Ley Orgánica de los Consejos Comunales.</h4>
			<p>Tiene por objeto regular la constitución, conformación, organización y funcionamiento de los Consejos Comunales como instancias de participación y de ejercicio directo de la soberanía popular, así como su relación con los órganos y entes del Poder Público para la formulación, ejecución, control y evaluación de las políticas públicas. Fue oficializada en Gaceta Oficial Nº 39.335 del 28 de diciembre de 2009.</p>
			<a href="leyes/ley_organica_de_los_consejos_comunales.pdf"><span class="descargar">Saber mas...</span></a>
		</article>
		<article class="ley">
			<h4>2. Ley Orgánica del Poder Popular.</h4>
			<p>Cumple con el fin de desarrollar y consolidar el Poder Popular, generando condiciones, a través de la participación y organización establecidos en la Constitución Bolivariana, en las leyes y los que surjan de la iniciativa popular, con el objetivo de incentivar a los ciudadanos y ciudadanas a ejercer el pleno derecho a la soberanía, la democracia participativa, protagónica y corresponsable, para el ejercicio directo del poder. Ratificada en Gaceta Oficial 6.011 extraordinaria del 21 de diciembre de 2010.</p>
			<a href="leyes/ley_organica_del_poder_popular.pdf"><span class="descargar">Saber mas...</span></a>
		</article>
		<article class="ley">
			<h4>3. Ley Orgánica de las Comunas.</h4>
			<p>El objetivo que persigue es el de desarrollar y fortalecer el Poder Popular, estableciendo las normas que regulan la constitución, conformación, organización y funcionamiento de la Comuna, donde los ciudadanos y ciudadanas en el ejercicio del Poder Popular, ejercen el pleno derecho de la soberanía. Desarrollando la participación protagónica para la edificación del Estado Comunal y del Estado democrático, social de derecho y de justicia. Gaceta Oficial Extraordinaria Número 6.011 del 21 de diciembre de 2010.</p>
			<a href="leyes/ley_organica_de_las_comunas.pdf"><span class="descargar">Saber mas...</span></a>
		</article>
		<article class="ley">
			<h4>4. Ley Orgánica del Sistema Económico Comunal.</h4>
			<p>Con esta Ley, publicada en Gaceta Oficial Nº 6.011, Extraordinario, 21 de diciembre de 2010 se persigue desarrollar y fortalecer el Poder Popular, estableciendo las normas, principios y procedimientos para la creación, funcionamiento y desarrollo del Sistema Económico Comunal, integrado por organizaciones socioproductivas bajo régimen de Propiedad Social Comunal, para la producción, distribución, intercambio y consumo de bienes y servicios, así como de saberes y conocimientos.</p>
			<a href="leyes/sistema_economico_comunal.pdf"><span class="descargar">Saber mas...</span></a>
		</article>
		<article class="ley">
			<h4>5. Ley Orgánica de la Contraloría Social.</h4>
			<p>Promulgada el 21 de diciembre de 2010, a través de la Gaceta Oficial extraordinaria N° 6.011, tiene como fin fortalecer el Poder Popular, mediante las normas para la promoción, desarrollo y consolidación de la contraloría social como medio de participación y de corresponsabilidad de los ciudadanos, las ciudadanas de la función de prevención, vigilancia, supervisión y control de la gestión pública y comunitaria, como de las actividades del sector privado que incidan en los intereses populares.</p>
			<a href="leyes/ley_organica_de_contraloria_social.pdf"><span class="descargar">Saber mas...</span></a>
		</article>
		<article class="ley">
			<h4>6. Ley Orgánica del Consejo Federal de Gobierno.</h4>
			<p>Regula la organización y funcionamiento del Consejo Federal de Gobierno, el cual es el encargado de la planificación y coordinación de políticas y acciones para el desarrollo del proceso de descentralización y transferencia de competencias del Poder Nacional a los estados y municipios. En consecuencia, establece los lineamientos para la transferencia de las competencias hacia las organizaciones del Poder Popular. Oficializada el 22 de febrero de 2010 en Gaceta Oficial Extraordinaria No. 5.963.</p>
			<a href="leyes/Ley Orgánica del Consejo Federal de Gobierno.pdf"><span class="descargar">Saber mas...</span></a>
		</article>
		<article class="ley">
			<h4>7. Ley Orgánica de la Planificación Pública y Popular.</h4>
			<p>Esta ley, cuya publicación fue hecha efectiva en Gaceta Oficial Extraordinaria Nº 6.011 del 21 de diciembre de 2010, tiene por objeto desarrollar y fortalecer el Poder Popular mediante el establecimiento de los principios y normas que sobre la planificación rigen a las ramas del Poder Público y las instancias del Poder Popular, así como la organización y funcionamiento de los órganos encargados de la planificación y coordinación de las políticas públicas.</p>
			<a href="leyes/planificacion_publica_y_popular.pdf"><span class="descargar">Saber mas...</span></a>
		</article>
		<article class="ley">
			<h4>8. Ley Orgánica para la Gestión Comunitaria.</h4>
			<p>Tiene como meta desarrollar los procedimientos y mecanismos de transferencia de administración de servicios, actividades, bienes y recursos al pueblo organizado, a fin de gestionar las Empresas Comunales de Propiedad Social de servicios y socioproductivas, o de las organizaciones de base del Poder Popular para la prestación y gestión eficaz, eficiente, sustentable y sostenible de los bienes, servicios y recursos destinados a satisfacer las necesidades colectivas. Gaceta Oficial Extraordinario Nº 6.079 del 15 de junio de 2012</p>
			<a href="leyes/ley-gestion-comunitaria.pdf"><span class="descargar">Saber mas...</span></a>
		</article>
	</section><!-- #contenido -->
		
	<div id="footer"></div>
	</div> <!-- div id="main" -->
	
</div> 
	<!-- Libreria modernizr-1.7.min.js necesaria para el mnejo de gradientes -->
	<script src="javascripts/modernizr-1.7.min.js"></script>
	
	<!-- youmax.js necesario para el manejo de la TV -->
	<script src="javascripts/youmax.js"></script>
	

		
	<script src="javascripts/comunas.js"></script>

</body>
</html>