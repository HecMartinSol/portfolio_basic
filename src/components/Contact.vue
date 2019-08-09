<template>
	<div class="container-fluid bg-secondary full_page_container text-white">
		<h2 class="pb-3"><center>Contacto</center></h2>
		
		<div class="buttons">
			<a class="buttonCv" href='./assets/cv_hector_martin_solis.pdf' id="btn_my_cv" download title="Descargar Currículum">
				<i class="fas fa-file-alt"></i>&nbsp;Currículum
			</a>

			<a class="buttonEmail" href='mailto:hecmartinsol@gmail.com?Subject=Hello!' id="btn_my_email" target='_blank' title="Enviar email">
				<i class="fas fa-envelope"></i>&nbsp;Email
			</a>

			<a class="buttonLinkedin" href='https://www.linkedin.com/in/h%C3%A9ctor-mart%C3%ADn-sol%C3%ADs-64543b119/' target='_blank' title="Visitar LinkedIn">
				<i class="fab fa-linkedin"></i>&nbsp;LinkedIn
			</a>

			<a class="buttonGitHub" href='https://github.com/HecMartinSol' target='_blank' title="Visitar GitHub">
				<i class="fab fa-github"></i>&nbsp;GitHub
			</a>
		</div>
	</div>  
</template>

<style>
.buttons {
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  display: inline-block;
}

.buttons a {
  text-decoration: none;
  color: white !important;
  width: 350px;
  height: 100px;
  background: #F2385A;
  position: relative;
  margin: 30px;
  top: 0px;
  padding: 16px;
  font-size: 50px;
  border-radius: 10px;
  transition: all 0.2s;
  display: inherit;
}
.buttons a:hover {
	text-decoration: unset;
}

.buttons a:active {
  top: 8px;
}

.buttons .buttonLinkedin {
	background-color: #0077B5;
	box-shadow: 0px 15px 0px 0px #258cd1;
}
.buttons .buttonLinkedin:active {
  box-shadow: 0px 7px 0px 0px #258cd1;
}

.buttons .buttonCv {
  background-color: #2bad6c;
  box-shadow: 0px 15px 0px 0px #34db87;
}
.buttons .buttonCv:active {
  box-shadow: 0px 7px 0px 0px #34db87;
}
.buttons .buttonEmail {
  background-color: var(--new-primary);
  box-shadow: 0px 15px 0px 0px var(--new-primary-clear);
}
.buttons .buttonEmail:active {
  box-shadow: 0px 7px 0px 0px var(--new-primary-clear);
}
.buttons .buttonGitHub {
  background-color: #333;
  box-shadow: 0px 15px 0px 0px #585757
}
.buttons .buttonGitHub:active {
  box-shadow: 0px 7px 0px 0px #585757;
}

</style>


<script>
	export default {
		data () {
			return {
			}
		}
	}
</script>