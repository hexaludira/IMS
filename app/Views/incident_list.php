
<div class="row">
  <div class="col-md-12">
    <h4>Insert Incident Report</h4>
    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h4>Please review your input</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
    <div class="card">
      <div class="card-body">
          <form class="forms-sample" id="app" method="POST" action="<?= base_url('Process/insert_incident');?>">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label><h4>Incident</h4></label>
                  <input type="text" class="form-control" id="incident_name" name="incident_name" placeholder="Ex: Listrik mati">
                </div>
                <div class="form-group">
                  <label><h4>Date</h4></label>
                  <!-- <input type="text" class="form-control" id="incident_date" placeholder="dd/mm/yyyy"> -->
                  <vuejs-datepicker input-class="form-control" placeholder="dd mm yyyy" name="incident_date" typeable value="<?php date_default_timezone_set("Asia/Jakarta");echo date("m d Y");?>"></vuejs-datepicker>
                </div>
                <div class="form-group">
                  <!-- <vue-timepicker name="incident_time">ddada</vue-timepicker> -->
                  <label><h4>Time</h4></label>
                  <div class="row">
                    <div class="col-sm-5">
                      <input type="time" class="form-control" name="incident_time_begin" value="00:00">
                    </div>
                    <div class="col">
                      <h4>until</h4>
                    </div>
                    <div class="col-sm-5">        
                      <input type="time" class="form-control" name="incident_time_end" value="23:59">
 
                    </div>
                  </div>
                  
                </div>
                <div class="form-group">
                  <label><h4>Location</h4></label>
                  <select id="location" name="incident_location">
                  </select>
                </div>
 
                <div class="form-group">
                  <label><h4>Detailed Report</h4></label>
                  <textarea class="form-control" id="incident_detail" name="incident_detail" rows="5"></textarea>
                  <!-- <input type="" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password"> -->
                </div>
              </div>
                

              <div class="col-md-6">
                
                <div class="form-group">
                  <label><h4>Affected User</h4></label>
                  <input type="password" class="form-control" name="incident_affected" placeholder="Ex: SEA/ Cell A01">
                </div>
                <div class="form-group">
                  <label><h4>Remark</h4></label>
                  <textarea class="form-control" name="incident_remark" rows="3"></textarea>
                </div>
              
                <div class="form-group">
                  <label><h4>Status</h4></label>
                  <div class="form-check form-check-warning">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="incident_status" value="on_going" checked>
                      On-Going
                    </label>
                  </div>
                  <div class="form-check form-check-success">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="incident_status" value="done">
                      Done
                    </label>
                  </div>
                  <div class="form-check form-check-danger">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="incident_status" value="pending">
                      Pending/ Need Follow Up
                    </label>
                  </div>
                </div>
 
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <!-- <button class="btn btn-light">Cancel</button> -->
              </div>
            </div>
          </form>
       </div>
    </div>
  </div>
</div>

<script>
  
  var app = new Vue({
    el: '#app',
    components: {
      vuejsDatepicker,
      
    }

  });

  $(document).ready(function() {
    $("#location").selectize({
      options: [
        {series: 'main_office', value: 1, name: "IT"},
        {series: 'main_office', value: 2, name: "Development"},
        {series: 'main_office', value: 3, name: "Marketing"},
        {series: 'main_office', value: 4, name: "Accounting"},
        {series: 'main_office', value: 5, name: "HRD/ GA"}
      ],
      optgroups: [
        {value: 'main_office', label: 'Main Office'},
        {value: 'produksi', label: 'Produksi'}
      ],
      optgroupField: 'series',
      labelField: 'name',
      searchField: ['name'],
      placeholder: "Choose Location",
      delimiter: ","
    });
});

// $(document).ready(function(){
//   $('#select-beast').selectize();
// });
  
</script>

<!-- <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Remark</label>
                  <textarea class="form-control" id="incident_remark" name="incident_remark" rows="3"></textarea>
                  
                </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div> -->