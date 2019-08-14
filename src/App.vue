<template>
	<div>
		<!-- Timeline based on https://bootsnipp.com/snippets/featured/timeline-responsive -->
		<link rel="stylesheet" type="text/css" href="./src/assets/css/timeline.css">
		<link rel="stylesheet" type="text/css" href="./src/assets/css/grid.css">
		<navigationbar></navigationbar>
			
		<router-view></router-view>

		<button class="btn btn-warning rounded-circle" @click="goTopAction()" id="goTopButton" title="Volver arriba"><i class="fas fa-chevron-up"></i></button>

		<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


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
		},
		methods : {
			goTopAction(){
				$("html, body").stop().animate({scrollTop:0}, 500, 'swing');
			}
		},
		mounted(){
			$(document).scroll(function() {
				var y = $(this).scrollTop();
				
				if (y > 100) {
					jQuery('#goTopButton').fadeIn();
				} else {
					jQuery('#goTopButton').fadeOut();
				}

			});
		}
	}
</script>