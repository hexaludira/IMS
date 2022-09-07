<div class="row">
	<div class="col-md-12">
		
			<div class="card">
				<div class="card-body">
					<form class="forms-sample" id="app" action="">
					<div class="row">
						<div class="col-md-6">
							
								<div class="form-group">
                      <label for="exampleInputUsername1">Date</label>
                      <!-- <input type="text" class="form-control" id="incident_date" placeholder="dd/mm/yyyy"> -->
                      <vuejs-datepicker input-class="form-control" placeholder="dd mm yyyy" name="incident_date" typeable value="<?php date_default_timezone_set("Asia/Jakarta");echo date("m d Y");?>"></vuejs-datepicker>
                      <div class="form-group">
                      <label>Incident</label>
                      <input type="text" class="form-control" id="incident_name" placeholder="Ex: Listrik mati">
                    </div>
                    </div>

						</div>
						<div class="col-md-6">
							
								<div class="form-group">
                      <label for="exampleInputUsername1">Date</label>
                      <!-- <input type="text" class="form-control" id="incident_date" placeholder="dd/mm/yyyy"> -->
                      <vuejs-datepicker input-class="form-control" placeholder="dd mm yyyy" name="incident_date" typeable value="<?php date_default_timezone_set("Asia/Jakarta");echo date("m d Y");?>"></vuejs-datepicker>
                      <div class="form-group">
                      <label>Incident</label>
                      <input type="text" class="form-control" id="incident_name" placeholder="Ex: Listrik mati">
                    </div>
                    </div>

						</div>

					</div>
				</form>
				</div>
			</div>
		

	</div>

</div>