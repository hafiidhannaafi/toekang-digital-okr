<!DOCTYPE html>
<html lang="en"> 
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css --> 
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.svg" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="user_name" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="user_email" placeholder="Email">
                </div>
                <div class="form-group">
                 {{-- <label>Position</label> --}}
                  <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                    <option selected disabled>Position</option>
                    <option>Content Planner</option>
                    <option>Copywriter</option>
                    <option>Graphic Designer</option>
                    <option>Video Editor</option>
                    <option>Sales</option>
                    <option>Sales Manager</option>
                    <option>Customer Service</option>
                    <option>Web Developer</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-danger text-light btn-lg font-weight-medium auth-form-btn" href="/dashboard">SIGN UP</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="/signin" class="text-primary">Login</a>
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
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js --> 
  <script src="js/hoverable-collapse.js"></script> 
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <style>
    .auth-form-light {
      border-radius:1rem;
    }
    .content-wrapper{
      background: #650000;
    }
    .btn{
      background: #c90000;
    }
</style>
</body> 
</html>
