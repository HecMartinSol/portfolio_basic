<template>
	<div class="container-fluid bg-success full_page_container text-white">
		<h2 class="pb-5"><center>Tecnologías</center></h2>
		<div class="container">

			<div class="row">
				<div class="col-4">
					<ul>
						<li> 
							<i class="fab fa-php"></i> PHP 7 + frameworks
							<ul>
								<li>Codeigniter 3</li>
								<li>Symfony 4</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-4">
					<ul>
						<li> 
							<i class="fab fa-js-square"></i> JavaScript  ES6
							<ul>
								<li> <i class="fab fa-jquery"></i> jQuery </li>
								<li> <i class="fab fa-vuejs"></i> VueJS </li>
								<li> <i class="fab fa-angular"></i> Angular </li>
							</ul>
						</li>
					</ul>

				</div>
				<div class="col-4">
					<ul>
						<li> 
							<i class="fab fa-html5"></i> HTML5 + <i class="fab fa-css3"></i> CSS3 
							<ul>
								<li>Bootstrap 4</li>
								<li>Foundation</li>
							</ul>
						</li>
					</ul>

				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<ul>
						<li> 
							<i class="fas fa-database"></i> Bases de Datos
							<ul>
								<li>MySQL / SQLServer </li>
								<li>MongoDB </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-4">
					<ul>
						<li>
							<i class="fab fa-git"></i> Control de versiones
							<ul>
								<li><i class="fab fa-github"></i> Git</li>
								<li><i class="fab fa-bitbucket"></i> Bitbucket</li>
								<li> SVN</li>
							</ul>
						</li>           
					</ul>
				</div>
				<div class="col-4">
					<ul>
						<li>

							<i class="fas fa-server"></i> Sistemas
							<ul>
								<li><i class="fab fa-windows"></i> Windows</li>
								<li><i class="fab fa-ubuntu"></i> Ubuntu</li>
								<li><i class="fab fa-centos"></i> Centos</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<ul>
						<li> 
							<i class="fab fa-node"></i> Node
							<ul>
								<li><i class="fab fa-node-js"></i> NodeJS</li>
								<li><i class="fab fa-npm"></i> NPM</li>
							</ul>
						</li>

					</ul>
				</div>
				<div class="col-4">
					<ul>
						<li> <i class="fab fa-docker"></i> Docker </li>

					</ul>
				</div>
			</div>
		</div>

		<!-- TO DO
		<div v-for="tech in hms.tech">
			<h5 class="card-title">{{tech.name}}</h5>
		</div>
		-->

	</div>  
</template>

<script>
	import hms_data from '../assets/hms_data.json';

	export default {
		data () {
			return {
				hms: hms_data
			}
		}
	}
</script>