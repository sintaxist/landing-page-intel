<?php
// session_start();
// if ( isset($_SESSION['correousuario']) ){
// 	//echo "Bienvenido ".$_SESSION['correousuario'];
// } else{
// 	header("location: login.php");
// }
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>INTEL</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css" />
</head>
<body>
<header>
	<img src="img-intel/logo-intel.svg" class="logo-top">
	<nav>
		<ul>
			<li><a href="#portada" id="portada-link" class="active">Inicio</a></li>
			<li><a href="#registro" id="registro-link" class="">Registro</a></li>
			<li><a href="#description" id="description-link" class="">Descripción</a></li>
			<!-- <li><a href="memoria.html" class="">Memorias</a></li> -->
			<li><a href="#sede" id="sede-link" class="">Sede</a></li>
			<li><a href="#agenda" id="agenda-link" class="">Agenda</a></li>
			<li class="dropdown"><a href="#actividades" id="actividades-link" class="">Actividades</a>
				<ul class="drodown-menu">
					<li><a href="#actividades1" id="actividades1-link" class="">Lunch langostas</a></li>
					<li><a href="#actividades2" id="actividades2-link" class="">Cocktail Bienvenida</a></li>
					<li><a href="#actividades3" id="actividades3-link" class="">Cena de Bienvenida</a></li>
					<li><a href="#actividades4" id="actividades4-link" class="">Arma tu propio vino</a></li>
					<li><a href="#actividades5" id="actividades5-link" class="">Tour</a></li>
					<li><a href="#actividades6" id="actividades6-link" class="">Fauna</a></li>
					<li><a href="#actividades7" id="actividades7-link" class="">Desayuno</a></li>
				</ul>
			</li>
			<li><a href="#recomendaciones" id="recomendaciones-link" class="">Recomendaciones</a></li>
			<li><a href="#contacto" id="contacto-link" class="">Contacto</a></li>
			<li><a href="destroy.php" id="cerrar-link">Cerrar sesión</a></li>
		</ul>
	</nav>

	<a id="hamburguer_menu" data="hamburguer_menu" href="javascript:void(0);">
		<b></b>
		<b></b>
		<b></b>
	</a>

	<ul id="menu-mobile">
		<li><a href="#portada" class="">Inicio</a></li>
		<li><a href="#registro" id="registro-link" class="">Registro</a></li>
		<li><a href="#description" id="description-link" class="">Descripción</a></li>
		<!-- <li><a href="memoria.html" class="">Memorias</a></li> -->
		<li><a href="#sede" class="">Sede</a></li>
		<li><a href="#agenda" class="">Agenda</a></li>
		<li><a href="#actividades" class="">Actividades</a></li>
		<li><a href="#recomendaciones" class="">Recomendaciones</a></li>
		<li><a href="#contacto" class="">Contacto</a></li>
		<li><a href="destroy.php" class="cerrar-link">Cerrar Sesión</a></li>
	</ul>
</header>

<section id="portada">
    <div class="logo-blue logo-square">
		<img src="img-intel/logo-intel-blue.svg" alt="">
	</div>
	<div class='text-banner'>
		<div class="border b-1"></div>
		<div class="border b-2"></div>
		<div class="border b-3"></div>
		<div class="border b-4"></div>
		<h1>Bienvenido a esta experiencia inolvidable donde hablaremos de lo último en tecnología con Intel; juntos como los mejores aliados estratégicos. </h1>
		<h2>Los reencuentros se acompañan de exquisita comida, deliciosos vinos y paisajes sin igual. </h2>
	</div>
	
</section>

<section class="seccion" id="registro">
	
	<div class="content_blanco">
		<div class="liston-registro">
			<h2>REGISTRO</h2>
			<h4>INFORMACIÓN INVITADO</h4>
		</div>
		<div class="forma_container">
			<iframe src="https://services.cognitoforms.com/f/RUtcN78-V0Kk3mfa4lp65Q?id=1" frameborder="0" scrolling="no" seamless="seamless" height="670" width="100%" id="iframe-form"></iframe>
			
			
			
			<form method="post" action="registro.php">
				<div class="datos-2row">
					<ul>
						<li>
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre">
						</li>
						<li>
							<label for="apellidos">Apellidos</label>
							<input type="text" name="apellidos">
						</li>
						<li>
							<label for="correo">Correo</label>
							<input type="text" name="correo">
						</li>
						<li>
							<label for="telefono">Teléfono</label>
							<input type="text" name="telefono">
						</li>
					</ul>
				</div>
				<div class="datos-1-2row">
					<h5>Género</h5>
					<label for="genero">Masculino</label>
					<input type="radio" name="genero" value="masculino">
					<label for="genero">Femenino</label>
					<input type="radio" name="genero" value="femenino">
				</div>
				<div class="datos-1-2row">
					<h5>Talla</h5>
					<label for="talla">XS</label>
					<input type="radio" name="talla" value="xs">
					<label for="talla">S</label>
					<input type="radio" name="talla" value="s">
					<label for="talla">M</label>
					<input type="radio" name="talla" value="m">
					<label for="talla">L</label>
					<input type="radio" name="talla" value="l">
					<label for="talla">XL</label>
					<input type="radio" name="talla" value="l">
					<label for="talla">XXl</label>
					<input type="radio" name="talla" value="xxl">
					<label for="talla">XXXL</label>
					<input type="radio" name="talla" value="xxxl">
				</div>
				<div class="datos-1row">
					<h5>Alergias</h5>
					<label for="alergias">No</label>
					<input type="radio" name="alergias" value="no">
					<label for="alergias">Si</label>
					<input type="radio" name="alergias" value="si">
					<label>Especifique</label>
					<input type="text" name="alergias-desc" class="alergias-txt">
				</div>
				
				<input type="submit" class="envio-btn filo-dorado" value="ENVIAR">
			</form>
		</div>
	</div>
</section>

<section id='description'>
	<div class='info-container'>
		<div class='img-content'>
			<div class='line'></div>
			<img src="img-intel/logo-intel-white.svg" alt="">
		</div>
		<p>
			<strong>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus
			</strong>
		</p>
		<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.</p>
		<p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>
	</div>
</section>

<div class='divider-container'>
	<span class="divider">
		<strong>Intel Rec</strong> · ENSENADA · VALLE DE GUADALUPE
	</span>
</div>
	
<section id="sede">
	
	<div class="border-container">
		<div class='sede-container'>
			<h2>Nuestra sede</h2>
			<img src="img-intel/logo-elcielo.png" alt="">
			<article>
				<p>Es una nueva línea de hoteles dentro de la categoría boutique, enclavado en Valle de Guadalupe, Baja California en el corazón de la ruta del Vino, cuenta con dos hermosos lagos, rodeado de viñedos, montañas en armonía con el paisaje y la naturaleza, se caracteriza por romper el concepto tradicional de la hotelería en la zona.</p>
				<p>Un concepto innovador y exclusivo que permitirá disfrutar al máximo el placer de estar acompañado de excelentes vinos, gastronomía,  descanso y confort con un servicio impecable que trasciende.</p>
				<p>Es una estancia que supera las expectativas del visitante por su arquitectura de lujo y  buen gusto, aquí crearán sus propias experiencias gracias a cada detalle que el mismo entorno le proporciona, tejiendo sus propias historias.</p>
				<p>Las suites constan de espacios cautivadores, armónicos confortables y con una decoración en tonos cálidos.</p>
				<p>El Cielo Winery & Resort es calidez y lujo, un estilo que se funde con la naturaleza.</p>
			</article>
		</div>
	</div>

	<div class="logo-blue logo-square">
		<img src="img-intel/logo-intel-blue.svg" alt="">
	</div>
	
</section>
	
<section id="galeria">
	<div class="swiper-container">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<!-- Slides -->
			<div class="swiper-slide" style="background: url(img-intel/hotel-2.jpg); background-position: center; background-size: cover;">
				<img class='img-carousel' src="img-intel/logo-elcielo.png" alt="">
				<div class="logo-blue logo-square square-2">
					<img src="img-intel/logo-intel-blue.svg" alt="">
				</div>
			</div>
			<div class="swiper-slide" style="background: url(img-intel/hotel.jpg); background-position: center; background-size: cover;">
				<img class='img-carousel' src="img-intel/logo-elcielo.png" alt="">
				<div class="logo-blue logo-square square-2">
					<img src="img-intel/logo-intel-blue.svg" alt="">
				</div>
			</div>
			<div class="swiper-slide" style="background: url(img-intel/villa.jpg); background-position: center; background-size: cover;">
				<img class='img-carousel' src="img-intel/logo-elcielo.png" alt="">
				<div class="logo-blue logo-square square-2">
					<img src="img-intel/logo-intel-blue.svg" alt="">
				</div>
			</div>
			<div class="swiper-slide" style="background: url(img-intel/barriles.jpg); background-position: center; background-size: cover;">
				<img class='img-carousel' src="img-intel/logo-elcielo.png" alt="">
				<div class="logo-blue logo-square square-2">
					<img src="img-intel/logo-intel-blue.svg" alt="">
				</div>
			</div>
		</div>
		<!-- If we need pagination -->
		<div class="swiper-pagination"></div>

		<!-- If we need navigation buttons 
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>-->

		<!-- If we need scrollbar -->
		<div class="swiper-scrollbar"></div>
	</div>
</section>
	
<section id="agenda">

	<div class="logo-blue logo-square square-2">
		<img src="img-intel/logo-intel-blue.svg" alt="">
	</div>
	
	<h2>Agenda</h2>
	<div class='horarios'>
		<div class='dia'>
			<h3>
				miércoles ·
				<strong>junio 1</strong>
			</h3>
			<ul class='horario'>
				<li>
					<p>09:20-11:00 hrs.</p>
					<p>Vuelo de CDMX a Tijuana.</p>
				</li>
				<li>
					<p>11:00-12:30 hrs.</p>
					<p>Llegada a Tijuana y traslado a Puerto Nuevo.</p>
				</li>
				<li>
					<p>12:30-14:00 hrs.</p>
					<p>Desayuno en restaurante Villa Ortega's en Puerto Nuevo.</p>
				</li>
				<li>
					<p>14:00-15:00 hrs.</p>
					<p>Traslado a Cuatro Cuatros.</p>
				</li>
				<li>
					<p>15:00-17:00 hrs.</p>
					<p>Cocktail de Bienvenida y vista al atardecer en Bar Bura.</p>
				</li>
				<li>
					<p>17:00-18:00 hrs.</p>
					<p>Traslado a Hotel “El Cielo”.</p>
				</li>
				<li>
					<p>18:00-19:00 hrs.</p>
					<p>Check-in y tiempo libre.</p>
				</li>
				<li>
					<p>19:00-19:30 hrs.</p>
					<p>Traslado a Bakuss.</p>
				</li>
				<li>
					<p>19:00-22:00 hrs.</p>
					<p>Cena de Bienvenida en Bakuss.</p>
				</li>
				<li>
					<p></p>
					<p>Fin del día.</p>
				</li>
			</ul>
		</div>
		<div class='dia'>
			<h3>
				jueves ·
				<strong>junio 2</strong>
			</h3>
			<ul class='horario'>
				<li>
					<p>07:00-9:00 hrs.</p>
					<p>Desayuno.</p>
				</li>
				<li>
					<p>9:00-10:00 hrs.</p>
					<p>Plática Leo Zuckermann</p>
				</li>
				<li>
					<p>10:00-10:30 hrs.</p>
					<p>Greg Ernst & Santiago Cardona.</p>
				</li>
				<li>
					<p>10:30-11:00 hrs.</p>
					<p>Simon Riurka & Héctor Barillas.</p>
				</li>
				<li>
					<p>11:00-11:30 hrs.</p>
					<p>Carolyn Henry & Vanessa García.</p>
				</li>
				<li>
					<p>11:30-12:00 hrs.</p>
					<p>German Loureiro.</p>
				</li>
				<li>
					<p>12:00-12:45 hrs.</p>
					<p>Working Lunch.</p>
				</li>
				<li>
					<p>12:45-13:00 hrs.</p>
					<p>Coffee Break.</p>
				</li>
				<li>
					<p>13:00-16:00 hrs.</p>
					<p>Pláticas.</p>
				</li>
				<li>
					<p>16:00-16:30 hrs.</p>
					<p>Traslado a Concierto Enológico.</p>
				</li>
				<li>
					<p>16:30-17:30 hrs.</p>
					<p>Dinámica "Arma tu propio vino".</p>
				</li>
				<li>
					<p>17:30-18:30 hrs.</p>
					<p>Convivencia.</p>
				</li>
				<li>
					<p>18:30-19:00 hrs.</p>
					<p>Traslado a Bruma.</p>
				</li>
				<li>
					<p>19:00 hrs.</p>
					<p>Cena de Clausura en Fauna.</p>
				</li>
			</ul>
		</div>
		<div class='dia'>
			<h3>
				viernes ·
				<strong>junio 3</strong>
			</h3>
			<ul class='horario'>
				<li>
					<p>09:00-11:00 hrs.</p>
					<p>Desayuno en Doña Esthela.</p>
				</li>
				<li>
					<p>11:00 hrs.</p>
					<p>Traslado a Aeropuerto.</p>
				</li>
				<li>
					<p>15:54-21:20 hrs.</p>
					<p>Vuelo AM 177 Tijuana- CDMX</p>
				</li>
			</ul>
		</div>
	</div>
</section>

<div class='divider-logo'>
	<img src="img-intel/logo-intel-blue.svg" alt="">
</div>

<section id="actividades">
	
	<section id="actividades1" class="actividades">
		<div class="logo-blue logo-square square-blue square-2">
			<img src="img-intel/logo-intel.svg" alt="">
		</div>
		<div class='article-container'>
			<article class="actividad-desc">
				<h3>DESAYUNO EN LAS LANGOSTAS</h3>
				<h4>Restaurant Villa Ortega's</h4>
				<h5>1 DE JUNIO · 12:30 hrs.</h5>
				<p>Villa Ortega's en Puerto Nuevo, Baja California es un lugar privilegiado para disfrutar de una buena langosta con tortillas de harina gigantes, pero con mucho sabor.</p>
			</article>
		</div>
	</section>

	<section id="actividades2" class="actividades">
		<div class="logo-blue logo-square square-blue square-2">
			<img src="img-intel/logo-intel.svg" alt="">
		</div>
		<div class='article-container'>
			<article class="actividad-desc">
				<h3> EXPERIENCIA: COCKTAIL DE BIENVENIDA Y VISTA EMBLEMÁTICA AL ATARDECER</h3>
				<h4>Cuatro Cuatros</h4>
				<h5>1 DE JUNIO · 15:00 HRS</h5>
				<p>Cuatro Cuatros es un mirador que se encuentra a 15 minutos al norte del puerto de Ensenada. Venir aquí es adentrarse a la cultura del vino, dejarte envolver en la tranquilidad que provoca sentirse en las alturas y por supuesto disfrutar de la magnífica vista.</p>
			</article>
		</div>
	</section>

	<section id="actividades3" class="actividades">
		<div class="logo-blue logo-square square-blue square-2">
			<img src="img-intel/logo-intel.svg" alt="">
		</div>
		<div class='article-container'>
			<article class="actividad-desc">
				<h3>CENA</h3>
				<h4>Bakuss Oyster Bar</h4>
				<h5>1 DE JUNIO · 19:00 hrs.</h5>
				<p>En el corazón del Valle de Guadalupe, en la carretera entre el Camino Al Tigre KM 4 Camino Vecinal y San Antonio De Las Minas El Sauzal, llega Bakuss donde podrás disfrutar de la comida tradicional de La Baja combinada con técnicas mundiales, acompañado de la mejor selección de vinos y una excepcional terraza,, sin duda, este nuevo lugar nos regala una experiencia completa del Valle en solo sitio.</p>
			</article>
		</div>
	</section>

	<section id="actividades4" class="actividades">
		<div class="logo-blue logo-square square-blue square-2">
			<img src="img-intel/logo-intel.svg" alt="">
		</div>
		<div class='article-container'>
			<article class="actividad-desc">
				<h3>EXPERIENCIA: ARMA TU PROPIO VINO & CONVIVIO</h3>
				<h4>Concierto Enológico</h4>
				<h5>2 DE JUNIO · 17:00 HRS.</h5>
				<p>Vive la experiencia de elaborar tu propio vino en una de las vinícolas más emblemáticas de Valle de Guadalupe: Concierto Enológico.</p>
				<p>Aprenderemos cuáles son los estándares de calidad que son necesarios para degustar de un buen vino</p>
				<p>Al finalizar tendremos un convivio en las instalaciones del recinto.</p>
			</article>
		</div>
	</section>

	<section id="actividades5" class="actividades">
		<div class="logo-blue logo-square square-blue square-2">
			<img src="img-intel/logo-intel.svg" alt="">
		</div>
		<div class='article-container'>
			<article class="actividad-desc">
				<h3>EXPERIENCIA:</h3>
				<h4>TOUR BRUMA</h4>
				<h5>2 DE JUNIO · 19:30 HRS.</h5>
				<p>Para reencontrarse hay que volver al origen, restablecer nuestra armonía con la naturaleza, conectar con nuestro entorno y encender el instinto de aventura.</p>
				<p>BRUMA ofrece la posibilidad de volver a reconectarse con la naturaleza.</p>
			</article>
		</div>
	</section>

	<section id="actividades6" class="actividades">
		<div class="logo-blue logo-square square-blue square-2">
			<img src="img-intel/logo-intel.svg" alt="">
		</div>
		<div class='article-container'>
			<article class="actividad-desc">
				<h3>EXPERIENCIA:</h3>
				<h4>Fauna</h4>
				<h5>2 DE JUNIO · 20:00 HRS.</h5>
				<p>Justo en su cocina vemos la originalidad y la creatividad del lugar. Detrás de este “menú experimental” la sólida propuesta del restaurante se encuentra la creatividad de un equipo de trabajo al mando del joven chef David Castro Hussong, quien a su corta edad de 27 años ha sumado una gran experiencia que se ve reflejada en el menú.</p>
			</article>
		</div>
	</section>

	<section id="actividades7" class="actividades">
		<div class="logo-blue logo-square square-blue square-2">
			<img src="img-intel/logo-intel.svg" alt="">
		</div>
		<div class='article-container'>
			<article class="actividad-desc">
				<h3>DESAYUNO:</h3>
				<h4>Doña Esthela</h4>
				<h5>3 DE JUNIO · 09:30HRS.</h5>
				<p>Por la carretera del tigre a Guadalupe hay un restaurante que puede pasar inadvertidos si no eres lugareño. Ese restaurante es la Cocina de Doña Esthela.</p>
				<p>Según la revista londinense FoodHUB, aquí sirvió el mejor desayuno a nivel mundial en 2015: Machaca con huevo.</p>
			</article>
		</div>
	</section>
	
</section>

<section id="recomendaciones">
	<div class="caja-recomendaciones">
		<h3>Recomendaciones</h3>
		<div class="liston-azul">
			<div><img src="img-intel/botiquin.svg" alt=""><p><span>Tratamientos Médicos:</span><br> Si usted se encuentra bajo algún tratamiento medico, por favor repórtelo al contacto del evento anexo en la pagina web.</p></div>
			<div><img src="img-intel/reloj.svg" alt=""><p><span>Puntualidad:</span><br>Le solicitamos amablemente su puntualidad en los check points para las actividades y así poder iniciar en el horario estipulado.</p></div>
			<div><img src="img-intel/pluma.svg" alt=""><p><span>Peticiones Especiales:</span><br>Si necesita algún plato especial: vegetariano, sin azúcar, sin gluten ó es alérgico a algún alimento, coméntelo.</p></div>
			<div><img src="img-intel/white-sun.svg" alt=""><p><span>Quemaduras:</span><br>Le recomendamos el uso constante de protector solar durante las actividades del evento para evitar quemaduras graves en la piel.</p></div>
		</div>
		<div style="width: 100%; height: 1px; margin: 0; padding: 0;"></div>
		<div class="tabla-recomendaciones">
			<div class="col">
				<div class="label-reco clearfix"><img src="img/icon-traslados.png" alt=""><h3>Traslados</h3></div>
				<div class="fondo-azul">ASUS pone a su disposición transportación para todas las actividades dentro del itinerario. Le solicitamos presentarse puntualmente en los puntos de partida.</div>
			</div>
			<div class="col">
				<div class="label-reco clearfix"><img src="img/icon-clima.png" alt=""><h3>Clima</h3></div>
				<div class="fondo-azul"> El clima Del Valle de Guadalupe es frío durante el mes de febrero. Les recomendamos llevar botas,  rompevientos y chamarra gruesa. 
					<div class="filo-dorado" style="display: block; padding: 4%; border-width: 2px; margin: 9% 0 3%; position: relative;">
						<!--a href="https://world-weather.info/forecast/mexico/tijuana/month/" target="_blank" style="display: block; width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 2;"></a-->
						<div id="229ee56d360b9b241cff4773d798471c" class="ww-informers-box-854753"><p class="ww-informers-box-854754"><a href="https://world-weather.info/forecast/mexico/tijuana/">Detailed forecast</a><br></p></div><script type="text/javascript" charset="utf-8" src="https://world-weather.info/wwinformer.php?userid=229ee56d360b9b241cff4773d798471c"></script><style>.ww-informers-box-854754{-webkit-animation-name:ww-informers54;animation-name:ww-informers54;-webkit-animation-duration:1.5s;animation-duration:1.5s;white-space:nowrap;overflow:hidden;-o-text-overflow:ellipsis;text-overflow:ellipsis;font-size:12px;font-family:Arial;line-height:18px;text-align:center}@-webkit-keyframes ww-informers54{0%,80%{opacity:0}100%{opacity:1}}@keyframes ww-informers54{0%,80%{opacity:0}100%{opacity:1}}</style>
					</div>
				</div>
			</div>
		</div>

		<div class='divider-dress'>
				
		</div>

		<div class="drescode clearfix">
			<div class="dresscodetxt">El clima en Baja California es similar al del sur de California, así que espere días templados y noches frías durante el mes de Febrero. Le recomendamos usar varias capas de ropa ya que las temperaturas caen rápidamente a medida que el sol se oculta.  Los mejores restaurantes del Valle son bastante relajados, por lo que el código de vestimenta es informal</div>
			<img src="img/dress-femenino.png" class="dress-sexo">
			<img src="img/dress-masculino.png" class="dress-sexo">
		</div>
	</div>
</section>

<section id="contacto">
	<div class="contacto-title"><h4>Contacto</h4> </div>
	<div class="datos-contacto">
		<p>Si cuenta con alguna duda en particular o desea más información, favor de contactar a:</p>
		<ul>
			<li><span>Pilar Rodal</span><br>pilar_rodal@asus.com</li>
			<li><span>Francisco Miranda</span><br> francisco_miranda@asus.com</li>
		</ul>
	</div>
	<div class="logo-contacto"><img src="img/logo-contacto.png" alt=""></div>
</section>

<!--SCRIPTS-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-100869975-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-100869975-5');
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://services.cognitoforms.com/scripts/embed.js"></script>
<script type="text/javascript" src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/masterScript.js"></script>
</body>
</html>