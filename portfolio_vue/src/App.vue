<template>
	<div>
		<!-- Timeline based on https://bootsnipp.com/snippets/featured/timeline-responsive -->
		<link rel="stylesheet" type="text/css" href="./src/assets/css/timeline.css">
		<link rel="stylesheet" type="text/css" href="./src/assets/css/grid.css">
		<navigationbar></navigationbar>
			
		<button class="btn btn-warning rounded-circle" onclick="goTopAction()" id="goTopButton" title="Volver arriba"><i class="fas fa-chevron-up"></i></button>
		<router-view></router-view>

		<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

		<!--
		<div class="container-fluid bg-light text-gray-dark pt-3">
			<center>
				<p>2019 © Copyright: Héctor Martín Solís</p>
			</center>
		</div>
		-->
	</div>
</template>

<script>
	import NavBar from "./components/NavBar.vue"

	export default {
		
		components : {
			navigationbar : NavBar,
		},

		data () {
			return {
			}
		}
	}
</script>