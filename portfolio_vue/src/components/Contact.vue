<template>
	<div class="container-fluid bg-secondary text-white">
		<div class="pt-5 pb-5" id="contacto">
			<h2 class="pb-3"><center><i class="fas fa-at"></i> Contacto</center></h2>
			<div class="container text-center">
				<div class="row">
					<div class="col-6">
						<a class="btn btn-success mb-3" href='./assets/cv_hector_martin_solis.pdf' id="btn_my_cv" download style="width: 10rem;" title="Descargar Currículum">
							<i class="fas fa-file-alt mr-3 mt-1 float-left"></i>Currículum
						</a>
					</div>
					<div class="col-6">
						<a class="btn btn-danger mb-3" href='mailto:hecmartinsol@gmail.com?Subject=Hello!' id="btn_my_email" style="width: 10rem;" title="Enviar email">
							<i class="fas fa-envelope mr-3 mt-1 float-left"></i>Email
						</a>
					</div>
				</div>

				<div class="row">
					<div class="col-6">
						<a class="btn btn-primary mb-3" href='https://www.linkedin.com/in/h%C3%A9ctor-mart%C3%ADn-sol%C3%ADs-64543b119/' target='_blank' style="width: 10rem;" title="Visitar LinkedIn">
							<i class="fab fa-linkedin mr-3 mt-1 float-left"></i>LinkedIn
						</a>
					</div>
					<div class="col-6">
						<a class="btn btn-dark mb-3" href='https://github.com/HecMartinSol' target='_blank' style="width: 10rem;" title="Visitar GitHub">
							<i class="fab fa-github mr-3 mt-1 float-left"></i>GitHub
						</a>
					</div>
				</div>

				<div class="row" hidden>
					<div class="col-12">
						<a class="btn btn-warning mb-3" href='http://dev.hecmartinsol.es' target='_blank' style="width: 10rem;" title="Visitar Desarrollo">
							<i class="fas fa-code mr-3 mt-1 float-left"></i>Desarrollo
						</a>  
					</div>
				</div>
			</div>
		</div>  
	</div>  
</template>

<script>

	export default {
		data () {
			return {
			}
		}
	}
</script>