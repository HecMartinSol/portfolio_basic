<template>
	<nav class="navbar navbar-expand-lg navbar-light bg-light 
		shadow-lg fixed-top
	">
		
		<router-link to="/" class="navbar-brand" id="nav_bar_logo" exact>
			<img src="../assets/img/icon_opaque.png" alt="H.M.S" class="d-inline-block align-top" style="height: 4em">
		</router-link>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
				aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<nav class="nav nav-pills nav-fill">
				<router-link to="/about" class="nav-link" active-class="active" exact><i class="fas fa-info-circle"></i> Sobre mi</router-link>
				<router-link to="/career" class="nav-link" active-class="active" exact><i class="fas fa-briefcase"></i> Trayectoria profesional</router-link>
				<router-link to="/tech" class="nav-link" active-class="active" exact><i class="fas fa-memory"></i> Tecnologías</router-link>
				<router-link to="/contact" class="nav-link" active-class="active" exact><i class="fas fa-at"></i> Contacto</router-link>
			</nav>
		</div>
	</nav>
</template>

<script>
	import About from "./About.vue"

	export default {
		components:{

		},
		data () {
			return {
			}
		}
	}
</script>

<style type="text/css">
	#nav_bar_logo{
		height: 110px;
		margin-left: -55px;
		top: 12px;
		z-index: 200;
		display: block;
		position: absolute;
		left: 50%;
	}
</style>