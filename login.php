<?php
  session_start();
  if(isset($_SESSION['user_session_id'])){
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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Web Hosting Service - Abid Hasan" />
    <meta name="author" content="Abid Hasan" />
    <title>Client Area - Abid Hasan</title>
    <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Animation Javascript -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Favicon -->
    <link href="assets/img/brand/favicon.png" rel="icon" type="image/png" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Icons -->
    <link href="assets/vendor/nucleo/css/nucleo.css" rel="stylesheet" />
    <link
      href="assets/vendor/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <!-- Argon CSS -->
    <link
      type="text/css"
      href="assets/css/argon.css?v=1.1.0"
      rel="stylesheet"
    />
  </head>

  <body>
    <main>
      <section class="section-shaped">
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
                <div class="card-body px-lg-4 py-lg-5">
                  <div class="row">
                    <div class="col text-center">
                      <img class="text-center" src="assets/img/brand/typographyColor.png" alt="Logo Abid Hasan" height="100px" />
                    </div>
                  </div>
                  <div class="text-center text-muted mb-4">
                    <small>Or sign in with credentials</small>
                  </div>
                  <form>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="ni ni-email-83"></i>
                          </span>
                        </div>
                        <input id="login_email" class="form-control" placeholder="Email" type="email" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"
                            ><i class="ni ni-lock-circle-open"></i>
                          </span>
                        </div>
                        <input id="login_password" class="form-control" placeholder="Password" type="password" />
                      </div>
                    </div>
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id="customCheckLogin" type="checkbox" />
                      <label class="custom-control-label" for="customCheckLogin" >
                        <span>Remember me</span>
                      </label>
                    </div>
                    <div class="text-center">
                      <button onclick="user_login()" type="button" class="btn btn-primary my-4"> Sign in </button>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <a href="recovery.php" class="text-dark"><small>Forgot password?</small></a>
                      </div>
                      <div class="col-6">
                        <a href="register.php" class="text-dark"><small>Create new account</small></a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-6">
                  
                </div>
                <div class="col-6 text-right">
                  
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
            <h3 class="text-primary font-weight-light mb-2">
              Thank you for supporting us!
            </h3>
            <h4 class="mb-0 font-weight-light">
              Let's get in touch on any of these platforms.
            </h4>
          </div>
          <div class="col-lg-6 text-lg-center btn-wrapper">
            <a
              target="_blank"
              href="https://twitter.com/abidtkg"
              class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg"
              data-toggle="tooltip"
              data-original-title="Follow us"
            >
              <i class="fa fa-twitter"></i>
            </a>
            <a
              target="_blank"
              href="https://www.facebook.com/abid.hax"
              class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg"
              data-toggle="tooltip"
              data-original-title="Like us"
            >
              <i class="fa fa-facebook-square"></i>
            </a>
            <a
              target="_blank"
              href="https://dribbble.com/abidtkg"
              class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round"
              data-toggle="tooltip"
              data-original-title="Follow us"
            >
              <i class="fa fa-dribbble"></i>
            </a>
            <a
              target="_blank"
              href="https://github.com/abidtkg"
              class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg"
              data-toggle="tooltip"
              data-original-title="Star on Github"
            >
              <i class="fa fa-github"></i>
            </a>
          </div>
        </div>
        <hr />
        <div class="row align-items-center justify-content-md-between">
          <div class="col-md-6">
            <div class="copyright">
              &copy; 2019
              <a href="https://abidtkg.com" target="_blank">Abid Hasan</a>.
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav nav-footer justify-content-end">
              <li class="nav-item">
                <a
                  href="https://abidtkg.com/about"
                  class="nav-link"
                  target="_blank"
                  >About Us</a
                >
              </li>
              <li class="nav-item">
                <a
                  href="http://abidtkg.com/blog"
                  class="nav-link"
                  target="_blank"
                  >Blog</a
                >
              </li>
              <li class="nav-item">
                <a
                  href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md"
                  class="nav-link"
                  target="_blank"
                  >MIT License</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Core -->
    <script src="assets/js/api.js"></script>
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
