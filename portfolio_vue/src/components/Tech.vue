<template>
	<div class="container-fluid bg-success full_page_container text-white">
		<h2 class="pb-5"><center>Tecnologías</center></h2>
		


		<div class="container">
			<div v-for="(row, i) in rows" class="row centered-form center-block">
				<div v-for="(col, j) in row" class="col-auto col-sm text-center font-weight-bold text-dark text-uppercase">

					<div class="card">
						<img class="card-img-top img-fluid rounded-circle" :src="'./src/assets/img/logos/' + col.image" :alt="col.name">
						<div class="card-body">
							<h5 class="card-title">{{col.name}}</h5>
						</div>
					</div>
				</div>
			</div>


		</div>  


	</div>	
</template>
<style type="text/css">
	.card img{
		height: 5rem;
		width: 5rem;
	}
	.card{
		width: 11rem;
	}


</style>

<script>
	import hms_data from '../assets/hms_data.json';

	export default {
		data () {


			var items = hms_data.tech;
			var rows = [];
			while (items.length > 0) 
				rows.push(items.splice(0, 5));
			console.log(rows);

			return {
				hms: hms_data,
				rows: rows
			}
		}
	}
</script>