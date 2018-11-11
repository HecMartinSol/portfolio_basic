<?php 
$skippedElements = array('.','..','index.php');
$list = "<ul>";

$dir = scandir(".");
foreach ($dir as $element) {
	if (in_array($element, $skippedElements)) continue;

	$list .= "<li><a href='./".$element."'>".$element."</a></li>";
}
$list .= "<ul>";

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<!-- FONTAWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<!-- Timeline based on https://bootsnipp.com/snippets/featured/timeline-responsive -->
	<style type="text/css">
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
</style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Héctor Martín Solís</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Trabajos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contacto</a>
				</li>
			</ul>
		</div>
	</nav>

	

	<div class="container mt-5">
		<div class="row">
			<div class="col-sm">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="https://media.licdn.com/dms/image/C5603AQGBZE9ZFdQbxA/profile-displayphoto-shrink_200_200/0?e=1547078400&v=beta&t=qyox_W2tCRmWA85dSobV9oCeX7scvn29xRQLnJqSa8g" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Héctor Martín Solís</h5>
						<p class="card-text">Desarrollador web full stack.</p>
						<a class="btn btn-primary" href='mailto:hecmartinsol@gmail.com?Subject=Hello!'>
							<i class="fas fa-envelope mr-3"></i>Contactar
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="h3">Contacto</div>

				<div class="pb-3">
					<a class="btn btn-primary" href='mailto:hecmartinsol@gmail.com?Subject=Hello!'>
						<i class="fas fa-envelope mr-3"></i>Email
					</a>
				</div>
				<div class="pb-3">
					<a class="btn btn-primary" href='https://www.linkedin.com/in/h%C3%A9ctor-mart%C3%ADn-sol%C3%ADs-64543b119/' target='_blank'>
						<i class="fab fa-linkedin mr-3"></i>LinkedIn
					</a>
				</div>
				<div class="pb-3">
					<a class="btn btn-primary" href='https://github.com/HecMartinSol' target='_blank'>
						<i class="fab fa-github mr-3"></i>GitHub
					</a>
				</div>
			</div>
		</div>
		

		<div class="row">
			<ul class="timeline">
				<li>
					<div class="timeline-badge"><i class="fas fa-user-graduate"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Universidad Complutense de Madrid</h4>
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
				<li class="timeline-inverted">
					<div class="timeline-badge warning"><i class="fas fa-credit-card"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Mussum ipsum cacilds</h4>
						</div>
						<div class="timeline-body">
							<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
							<p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="timeline-badge danger"><i class="fas fa-credit-card"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Mussum ipsum cacilds</h4>
						</div>
						<div class="timeline-body">
							<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
						</div>
					</div>
				</li>
				<li class="timeline-inverted">
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Mussum ipsum cacilds</h4>
						</div>
						<div class="timeline-body">
							<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="timeline-badge info"><i class="fas fa-floppy-disk"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Mussum ipsum cacilds</h4>
						</div>
						<div class="timeline-body">
							<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
							<hr>
							<div class="btn-group">
								<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
									<i class="fas fa-cog"></i> <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Mussum ipsum cacilds</h4>
						</div>
						<div class="timeline-body">
							<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
						</div>
					</div>
				</li>
				<li class="timeline-inverted">
					<div class="timeline-badge success"><i class="fas fa-thumbs-up"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Mussum ipsum cacilds</h4>
						</div>
						<div class="timeline-body">
							<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
						</div>
					</div>
				</li>
			</ul>

		</div>



		<?= $list ?>
	</div>
</body>
</html>