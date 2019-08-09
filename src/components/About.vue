<template>
	<div class="container-fluid text-white full_page_container" style="background: #1D4E69;">
		<h2 class="pb-5"><center>Sobre mi</center></h2>

		<div class="row">
			<div class="col-4">
				<center>
					<img class="img-fluid rounded-circle" src="../assets/img/hector.jpg" alt="Héctor Martín">
				</center>
			</div>

			<div class="col-8">
				<h3 class="pt-2">{{hms.me.name}}</h3>
				<p><b>{{hms.me.title}}</b></p>
				<p v-for="line in hms.me.description.split('\n')" >{{ line }}</p>

			</div>
		</div>
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