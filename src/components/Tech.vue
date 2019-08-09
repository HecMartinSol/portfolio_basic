<template>
	<div class="container-fluid full_page_container text-white" style="background:var(--fluent-darkgray)">
		<h2 class="pb-5"><center>Tecnologías</center></h2>
		

		<div class="grid">
			<template v-for="row in rows">
				<template v-for="col in row">
					<div class="card">
						<img class="card-img-top img-fluid rounded-circle" :src="'./src/assets/img/logos/' + col.image" :alt="col.name" data-toggle="tooltip" data-placement="bottom" :title="col.name">
					</div>

				</template>
			</template>
		</div> 


	</div>	
</template>
<style type="text/css">

	.card img{
		height: 5rem;
		width: 5rem;
		position: relative;
		left: 16%;
	}

	.card img:hover {
		transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
	}



</style>

<script>
	import hms_data from '../assets/hms_data.json';

	var items = hms_data.tech;
	var rows = [];
	while (items.length > 0) 
		rows.push(items.splice(0, 5));
	
	export default {
		data () {

			$(function () { $('[data-toggle="tooltip"]').tooltip() })

			return {
				rows: rows
			}
		}
	}
</script>