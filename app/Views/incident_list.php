
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
          <form class="forms-sample" id="app" method="POST" action="<?= base_url('Process/insert_incident');?>" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label><h4>Incident</h4></label>
                  <input type="text" class="form-control" id="incident_name" name="incident_name" placeholder="Ex: Listrik mati">
                </div>
                <div class="form-group">
                  <label><h4>Date</h4></label>
                 <input type="date" name="incident_date" class="form-control" placeholder="<?php date_default_timezone_set("Asia/Jakarta");echo date("m d Y");?>">

                  <!-- <vuejs-datepicker input-class="form-control" type="text" placeholder="dd mm yyyy" name="incident_date" typeable value="<?php date_default_timezone_set("Asia/Jakarta");echo date("m d Y");?>"></vuejs-datepicker> -->
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
                  <input type="text" class="form-control" name="incident_affected" placeholder="Ex: SEA/ Cell A01">
                </div>
                <div class="form-group">
                  <label><h4>Picture</h4></label>
                  <input type="file" class="form-control file-upload-info" accept="image/*" onchange="updatePreview(this, 'image-preview')" name="incident_picture">
                  <!-- <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Choose File</button>
                  </span> -->
                </div>
                <div class="form-group">
                  <img id="image-preview" src="https://www.tutsmake.com/wp-content/uploads/2019/01/no-image-tut.png" class="" width="200" height="150"/>
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

  // var app = new Vue({
  //   el: '#app',
  //   components: {
  //     vuejsDatepicker,
      
  //   }

  // });

  

  //preview gambar
  function updatePreview(input, target) {
    let file = input.files[0];
    let reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = function () {
      let img = document.getElementById(target);
      img.src = reader.result;
    }
  }

  $(document).ready(function() {
    $("#location").selectize({
      options: [
        {series: 'main_office', value: 'IT', name: "IT"},
        {series: 'main_office', value: 'Development', name: "Development"},
        {series: 'main_office', value: 'Marketing', name: "Marketing"},
        {series: 'main_office', value: 'Accounting', name: "Accounting"},
        {series: 'main_office', value: 'HRD/ GA', name: "HRD/ GA"},
        {series: 'produksi', value: 'Gedung A', name: "Gedung A"},
        {series: 'produksi', value: 'Gedung B', name: "Gedung B"}
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

tinymce.init({
  selector: '#incident_detail',
  plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
  menubar: 'file edit view insert format tools table help',
  toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
  toolbar_sticky: true,
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