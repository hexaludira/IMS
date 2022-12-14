<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Incident Management Report</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url('assets');?>/images/HWP.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?=base_url('assets');?>/images/HWP.png" alt="logo">
              </div>
              <h4>Hari gini belum punya akun?</h4>
              <h6 class="font-weight-light">Ayo daftar lurr...</h6>
              
              <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
              <form method="POST" class="pt-3" action="<?= base_url('Auth/valid_register')?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username" name="username">
                </div>
                <!-- <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div> -->
                
                <div class="form-group">
                  <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="divisi" >
                    <option value="" disabled selected>Pilih divisi</option>
                    <option value="Administrasi">Administrasi</option>
                    <option value="Infra">Infra</option>
                    <option value="Security">Security</option>
                    <option value="Aplikasi">Aplikasi</option>
                    <option value="Multi Tasking">Multi Tasking</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <!-- <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div> -->
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">DAFTAR</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Sudah punya akun? <a href="<?=base_url('auth/login');?>" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="<?= base_url('assets')?>/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url('assets')?>/js/off-canvas.js"></script>
  <script src="<?= base_url('assets')?>/js/hoverable-collapse.js"></script>
  <script src="<?= base_url('assets')?>/js/template.js"></script>
  <script src="<?= base_url('assets')?>/js/settings.js"></script>
  <script src="<?= base_url('assets')?>/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
