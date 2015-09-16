<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include('html/head.php'); ?>
	</head>
	<body>

		<!-- Header-->
		<header class="header">
			<div class="container-fluid no-space">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-xs-12">
						<div class="header__logo">
							<img src="images/logo.png" alt="Maestranza">
						</div>
					</div>
					<div class="col-lg-10 col-md-10 col-xs-12 text-right">
						<div class="header__info">
							<div class="row">
								<div class="header__info--phone col-md-4 col-lg-3 col-lg-offset-1">
									<h6 class="header__text"><span class="fa fa-phone header__info--icon"> </span>222 16 91 718</h6>
								</div>
								<div class="header__info--email col-md-4 col-lg-4">
									<h6 class="header__text"><span class="fa fa-envelope header__info--icon"> </span>ventas@ideasinmobiliarias.com</h6>
								</div>
								<div class="header__info--callToAction col-md-4 col-lg-4">
									<button class="btn header__button" id="mainToggle">Recibir más información</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header> <!-- ends Header -->

		<!-- Main -->
		
		<main class="main" id="mainToggled">
			<form id="form" action="php/send.php" method="post"class="main__form text-center">
				<div class="form-group">
   					<label for="nombre">Nombre</label>
    				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Su nombre" required>
    			</div>
    			<div class="form-group">
   					<label for="apellidos">Apellidos</label>
    				<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Sus apellidos" required>
  				</div>
  				<div class="form-group">
  					<label for="email">Mail</label>
    				<input type="email" class="form-control" id="email" name="email" placeholder="correo@dominio.com" required>
  				</div>
  				<div class="form-group">
  					<label for="celular">Celular</label>
    				<input type="tel" class="form-control" id="celular" name="celular" placeholder="Tel. a 10 digitos" maxlength="10" required>
  				</div>		
    			<input type="submit" class="btn btn-default main__btn" name="submit" value="Recibir información">

    			<h6 class="main__close" id="mainClose">X Cerrar</h6>
			</form>
		</main> <!-- end Main -->
 
		<!--Showcase -->
		
		<section id="slider">
			<img src="images/1.jpg" data-transition="slideInLeft" alt="Slider Maestranza">
			<img src="images/2.jpg" data-transition="boxRain" alt="Slider Maestranza">
			<img src="images/3.jpg" data-transition="boxRandom" alt="Slider Maestranza">
			<img src="images/4.jpg" data-transition="fold" alt="Slider Maestranza">
		</section> <!-- end Showcase -->

		<!-- Showcase title -->

		<div class="showcase__content">
			<div class="container text-center">
				<h1 class="showcase__title">Residencial <small>Maestranza</small></h1>
				<p class="showcase__info"><strong>Residencial Maestranza</strong> se encuentra dentro del desarrollo «Lomas de la Toscana» que cuenta con un concepto único dentro de <strong>Lomas de Angelópolis</strong>, junto a la zona comercial <strong>Sonata</strong>. Este desarrollo cuenta con una Casa Club y canchas deportivas de uso exclusivo para los condóminos. Maestranza, es el primer desarrollo inmobiliario proyectado por el despacho de <strong class="showcase__strong"><a href="images/lp-lightbox.jpg" title="Humberto">Humberto Artigas</a></strong>.</p>
			</div>
		</div>

		<!-- Gallery -->

		<section class="gallery">
			<div class="container-fluid no-space">
				<div class="col-lg-6 col-sm-6 gallery__image-container no-space">
					<img src="images/amenities1.jpg" alt="Amenidades">
				</div>
				<div class="col-lg-6 col-sm-6 gallery__image-container no-space">
					<img src="images/amenities2.jpg" alt="Amenidades">
				</div>
			</div>
		</section> <!-- end Gallery -->

		<!-- Amenities -->

		<section class="amenities">
			<div class="container">
				<h2 class="generic__title">Amenidades</h2>
				<p class="generic__info">El fraccionamiento cuenta con casa club con espacios para que disfrutes en compañía de tus seres queridos, cada espacio está diseñado con la finalidad de brindar a toda la familia espacios únicos para cada edad, tales como:</p>
			</div>
			<div class="container-fluid">
				<ul class="list-inline amenities__activities text-center">
					<li>
						<img src="images/am1.png" alt="Amenities">
					</li>
					<li>
						<img src="images/am2.png" alt="Amenities">
					</li>
					<li>
						<img src="images/am3.png" alt="Amenities">
					</li>
					<li>
						<img src="images/am4.png" alt="Amenities">
					</li>
					<li>
						<img src="images/am5.png" alt="Amenities">
					</li>
					<li>
						<img src="images/am6.png" alt="Amenities">
					</li>
					<li>
						<img src="images/am7.png" alt="Amenities">
					</li>
					<li>
						<img src="images/am8.png" alt="Amenities">
					</li>
				</ul>
			</div>
		</section> <!-- end Amenities -->

		<!-- Gallery -->

		<section class="gallery">
			<div class="container-fluid no-space">
				<div class="col-lg-6 col-sm-6 gallery__image-container no-space">
					<img src="images/amenities3.jpg" alt="Amenidades">
				</div>
				<div class="col-lg-6 col-sm-6 gallery__image-container no-space">
					<img src="images/amenities4.jpg" alt="Amenidades">
				</div>
			</div>
		</section> <!-- end Gallery -->

		<!-- Apartments -->

		<section class="apartments">
			<div class="container">
				<h2 class="generic__title">Departamentos</h2>
				<ul class="generic__list">
					<li><strong>Departamentos desde 127 m2, con acabados de lujo.</strong></li>
					<li>Amplia Cocina con barra para desayunar.</li>
					<li>Sala.</li>
					<li>Comedor.</li>
					<li>Área de servicio.</li>
					<li>La recámara principal con vestidor y baño completo.</li>
					<li>La segunda recámara cuenta con closet y baño completo.</li>
					<li>La tercer recámara con closet y baño completo por fuera, que también <br> sirve de baño de visitas.</li>
					<li>2 cajones de estacionamiento.</li>
				</ul>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 apartaments__image-container">
					<a href="images/t1.jpg" class="showImage" data-img="planta-uno" title="Planta Tipo">
						<img src="images/t1.png" class="hideImage" alt="Plantas Maestranza">
						<img src="images/t-1.png" class="imageShown" alt="Plantas" id="planta-uno">
					</a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 apartaments__image-container">
					<a href="images/t2.jpg" class="showImage" data-img="planta-dos" title="Planta Tipo">
						<img src="images/t2.png" class="hideImage" alt="Plantas Maestranza">
						<img src="images/t-2.png" class="imageShown" alt="Plantas" id="planta-dos">
					</a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 apartaments__image-container">
					<a href="images/t3.jpg" class="showImage" data-img="planta-tres" title="Planta Tipo">
						<img src="images/t3.png" class="hideImage"  alt="Plantas Maestranza">
						<img src="images/t-3.png" class="imageShown" alt="Plantas" id="planta-tres">
					</a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 apartaments__image-container">
					<a href="images/t4.jpg" class="showImage" data-img="planta-cuatro" title="Planta Tipo">
						<img src="images/t4.png" class="hideImage"  alt="Plantas Maestranza">
						<img src="images/t-4.png" class="imageShown" alt="Plantas" id="planta-cuatro">
					</a>
				</div>
			</div>
		</section> <!-- end Apartments -->

		<!-- Insides -->

		<section class="insides">
			<div class="container-fluid no-space">
				<h2 class="generic__title">Interiores</h2>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-space insides__image-container">
					<a href="images/int1.jpg" title="Interiores">
						<img src="images/interior1.jpg" alt="Interiores Maestranza">
					</a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-space insides__image-container">
					<a href="images/int2.jpg" title="Interiores">
						<img src="images/interior2.jpg" alt="Interiores Maestranza">
					</a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-space insides__image-container">					
					<a href="images/int3.jpg" title="Interiores">
						<img src="images/interior3.jpg" alt="Interiores Maestranza">
					</a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-space insides__image-container">
					<a href="images/int4.jpg" title="Interiores">
						<img src="images/interior4.jpg" alt="Interiores Maestranza">
					</a>
				</div>
			</div>
		</section> <!-- end Insides-->
		
		<!-- Location -->
		
		<section class="location">
			<div class="container-fluid">
				<h2 class="generic__title">Ubicación</h2>
				<div class="map" id="map"></div>
			</div>
		</section> <!-- end Location -->

		<!-- Logos-->
		
		<section class="logos">
			<div class="container">
				<ul class="list-inline text-center">
					<li><img src="images/logoartigas.png" alt="Lomas de Angelópolis"></li>
					<li><img src="images/logo-lomas.png" alt="Artigas Arquitectura"></li>
					<li><img src="images/logoriberalta.png" alt="Riber Alfa"></li>
					<li><img src="images/logoideas.png" alt="Ideas inmobiliarias"></li>
				</ul>
			</div>
		</section> <!-- end Logos-->

		<!-- Footer -->

		<footer class="footer">
			<div class="container text-center">
				<p class="footer__info">Los precios pueden variar sin previo aviso.</p>
				<span class="footer__privacy" id="privacy">Aviso de Privacidad</span>
				<p class="generic__info" id="privacyToggled">INMOIDEAS, S.A. DE C.V., con domicilio en MORAS 409, COL. DEL VALLE, DELEGACION BENITO JUAREZ, MÉXICO D.F. C.P.03100. EN PUEBLA (222) 169-17-18 VIA AXTLIXCAYOTL #5208, COL. TLAXCALCINGO (RESERVA TERRITORIAL ANGELOPOLIS), SAN ANDRES CHOLULA, PUEBLA, es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección. Su información personal será utilizada para proveer los servicios y productos que ha solicitado, informarle sobre cambios en los mismos y evaluar la calidad del servicio que le brindamos. Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales: Nombre completo, dirección, email y teléfonos, considerado como sensible según la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, su dirección y teléfonos. Usted tiene derecho de acceder, rectificar y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar el consentimiento que para tal fin nos haya otorgado, a través de los procedimientos que hemos implementado. Para conocer dichos procedimientos, los requisitos y plazos, se puede poner en contacto con nuestro departamento de datos personales en MEXICO D.F. (55) 5559-27-00 MORAS 409, COL. DEL VALLE, DELEGACION BENITO JUAREZ, MÉXICO D.F. C.P.03100 PUEBLA (222) 169-17-18 VIA AXTLIXCAYOTL #5208, COL. TLAXCALCINGO (RESERVA TERRITORIAL ANGELOPOLIS), SAN ANDRES CHOLULA, PUEBLA. CONTACTO VIA E-MAIL: protecciondedatos@ideasinmobiliarias.com o visitar nuestra página de Internet www.ideasinmobiliarias.mx Asimismo, le informamos que sus datos personales pueden ser transferidos y tratados dentro y fuera del país, por personas distintas a esta empresa. En ese sentido, su información puede ser compartida con otras agencias inmobiliarias pertenecientes a la Asociación Mexicana de Profesionales Inmobiliarios, A.C., para la oferta de bienes inmuebles. Si usted no manifiesta su oposición para que sus datos personales sean transferidos, se entenderá que ha otorgado su consentimiento para ello. No consiento que mis datos personales sean transferidos en los términos que señala el presente aviso de privacidad. Si usted desea dejar de recibir mensajes promocionales de nuestra parte puede solicitarlo a través de los teléfonos en MEXICO D.F. (55) 5559-27-00, en PUEBLA (222) 169-17-18, o bien al correo electrónico protecciondedatos@ideasinmobiliarias.com . Cualquier modificación a este aviso de privacidad podrá consultarla en www.ideasinmobiliarias.mx Actualización al 01/01/2015</p>
			</div>
		</footer>
		<?php include('html/bottom.php'); ?>
	</body>
</html>