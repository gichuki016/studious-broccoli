<?php
require_once "Utils.php";
session_start();
function getHeader()
{
    echo '<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap Template</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="/assets/css/mdb.min.css" rel="stylesheet">

  <style>

    html,
        body,
        header,
        .view {
          height: 100vh;
        }

        @media (max-width: 740px) {
          html,
          body,
          header,
          .view {
            height: 815px;
          }
        }

        @media (min-width: 800px) and (max-width: 850px) {
          html,
          body,
          header,
          .view  {
            height: 650px;
          }
        }

        .intro-2 {
            background: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img%20(11).jpg")no-repeat center center;
            background-size: cover;
        }
        .top-nav-collapse {
            background-color: #3f51b5 !important;
        }
        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5 !important;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5!important;
            }
        }

        .card {
            background-color: rgba(229, 228, 255, 0.2);
        }
        .md-form label {
            color: #ffffff;
        }
        h6 {
            line-height: 1.7;
        }


        .card {
            margin-top: 30px;
            /*margin-bottom: -45px;*/

        }

        .md-form input[type=text]:focus:not([readonly]),
        .md-form input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #8EDEF8;
            box-shadow: 0 1px 0 0 #8EDEF8;
        }
        .md-form input[type=text]:focus:not([readonly])+label,
        .md-form input[type=password]:focus:not([readonly])+label {
            color: #8EDEF8;
        }

        .md-form .form-control {
            color: #fff;
        }


    </style>

</head>

<body>



';
}
function requiresLogin(){
    if (!isset($_SESSION["username"])|| !isset($_SESSION["email"])){
        session_destroy();
        header('location: /login');
        exit();
    }
}
function endHeader(){
    echo ' </header>';
}
function getNavBar()
{
    echo '
     <!--Main Navigation-->

<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#"><strong></strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/profile">Profile</a>
            </li>
          </ul>
          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
      </div>
    </nav>

  <!--Main Navigation-->
   
';
}
function getRegistrationForm(){
    echo ' <!--Intro Section-->
    <section class="view intro-2">
      <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">
<form id="login" method="post" action="../../views/layout/Utils.php" class="needs-validation">
              <!--Form with header-->
              <div class="card wow fadeIn" data-wow-delay="0.3s">
                <div class="card-body">

                  <!--Header-->
                  <div class="form-header purple-gradient">
                    <h3><i class="fas fa-user mt-2 mb-2"></i> Log in:</h3>
                  </div>

                  <!--Body-->
                  <div class="md-form">
                    <i class="fas fa-user prefix white-text"></i>
                    <input type="text" id="orangeForm-name" class="form-control" name="name">
                    <label for="orangeForm-name">Your name</label>
                  </div>
                   <div class="md-form">
                    <i class="fas fa-user prefix white-text"></i>
                    <input type="text"  class="form-control" name="first_name">
                    <label for="orangeForm-name">First name</label>
                  </div> 
                  <div class="md-form">
                    <i class="fas fa-user prefix white-text"></i>
                    <input type="text"  class="form-control" name="last_name">
                    <label for="orangeForm-name">Last name</label>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-envelope prefix white-text"></i>
                    <input type="text" id="orangeForm-email" name="email" class="form-control">
                    <label for="orangeForm-email">Your email</label>
                  </div>

                  <div class="md-form">
                    <i class="fas fa-lock prefix white-text"></i>
                    <input type="password" id="orangeForm-pass" name="password" class="form-control">
                    <label for="orangeForm-pass">Your password</label>
                  </div>

                  <div class="text-center">
                    <button class="btn purple-gradient btn-lg" type = \'submit\' value = \'submit\' name= \'register\'>Sign up</button>
                    <hr>
                    <div class="inline-ul text-center d-flex justify-content-center">
                      <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text"></i></a>
                      <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text"> </i></a>
                      <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text"> </i></a>
                    </div>
                  </div>

                </div>
              </div>
              <!--/Form with header-->
</form>
            </div>
          </div>
        </div>
      </div>
    </section>';
}

function getFoorter()
{
    echo '


  
  
    <!-- Footer -->
    <footer class="page-footer pt-4 mt-4 indigo text-center text-md-left">

        <!-- Footer Links -->
        <div class="container">
            <div class="row">

                <!-- First column -->
                <div class="col-md-6">
                    <h6 class="text-uppercase font-weight-bold">Footer Content</h6>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div>
                <!-- First column -->

                <!-- Second column -->
                <div class="col-md-3">
                    <h6 class="text-uppercase font-weight-bold">Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                    </ul>
                </div>
                <!-- Second column -->

                <!-- Third column -->
                <div class="col-md-3">
                    <h6 class="text-uppercase font-weight-bold">Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                    </ul>
                </div>
                <!-- Third column -->
            </div>
        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                &copy; 2021 Copyright: <a href="https://premiumwriters.top/"> Moffat</a>

            </div>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
<!--  SCRIPTS  -->
  <!-- JQuery -->
  <script type="text/javascript" src="/assets/js/jquery.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="/assets/js/popper.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="/assets/js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="/assets/js/mdb.js"></script>
  <script>
    new WOW().init();
    $(\'#navId a\').click(e => {
    		e . preventDefault();
    		$(this) . tab(\'show\');
    	});</script>';
    echo "
<script>
 (function () {
                'use strict';
                window.addEventListener('load', function () {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
  </script>
<!-- Optional JavaScript -->

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"
        integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\"
        crossorigin=\"anonymous\"></script>
        
</body>
</html>
";

}