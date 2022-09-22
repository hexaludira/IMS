<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Incident Management System</title>
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
  <?php 
    $session = session();
    $login = $session->getFlashData('login');
    $username = $session->getFlashData('username');
    $password = $session->getFlashData('password');

  ?>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo text-center">
                <img src="<?=base_url('assets');?>/images/HWP.png" alt="logo">
              </div>
              <h4>Silahkan Login</h4>
              <!-- <h6 class="font-weight-light">Sign in to continue.</h6> -->
              <?php if($username){?>
                <p style="color:red"><?= $username?></p>
              <?php } ?>

              <?php if($password){?>
                <p style="color:red"><?= $password?></p>
              <?php } ?>

              <?php if($login) { ?>
                <p style="color:green"><?= $login ?></p>
              <?php } ?>

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
              
              <form class="pt-3" method="POST" action="<?= base_url('Auth/valid_login')?>">
                <!-- <?= base_url('Auth/valid_login')?> -->
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="mt-3">
                  <button type="submit" name='login' class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >MASUK</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <!-- <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div> -->
                  <!-- <a href="#" class="auth-link text-black">Forgot password?</a> -->
                </div>
                <!-- <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div> -->
                <div class="text-center mt-4 font-weight-light">
                  Belum punya akun? <a href="<?= base_url('auth/register');?>" class="text-primary">Daftar</a>
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
  <script src="<?=base_url('assets');?>/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->

  <script src="<?=base_url('assets');?>/js/off-canvas.js"></script>
  <script src="<?=base_url('assets');?>/js/hoverable-collapse.js"></script>
  <script src="<?=base_url('assets');?>/js/template.js"></script>
  <script src="<?=base_url('assets');?>/js/settings.js"></script>
  <script src="<?=base_url('assets');?>/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
