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
	<link rel="stylesheet" type="text/css" href="resources/css/timeline.css">

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
				<!-- bbva -->
				<li class="timeline-inverted">
					<div class="timeline-badge primary"><i class="fas fa-money-check-alt"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title"><a href="http://bbva.com/" target="_blank">BBVA</a></h4>
							<p><small class="text-muted"><i class="fas fa-calendar"></i> Actualmente, desde Noviembre de 2018</small></p>
						</div>
						<div class="timeline-body">
							<p><b>Analista desarrollador PHP</b></p>
							<p>Contratación externa desde <a href="http://www.aubay.es/" target="_blank">Aubay</a>.</p>
						</div>
					</div>
				</li>
				<!-- / bbva -->


				<!-- Kiosko y más -->
				<li>
					<div class="timeline-badge danger"><i class="fas fa-newspaper"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title"><a href="https://www.kioskoymas.com" target="_blank">Kiosko y Más</a></h4>
							<p><small class="text-muted"><i class="fas fa-calendar"></i> Desde Septiembre de 2015 hasta Noviembre de 2018</small></p>
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

				<a class="btn btn-warning mb-3" href='http://dev.hecmartinsol.es' target='_blank' style="width: 10rem;" title="Visitar Desarrollo">
					<i class="fas fa-code mr-3 mt-1 float-left"></i>Desarrollo
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
