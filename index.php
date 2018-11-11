<!DOCTYPE html>
<html>
<head>
	<title>Héctor Martín Solís</title>
	<link rel="icon" href="./img/icon.ico" type="image/x-icon" />


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
				$('html, body').animate({
				    scrollTop: $("body").offset().top
				}, 1000);
			}
	</script>
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">

			<a class="navbar-brand" href="#">
				<img src="./img/icon.svg" width="50" height="50" alt="H.M.S">
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#" onclick="animateToID('sobre_mi')">Sobre mi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" onclick="animateToID('trayectoria_profesional')">Trayectoria</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" onclick="animateToID('contacto')">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid" id="banner_logo">
		<div class="container align-middle p-5">
			<center>
				<img src="./img/logo.png" class="img-fluid">
			</center>
		</div>
	</div>

	<div class="container-fluid text-white" style="background: #1D4E69;">
		<div class="container pt-5 pb-5" id="sobre_mi">
			<h2 class="pb-5"><center>Sobre mi</center></h2>

			<div class="row">
				<div class="col-md">
					<center>
						<img class="img-fluid rounded-circle" src="./img/hector.jpg" alt="Héctor Martín">
					</center>
				</div>

				<div class="col-md">
					<h3>Héctor Martín Solís</h3>
					<p><b>Desarrollador Web Full Stack</b></p>
					<p>Apasionado de la informática y la tecnología. Siempre pendiente de las novedades tecnológicas e intentando estar al día.</p>
					<p>Con gran pasión por viajar, intentando siempre hacer una escapada para conocer algún lugar nuevo.</p>
					<p>Cinéfilo y seríefilo.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-dark">
		<div class="container pt-5 pb-5" id="trayectoria_profesional">
			<h2 class="pb-5 text-white"><center>Trayectoria profesional</center></h2>

			<ul class="timeline">
				<li>
					<div class="timeline-badge danger"><i class="fas fa-newspaper"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title"><a href="https://www.kioskoymas.com" target="_blank">Kiosko y Más</a></h4>
							<p><small class="text-muted"><i class="fas fa-calendar"></i> Actualmente, desde Septiembre de 2015</small></p>
						</div>
						<div class="timeline-body">
							<p><b>Desarrollador Web Full Stack</b></p>
							<p>Desarrollo de nuevas funcionalidades para la web de la empresa.</p>
							<p>Desarrollo del sistema de suscripciones y la pasarela de pagos de la empresa.</p>
							<p>Desarrollo e integración de APIs propias y de terceros.</p>
							<p>Participación activa en la captura de requisitos, especificación, análisis y planificación de tareas siguiendo metodologías ágiles.</p>
							<p>Desarrollo íntegro de la <a href="http://pressclipping.cedro.org" target="_blank">plataforma de PressClipping de Cedro</a></p>
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
						</div>
					</div>
				</li>
				<li class="timeline-inverted">
					<div class="timeline-badge primary"><i class="fas fa-credit-card"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title"><a href="http://codeeta.com/" target="_blank">Codeeta</a></h4>
							<p><small class="text-muted"><i class="fas fa-calendar"></i> Desde Septiembre de 2015 hasta Marzo de 2016</small></p>
						</div>
						<div class="timeline-body">
							<p>Desarrollador full stack externo para <a href="https://www.kioskoymas.com" target="_blank">Kiosko y Más</a>.</p>
						</div>
					</div>
				</li>
				<!-- -->
				<li>
					<div class="timeline-badge info"><i class="fas fa-industry"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title"><a href="https://www.grupo-bosch.es/" target="_blank">Robert Bosch España</a></h4>
							<p><small class="text-muted"><i class="fas fa-calendar"></i> Desde Noviembre de 2014 hasta Junio de 2015</small></p>
						</div>
						<div class="timeline-body">
							<p>Formación práctica de la Universidad compaginando con los estudios.</p>
							<p>Apoyo al equipo informático en desarrollo de scripts para automatización de tareas en sistemas Windows.</p>
							<p>Generación de etiquetas mediante su programación ZPL para impresoras Zebra.</p>
						</div>
					</div>
				</li>

				<li class="timeline-inverted">
					<div class="timeline-badge"><i class="fas fa-user-graduate"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title"><a href="https://www.ucm.es/" target="_blank">Universidad Complutense de Madrid</a></h4>
							<p><small class="text-muted"><i class="fas fa-calendar"></i> De 2012 a 2016</small></p>
						</div>
						<div class="timeline-body">
							<p><b>Grado en Ingeniería del Software</b></p>
							<p>Estudié durante 4 años la carrera de ingeniería del Software en la Universidad Complutense de Madrid, en la Facultad de Informática del Campus Universitario de Moncloa.</p>
							<br>
							<p><small class="text-muted"><i class="fas fa-calendar"></i> De Julio de 2013 a Enero de 2014</small></p>
							<p><b>Beca de colaboración en la Facultad de Comercio y Turismo</b></p>
							<p>Durante un periodo de 7 meses compaginé los estudios con una beca de formación práctica en la Secretaría de la facultad de Comercio y Turismo de la Universidad. </p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="container-fluid bg-secondary text-white">
		<div class="container pt-5 pb-5" id="contacto">
			<h2 class="pb-5"><center>Contacto</center></h2>
			<center>
				<a class="btn btn-danger" href='mailto:hecmartinsol@gmail.com?Subject=Hello!'>
					<i class="fas fa-envelope mr-3"></i>Email
				</a>

				<a class="btn btn-primary" href='https://www.linkedin.com/in/h%C3%A9ctor-mart%C3%ADn-sol%C3%ADs-64543b119/' target='_blank'>
					<i class="fab fa-linkedin mr-3"></i>LinkedIn
				</a>


				<a class="btn btn-dark" href='https://github.com/HecMartinSol' target='_blank'>
					<i class="fab fa-github mr-3"></i>GitHub
				</a>
			</center>
		</div>	
	</div>	

	<button class="btn btn-warning rounded-circle" onclick="goTopAction()" id="goTopButton" title="Volver arriba"><i class="fas fa-chevron-up"></i></button>

</body>
</html>