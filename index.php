<!DOCTYPE html>
<html>
<head>
	<title>Héctor Martín Solís</title>
	<link rel="icon" href="./img/icon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<!-- FONTAWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<!-- Timeline based on https://bootsnipp.com/snippets/featured/timeline-responsive -->
	<style type="text/css">
		#banner_logo{
			background-image: url("./img/bg_pattern2.png");
		}

		.timeline {
			list-style: none;
			padding: 20px 0 20px;
			position: relative;
		}

		.timeline:before {
			top: 0;
			bottom: 0;
			position: absolute;
			content: " ";
			width: 3px;
			background-color: #eeeeee;
			left: 50%;
			margin-left: -1.5px;
		}

		.timeline > li {
			margin-bottom: 20px;
			position: relative;
		}

		.timeline > li:before,
		.timeline > li:after {
			content: " ";
			display: table;
		}

		.timeline > li:after {
			clear: both;
		}

		.timeline > li:before,
		.timeline > li:after {
			content: " ";
			display: table;
		}

		.timeline > li:after {
			clear: both;
		}

		.timeline > li > .timeline-panel {
			width: 46%;
			float: left;
			border: 1px solid #d4d4d4;
			border-radius: 2px;
			padding: 20px;
			position: relative;
			-webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
			box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
			background: #f9f9f9;
		}

		.timeline > li > .timeline-panel:before {
			position: absolute;
			top: 26px;
			right: -15px;
			display: inline-block;
			border-top: 15px solid transparent;
			border-left: 15px solid #ccc;
			border-right: 0 solid #ccc;
			border-bottom: 15px solid transparent;
			content: " ";
		}

		.timeline > li > .timeline-panel:after {
			position: absolute;
			top: 27px;
			right: -14px;
			display: inline-block;
			border-top: 14px solid transparent;
			border-left: 14px solid #fff;
			border-right: 0 solid #fff;
			border-bottom: 14px solid transparent;
			content: " ";
		}

		.timeline > li > .timeline-badge {
			color: #fff;
			width: 50px;
			height: 50px;
			line-height: 50px;
			font-size: 1.4em;
			text-align: center;
			position: absolute;
			top: 16px;
			left: 50%;
			margin-left: -25px;
			background-color: #999999;
			z-index: 100;
			border-top-right-radius: 50%;
			border-top-left-radius: 50%;
			border-bottom-right-radius: 50%;
			border-bottom-left-radius: 50%;
		}

		.timeline > li.timeline-inverted > .timeline-panel {
			float: right;
		}

		.timeline > li.timeline-inverted > .timeline-panel:before {
			border-left-width: 0;
			border-right-width: 15px;
			left: -15px;
			right: auto;
		}

		.timeline > li.timeline-inverted > .timeline-panel:after {
			border-left-width: 0;
			border-right-width: 14px;
			left: -14px;
			right: auto;
		}

		.timeline-badge.primary {
			background-color: #2e6da4 !important;
		}

		.timeline-badge.success {
			background-color: #3f903f !important;
		}

		.timeline-badge.warning {
			background-color: #f0ad4e !important;
		}

		.timeline-badge.danger {
			background-color: #d9534f !important;
		}

		.timeline-badge.info {
			background-color: #5bc0de !important;
		}

		.timeline-title {
			margin-top: 0;
			color: inherit;
		}

		.timeline-body > p,
		.timeline-body > ul {
			margin-bottom: 0;
		}

		.timeline-body > p + p {
			margin-top: 5px;
		}

		@media (max-width: 767px) {
			ul.timeline:before {
				left: 40px;
			}

			ul.timeline > li > .timeline-panel {
				width: calc(100% - 90px);
				width: -moz-calc(100% - 90px);
				width: -webkit-calc(100% - 90px);
			}

			ul.timeline > li > .timeline-badge {
				left: 15px;
				margin-left: 0;
				top: 16px;
			}

			ul.timeline > li > .timeline-panel {
				float: right;
			}

			ul.timeline > li > .timeline-panel:before {
				border-left-width: 0;
				border-right-width: 15px;
				left: -15px;
				right: auto;
			}

			ul.timeline > li > .timeline-panel:after {
				border-left-width: 0;
				border-right-width: 14px;
				left: -14px;
				right: auto;
			}
		}

		/** ------------------ */
		#goTopButton {
		  display: none;
		  position: fixed;
		  bottom: 20px;
		  right: 30px;
		  z-index: 99;
		}

	</style>

	<script type="text/javascript">
		function animateToID(theID) {
			$('html, body').animate({
			    scrollTop: $("#"+theID).offset().top
			}, 1000);
			$('nav a').removeClass('active');
			$('#'+theID+"_pill").addClass('active');
		}

			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)
			    	$("#goTopButton").fadeIn(500);
			    else
			    	$("#goTopButton").fadeOut(500);
			}

			// When the user clicks on the button, scroll to the top of the document
			function goTopAction() {
				$('nav a').removeClass('active');
				$('html, body').animate({
				    scrollTop: $("body").offset().top
				}, 1000);
			}
	</script>
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-light bg-light" >
		<a class="navbar-brand" href="#">
			<img src="./img/icon.svg" alt="H.M.S" class="d-inline-block align-top" style="height: 4em">
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<nav class="nav nav-pills">
				<a class="nav-item nav-link" href="#" id="sobre_mi_pill" onclick="animateToID('sobre_mi')"><i class="fas fa-info-circle"></i> Sobre mi</a>
				<a class="nav-item nav-link" href="#" id="trayectoria_profesional_pill" onclick="animateToID('trayectoria_profesional')"><i class="fas fa-briefcase"></i> Trayectoria profesional</a>
				<a class="nav-item nav-link" href="#" id="contacto_pill" onclick="animateToID('contacto')"><i class="fas fa-at"></i> Contacto</a>
			</nav>
		</div>
	</nav>

	<div class="container-fluid" id="banner_logo">
		<div class="align-middle p-5">
			<center>
				<img src="./img/logo.png" class="img-fluid">
			</center>
		</div>
	</div>

	<div class="container-fluid text-white" style="background: #1D4E69;">
		<div class="pt-5 pb-5" id="sobre_mi">
			<h2 class="pb-5"><center><i class="fas fa-info-circle"></i> Sobre mi</center></h2>

			<div class="row">
				<div class="col-md">
					<center>
						<img class="img-fluid rounded-circle" src="./img/hector.jpg" alt="Héctor Martín">
					</center>
				</div>

				<div class="col-md">
					<h3 class="pt-2">Héctor Martín Solís</h3>
					<p><b>Desarrollador Web Full Stack</b></p>
					<p>Soy un apasionado de la informática y la tecnología. Procuro estar siempre pendiente de nuevas tecnologías, herramientas y técnicas para intentar aprender de manera autodidacta y mantenerme al día.</p>
					<p>Me encanta viajar, y siempre que tengo la oportunidad intento hacer una escapada para conocer algún lugar nuevo.</p>
					<p>También disfruto en casa con series, películas, videojuegos y cómic.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-dark">
		<div class="pt-5 pb-5" id="trayectoria_profesional">
			<h2 class="pb-5 text-white"><center><i class="fas fa-briefcase"></i> Trayectoria profesional</center></h2>

			<ul class="timeline">
				<!-- Kiosko y más -->
				<li>
					<div class="timeline-badge danger"><i class="fas fa-newspaper"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title"><a href="https://www.kioskoymas.com" target="_blank">Kiosko y Más</a></h4>
							<p><small class="text-muted"><i class="fas fa-calendar"></i> Actualmente, desde Septiembre de 2015</small></p>
						</div>
						<div class="timeline-body">
							<p><b>Desarrollador Web Full Stack</b></p>
							<p>Encargado del desarrollo de nuevas funcionalidades para la web de la empresa, así como el mantenimiento.</p>
							<p>Participación activa en todas las fases del desarrollo: captura de requisitos, especificación, análisis y planificación de tareas siguiendo metodologías ágiles.</p>
							<p>Tecnologías:
								<ul style="list-style: none;">
									<li><i class="fas fa-code"></i> PHP con framework CodeIgniter</li>
									<li><i class="fab fa-html5"></i> HTML5, CSS3, JavaScript, JQuery, Bootstrap</li>
									<li><i class="fas fa-database"></i> MySQL y MongoDB</li>
									<li><i class="fas fa-code-branch"></i> GIT</li>
									<li><i class="fas fa-server"></i> Linux (CentOS) / Windows</li>
									<li><i class="fas fa-project-diagram"></i> SCRUM</li>
								</ul>
							</p>
							<p class="float-right">
								<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_kioskoymas">
									Más info.
								</button>

								<div class="modal fade" id="modal_kioskoymas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document" >
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">
													<div class="badge badge-danger rounded-circle p-2"><i class="fas fa-newspaper"></i></div>
													Kiosko y Más: responsabilidades
												</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<ul>
													<li>Captura de requisitos, especificación, análisis y planificación de nuevas tareas.</li>
													<li>Coordinación de los desarrollos del equipo siguiendo metodologías ágiles.</li>
													<li>Encargado de las integraciones continuas y despliegues utilizando GIT como control de versiones.</li>
													<li>Administración y gestión de los servidores de la empresa.</li>
													<li>Diseño, administración y mantenimiento de la Base de Datos de la empresa.</li>
													<li>Desarrollo del sistema de suscripciones/transacciones de la empresa.</li>
													<li>Desarrollo de la pasarela de pagos de la empresa.</li>
													<li>Desarrollo de APIs REST para proveer servicios a terceros.</li>
													<li>Integración de APIs y servicios web dentro del sistema.</li>
													<li>Desarrollo íntegro de la <a href="http://pressclipping.cedro.org" target="_blank">plataforma de PressClipping de Cedro</a></li>
												</ul>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
											</div>
										</div>
									</div>
								</div>
							</p>
						</div>
					</div>
				</li>
				<!-- / Kiosko y más -->

				<!-- Codeeta -->
				<li class="timeline-inverted">
					<div class="timeline-badge primary"><i class="fas fa-credit-card"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title"><a href="http://codeeta.com/" target="_blank">Codeeta</a></h4>
							<p><small class="text-muted"><i class="fas fa-calendar"></i> Desde Septiembre de 2015 hasta Marzo de 2016</small></p>
						</div>
						<div class="timeline-body">
							<p><b>Desarrollador Web Full Stack</b></p>
							<p>Desarrollador full stack externo para <a href="https://www.kioskoymas.com" target="_blank">Kiosko y Más</a>.</p>
							<p>Mismas funcionalidades.</p>
						</div>
					</div>
				</li>
				<!-- / Codeeta -->

				<!-- Bosch -->
				<li>
					<div class="timeline-badge info"><i class="fas fa-industry"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title"><a href="https://www.grupo-bosch.es/" target="_blank">Robert Bosch España</a></h4>
							<p><small class="text-muted"><i class="fas fa-calendar"></i> Desde Noviembre de 2014 hasta Junio de 2015</small></p>
						</div>
						<div class="timeline-body">
							<p><b>Becario en departamento de sistemas</b></p>
							<p>Formación práctica de la Universidad compaginando con los estudios.</p>
							<p>Apoyo al equipo informático en desarrollo de scripts para automatización de tareas en sistemas Windows.</p>
							<p>Generación de etiquetas mediante su programación ZPL para impresoras Zebra.</p>
						</div>
					</div>
				</li>
				<!-- /Bosch -->

				<!-- First -->
				<li class="timeline-inverted">
					<div class="timeline-badge success"><i class="fas fa-language"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title"><a href="https://www.cambridgeinstitute.net/" target="_blank">Cambridge Institute</a></h4>
							<p><small class="text-muted"><i class="fas fa-calendar"></i> 2012</small></p>
						</div>
						<div class="timeline-body">
							<p><b>First Certificate in English</b></p>
							<p>Obtención del certificado en el nivel B2 de Inglés. </p>
							<p>Licencia 0034615102</p>
						</div>
					</div>
				</li>
				<!-- / First -->

				<!-- Universidad -->
				<li>
					<div class="timeline-badge"><i class="fas fa-user-graduate"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title"><a href="https://www.ucm.es/" target="_blank">Universidad Complutense de Madrid</a></h4>
							<p><small class="text-muted"><i class="fas fa-calendar"></i> De 2012 a 2016</small></p>
						</div>
						<div class="timeline-body">
							<p><b>Grado en Ingeniería del Software</b></p>
							<p>Estudié durante 5 años la carrera de ingeniería del Software en la Universidad Complutense de Madrid, en la Facultad de Informática del Campus Universitario de Moncloa.</p>
							<p>Curso por año, a excepción del último, en el que dejé el proyecto fin de carrera para poder trabajar mientras lo terminaba.</p>
							<br>
							<p><small class="text-muted"><i class="fas fa-calendar"></i> De Julio de 2013 a Enero de 2014</small></p>
							<p><b>Beca de colaboración en la Facultad de Comercio y Turismo</b></p>
							<p>Durante un periodo de 7 meses compaginé los estudios con una beca de formación práctica en la Secretaría de la facultad de Comercio y Turismo de la Universidad. </p>
						</div>
					</div>
				</li>
				<!-- / Universidad -->
			</ul>
		</div>
	</div>

	<div class="container-fluid bg-secondary text-white">
		<div class="pt-5 pb-5" id="contacto">
			<h2 class="pb-3"><center><i class="fas fa-at"></i> Contacto</center></h2>
			<center>
				<a class="btn btn-success mb-3" href='./resources/cv_hector_martin_solis.pdf' id="btn_my_cv" download style="width: 10rem;" title="Descargar Currículum">
					<i class="fas fa-file-alt mr-3 mt-1 float-left"></i>Currículum
				</a>
				<br>

				<a class="btn btn-danger mb-3" href='mailto:hecmartinsol@gmail.com?Subject=Hello!' id="btn_my_email" style="width: 10rem;" title="Enviar email">
					<i class="fas fa-envelope mr-3 mt-1 float-left"></i>Email
				</a>
				<br>

				<a class="btn btn-primary mb-3" href='https://www.linkedin.com/in/h%C3%A9ctor-mart%C3%ADn-sol%C3%ADs-64543b119/' target='_blank' style="width: 10rem;" title="Visitar LinkedIn">
					<i class="fab fa-linkedin mr-3 mt-1 float-left"></i>LinkedIn
				</a>
				<br>

				<a class="btn btn-dark mb-3" href='https://github.com/HecMartinSol' target='_blank' style="width: 10rem;" title="Visitar GitHub">
					<i class="fab fa-github mr-3 mt-1 float-left"></i>GitHub
				</a>
				<br>
			</center>
		</div>	
	</div>	

	<button class="btn btn-warning rounded-circle" onclick="goTopAction()" id="goTopButton" title="Volver arriba"><i class="fas fa-chevron-up"></i></button>

	<div class="container-fluid bg-light text-gray-dark pt-3">
		<center>
			<p><?= date("Y") ?> © Copyright: Héctor Martín Solís</p>
		</center>
	</div>
</body>
</html>
