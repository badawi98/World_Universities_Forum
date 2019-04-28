<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/icon.png" type="image/png" />
    <title>Contact</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
      <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/36/10a/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/36/10a/util.js"></script></head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area white-header">
      <div class="main_menu">

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.php">
              <img width="32" hieght="32" src="img/1321027.png" style=" display: inline-block; bottom: 3px; position:relative;" alt="">
              <h3 style=" margin-left:5px; color:white; display: inline-block; position: relative; top:5px;" class="mb-3">Universities Forum</h3>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div style="max-height:260px;overflow-y: visible"
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about-us.php">About</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a class="nav-link" href="University.php"> Universities </a>
                    <li class="nav-item">
                      <a class="nav-link" href="courses.php">Courses</a>
                    </li>
                <li class="nav-item submenu dropdown">
                  <a class="nav-link" href="Scholarship.php"> Scholarship</a>
                </li>
              </ul>
                <ul style="margin-left: 40px; margin-right: 40px;" class="nav navbar-nav nav-flex-icons">

                    <!-- user -->
                    <li style="display:none; padding-bottom: 5px; padding-top: 2px; " id="navbar-static-user" class="nav-item dropdown">

                        <button  class="btn btn-light btn-block dropdown-toggle" aria-haspopup="true" aria-expanded="false" type="button" id="navbar-user" data-toggle="dropdown">tamer
                            <span class="caret"></span></button>

                        <div class="dropdown-menu dropdown-menu-right dropdown-info " aria-labelledby="navbar-tools">
                            <a class="dropdown-item waves-effect waves-light" href="">Profile</a>
                            <a id="courses" class="dropdown-item waves-effect waves-light" href="">Courses</a>
                            <form method="post" action="index.php">
                                <button onclick="  $(document).ready(function () {
                                swal('Good Bye');
                                });" value="logout" name="logout" id="logout" class="dropdown-item waves-effect waves-light" href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Log out</button>
                            </form>




                        </div>
                    </li>

                    <?php

                    if (isset($_POST['logout'])) {
                        unset($_SESSION['username']);
                        unset($_SESSION['firstTime']);
                        $logout=$_POST['logout'];
                    }

                    ?>

                    <!-- Login / register -->
                    <a id="loginfisrt" href="index.php#regst" class="primary-btn ml-sm-3 ml-0" style="margin-bottom: 5px; margin-top:2px; padding-left: 20px;padding-right: 20px;"
                       onclick="$('#navbarSupportedContent').collapse('hide')
                        focus()">Log In</a>
                    <script type="text/javascript">
                        function focus() {
                            document.getElementById("login_username").focus();
                        }
                    </script>
                </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <?php
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "
                                    <script> 
                                       document.getElementById('courses').href='courses.php?username=$username';
                                       document.getElementById('loginfisrt').style.display='none';
                                        document.getElementById('navbar-static-user').style.display='inline-block';
                                        document.getElementById('navbar-user').innerText='👤 $username';
                                       
                                </script>";
    }
    ?>
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Contact Us</h2>
                <div class="page_link">
                  <a href="index.php">Home</a>
                  <a href="contact.php">Contact</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="contact_info">
              <div class="info_item">
                <i class="ti-home"></i>
                <h6>Palestine, Nablus</h6>
                <br>
              </div>
              <div class="info_item">
                <i class="ti-headphone"></i>
                <h6><a href="#">00 (970) 599 988 122</a></h6>
                <p>Sat to Fri 9am to 6 pm</p>
              </div>
              <div class="info_item">
                <i class="ti-email"></i>
                <h6><a href="#">world.universities.forum<br>@gmail.com</a></h6>
                <p>Send us your query anytime!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <form
              class="row contact_form"
              method="post"
              id="contactForm"
              novalidate="novalidate"
            >
              <div class="col-md-6">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Enter your name"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'"
                    required=""
                  />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter email address"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'"
                    required=""
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="subject"
                    name="subject"
                    placeholder="Enter Subject"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Subject'"
                    required=""
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="message"
                    id="message"
                    rows="1"
                    placeholder="Enter Message"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Message'"
                    required=""
                  ></textarea>
                </div>
              </div>
              <div class="col-md-12 text-right">
                  <a href="mailto: world.universities.forum@gmail.com">
                <button type="submit" value="submit" class="btn primary-btn">
                  Send Message
                </button>
                  </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--================Contact Area =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="index.php">Home Page</a></li>
                        <li><a href="about-us.php">About us</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="Scholarship.php">Scholarship</a></li>
                        <li><a href="courses.php">courses</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="courses.php">Courses</a></li>
                        <li><a href="Scholarship.php">Scholarship</a></li>
                        <li><a href="courses.php">Chat</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="about-us.php">About</a></li>
                        <li><a href="https://colorlib.com/wp/template/edustage/" target="_blank">ColorLib</a></li>
                    </ul>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between" align="center">
                <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved</i><a href="https://colorlib.com" target="_blank"></a>

                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="https://www.facebook.com/badawi.wawi" target="_blank"><i class="ti-facebook"></i></a>
                    <a href="https://twitter.com/badawi13" target="_blank"><i class="ti-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>    <!--================ End footer Area  =================-->

    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="ti-close"></i>
            </button>
            <h2>Thank you</h2>
            <p>Your message is successfully sent...</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="ti-close"></i>
            </button>
            <h2>Sorry !</h2>
            <p>Something went wrong</p>
          </div>
        </div>
      </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>
