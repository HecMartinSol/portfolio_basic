<template>
	<div>
		<nav id="topNav" class="navbar fixed-to navbar-expand-md navbar-dark bg-dark">
			<!-- <a class="navbar-brand mx-auto" href="/">NavBar</a> -->
			<a class="navbar-brand" href="/">
				<img src="../assets/img/logopen_fill.png" class="img-fluid rounded-circle" alt="Logo" id="nav_bar_logo">
				
				<span class="ml-1"></span>
			</a>


			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
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

	</div>
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
		height: 4rem;
	}
	.nav_bar_logo_middle{
		height: 110px;
		margin-left: -55px;
		top: 12px;
		z-index: 200;
		display: block;
		position: absolute;
		left: 50%;
	}
	#topNav{
	}

</style>