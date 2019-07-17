<template>
	<div class="container-fluid bg-dark full_page_container">
		<h2 class="pb-5 text-white"><center>Trayectoria profesional</center></h2>

		<ul class="timeline">

			<li v-for="i in hms.jobs.length" :class="(i-1) % 2 == 0 ? 'timeline-inverted' : ''">
				<div :class="'timeline-badge ' + hms.jobs[(i-1)].budget_class"><i :class="hms.jobs[(i-1)].budget_icon_class"></i></div>

				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="timeline-title"><a :href=" hms.jobs[(i-1)].company_link " target="_blank">{{ hms.jobs[(i-1)].company }}</a></h4>
						<p><small class="text-muted"><i class="fas fa-calendar"></i> Desde {{ dateToHuman(hms.jobs[(i-1)].from_date) }} {{ hms.jobs[(i-1)].to_date == null ? '' : 'hasta ' + dateToHuman(hms.jobs[(i-1)].to_date) }}</small></p>
					</div>

					<div class="timeline-body">
						<p><b>{{ hms.jobs[(i-1)].title }}</b></p>
						<p v-for="line in hms.jobs[(i-1)].info.split('\n')" >{{ line }}</p>

						<div v-if="hms.jobs[i-1].more_info != ''">
							<p class="float-right">
								<button type="button" class="btn btn-sm btn-success" data-toggle="modal" :data-target="'#modal_' + i">
									Más info.
								</button>

								<div class="modal fade" :id="'modal_' + i" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document" >
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">
													<div class="badge badge-danger rounded-circle p-2"><i class="fas fa-newspaper"></i></div>
													{{ hms.jobs[(i-1)].company }} <small>más información</small>
												</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<p v-for="line_more in hms.jobs[(i-1)].more_info.split('\n')" >{{ line_more }}</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
											</div>
										</div>
									</div>
								</div>
							</p>

						</div>
					</div>
				</div>
			</li>



		</ul>
	</div>

</template>

<script>
	import hms_data from '../assets/hms_data.json';

	export default {
		data () {
			return {
				hms: hms_data
			}
		},
		methods:{
			dateToHuman(theDate){
				var dateParts = theDate.split("-");
				if(dateParts.length > 1){
					var monthStr = "";
					
					switch (parseInt(dateParts[1])) {
						case  1: monthStr = "Ene."; break;
						case  2: monthStr = "Feb."; break;
						case  3: monthStr = "Mar."; break;
						case  4: monthStr = "Abr."; break;
						case  5: monthStr = "May."; break;
						case  6: monthStr = "Jun."; break;
						case  7: monthStr = "Jul."; break;
						case  8: monthStr = "Ago."; break;
						case  9: monthStr = "Sep."; break;
						case 10: monthStr = "Oct."; break;
						case 11: monthStr = "Nov."; break;
						case 12: monthStr = "Dec."; break;
					}

					theDate = monthStr + " " + dateParts[0];
				}

				return theDate;
			}
		}

	}
</script>