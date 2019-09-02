<?php
  if(isset($_SESSION['session_id'])){
    header("Location: dash/");
  }else{
?>
<!--

=========================================================
* Argon Design System - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Web Hosting Service - Abid Hasan">
  <meta name="author" content="Abid Hasan">
  <title>Sign Up - Abid Hasan</title>
  <!-- AJAX -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Session Controle -->
  <script>
    //$.ajax({});
  </script>
  <!-- Favicon -->
  <link href="assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="assets/css/argon.css?v=1.1.0" rel="stylesheet">
</head>

<body>
  <header class="header-global">
    <navxx id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="index.php">
          <img src="assets/img/brand/white.png" alt="brand">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="index.php">
                  <img src="assets/img/brand/blue.png" alt="brand">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://www.facebook.com/abid.hax" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
                <i class="fa fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://www.instagram.com/abidtkg" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
                <i class="fa fa-instagram"></i>
                <span class="nav-link-inner--text d-lg-none">Instagram</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://twitter.com/abidtkg" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
                <i class="fa fa-twitter-square"></i>
                <span class="nav-link-inner--text d-lg-none">Twitter</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://github.com/abidtkg" target="_blank" data-toggle="tooltip" title="Star us on Github">
                <i class="fa fa-github"></i>
                <span class="nav-link-inner--text d-lg-none">Github</span>
              </a>
            </li>
            <li class="nav-item d-none d-lg-block ml-lg-4">
              <a href="index.php" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon">
                  <i class="fa fa-send mr-2"></i>
                </span>
                <span class="nav-link-inner--text">SIGN IN</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </navxx>
  </header>
  <main>
    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              <!-- <div class="card-header bg-white pb-5">
                <div class="text-muted text-center mb-3"><small>Sign up with</small></div>
                <div class="text-center">
                  <a href="#" class="btn btn-neutral btn-icon mr-4">
                    <span class="btn-inner--icon">
                      <img src="assets/img/icons/common/github.svg" alt="image">
                    </span>
                    <span class="btn-inner--text">Github</span>
                  </a>
                  <a href="#" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon">
                      <img src="assets/img/icons/common/google.svg" alt="image">
                    </span>
                    <span class="btn-inner--text">Google</span>
                  </a>
                </div>
              </div> -->
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>Or sign up with credentials</small>
                </div>
                <form>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input class="form-control" placeholder="Name" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" placeholder="Email" type="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="Password" type="password">
                    </div>
                  </div>
                  <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div>
                  <div class="row my-4">
                    <div class="col-12">
                      <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                        <label class="custom-control-label" for="customCheckRegister"><span>I agree with the <a href="#">Privacy Policy</a></span></label>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary mt-4">Create account</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="container">
      <div class="row row-grid align-items-center mb-5">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
          <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <a target="_blank" href="https://twitter.com/abidtkg" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-twitter"></i>
          </a>
          <a target="_blank" href="https://www.facebook.com/abid.hax" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Like us">
            <i class="fa fa-facebook-square"></i>
          </a>
          <a target="_blank" href="https://dribbble.com/abidtkg" class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-dribbble"></i>
          </a>
          <a target="_blank" href="https://github.com/abidtkg" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Star on Github">
            <i class="fa fa-github"></i>
          </a>
        </div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2019 <a href="https://abidtkg.com" target="_blank">Abid Hasan</a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="https://abidtkg.com/about" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://abidtkg.com/blog" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Core -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/popper/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="assets/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <!-- <script src="assets/js/argon.js?v=1.1.0"></script> -->
</body>
</html>
<?php
  }
?>