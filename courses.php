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
  <title>Courses</title>
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
            <div
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
                <li class="nav-item">
                  <a class="nav-link" href="University.php">Universities</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Scholarship.php"> Scholarships</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
              </ul>
                <ul style="margin-left: 40px; margin-right: 40px;" class="nav navbar-nav nav-flex-icons">

                    <!-- user -->
                    <li style="display:none; padding-bottom: 5px; padding-top: 2px; " id="navbar-static-user" class="nav-item dropdown">

                        <button  class="btn btn-light btn-block dropdown-toggle" aria-haspopup="true" aria-expanded="false" type="button" id="navbar-user" data-toggle="dropdown">tamer
                            <span class="caret"></span></button>

                        <div class="dropdown-menu dropdown-menu-right dropdown-info " aria-labelledby="navbar-tools">
                            <a class="dropdown-item waves-effect waves-light" href="">Profile</a>
                            <a class="dropdown-item waves-effect waves-light" href="">Courses</a>
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
                <h2>Courses</h2>
                <div class="page_link">
                  <a href="index.php">Home</a>
                  <a href="courses.php">Courses</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Our Popular Courses</h2>
                        <p>
                            Replenish man have thing gathering lights yielding shall you
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
    <?php
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "web_project";
    $i = 0;
    $conn = new mysqli($servername, $user, $pass, $dbname);
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }
    else {
        $sql = "select * from `course`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            for ($i = 0; $i < $result->num_rows; $i++) {
                $row1 = $result->fetch_assoc();
                $CourseName = $row1['Course_Name'];
                $CourseID = $row1['CourseID'];
                $CoursePic = $row1['picture'];
                $sql2 ="select * from `instructors_courses` where $CourseID  =  CourseID";
                $result2 = $conn->query($sql2);
                $row2 = $result2->fetch_assoc();
                $instructorID = $row2['InstructorID'];
                $CourseDescription = $row2['Decription'];
                $sql3 ="select * from `users` where $instructorID = UserID ";
                $result3 = $conn->query($sql3);
                $row3 = $result3->fetch_assoc();
                $UnivID = $row3['UnivID'];
                $Inst_User = $row3['User_Name'];
                $sql4 ="select `Univ_Name` from `university` where $UnivID = UnivID ";
                $result4 = $conn->query($sql4);
                $row4 = $result4->fetch_assoc();
                $UnivName = $row4['Univ_Name'];

                echo "
                <div class=\"col-lg-12\">
                <div class=\" \">
                    <div class=\"single_course\">
                        <div class=\"course_head\">
                            <img width='100%' class=\"img-fluid\" src=$CoursePic alt=\"\" />
                        </div>
                        <div class=\"course_content\">
                            <span class=\"tag mb-4 d-inline-block\">$UnivName</span>
                            <h4 class=\"mb-3\">                       
                                <a name='courseTag' href=\"course-details.php?coursename=$CourseName\">$CourseName</a>                          
                            </h4>
                            <p>$CourseDescription</p>
                            <div
                                    class=\"course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4\"
                            >
                                <div class=\"authr_meta\">
                                    <img src=\"img/courses/author1.png\" alt=\"\" />
                                    <span class=\"d-inline-block ml-2\">$Inst_User</span>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                    ";

                if(!isset($username)){
                    echo "
                    <script>
                    document.getElementsByName('courseTag')[$i].href='courses.php?member=\"no\"';
</script>";
                }
            }
            if(isset($_GET['member'])) {
                echo "
                    <script>  $(document).ready(function () {
                                swal('You are not a member');
                                });</script>";
            }
        }
    }
    ?>
            </div>
        </div>
    </div>
    <!--================ End Popular Courses Area =================-->

    <!--================ Start Registration Area =================-->
    <div class="section_gap registration_area">
      <div class="container" style="
    margin-left: 0px;
    margin-right: 0px;
    padding-right: 15px;
    padding-left: 15px;
">
        <div class="row align-items-center">
          <!--    <div class="col-lg-3">
                  <div class="row clock_sec clockdiv" id="clockdiv">
                      <div class="col-lg-12">
                          <h1 class="mb-3">Register Now</h1>
                          <p>
                              There is a moment in the life of any aspiring astronomer that
                              it is time to buy that first telescope. It’s exciting to think
                              about setting up your own viewing station.
                          </p>
                      </div>




                  </div>
              </div>-->

          <div class="col-lg-4" style="
    margin-left: 0px;
">
            <div class="register_form" style="
    padding-top: 30px;
">
              <h3 style="
    border-bottom-width: 5px;
    margin-bottom: 20px;
">Welcome</h3>


              <form class="form_area" id="LogIn" action="mail.html" method="post">
                <div class="row">
                  <div class="col-lg-12 form_group">
                    <input class="glyphicon glyphicon-user" name="name" placeholder="Username or ID" required="" type="text">
                    <input name="name" placeholder="Password" required="" type="password">

                  </div>
                  <div class="col-lg-12 text-center">
                    <button class="primary-btn" style="
    margin-bottom: 30px;
">log in</button>
                  </div>
                </div>
              </form>
              <h6>Not a member ? </h6>
              <a href="javascript:void(0)" id="showjoinus" style="

                     margin-top: 0px;
                     padding-top: 0px;
                     ">Register now</a>
            </div>
          </div>
          <script>
            $(document).ready(function(){
              $("#showjoinus").click(function(){
                $("#join_us.collapse").collapse('show');
              });
            });
          </script>
          <div class="col-lg-8" style=" margin-left: 0px;">

            <div style="padding-top: 40px; padding-bottom: 40px;" id="join_us" class="main-container register_form collapse">
              <h3>Join Us</h3>
              <p>It is high time for learning</p>

              <form class="form_area md-form" id="SignUp" action="mail.html" method="post">
                <div class="row">


                  <div class="col-lg-6 form_group mt-10">
                    <input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="" class="single-input">
                  </div>
                  <div class="mt-10 col-lg-6 form_group">
                    <input type="text" name="second_name" placeholder="Second Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Second Name'" required="" class="single-input">
                  </div>
                  <div class="mt-10 col-lg-6 form_group">
                    <input type="text" name="third_name" placeholder="Third Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Third Name'" required="" class="single-input">
                  </div>
                  <div class="mt-10 col-lg-6 form_group">
                    <input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="" class="single-input">
                  </div>
                  <div class="mt-10 col-lg-12 form_group">
                    <input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" class="single-input">
                    <i class=" input-icon js-btn-calendar"></i>
                  </div>

                  <div class="mt-10 col-lg-12 form_group">
                    <input placeholder="Birth Date" class="single-input-secondary" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">

                  </div>

                  <div class="input-group-icon mt-10 col-lg-6 form_group">
                    <div class="form-select" id="default-select3">
                      <select style="display: none;">
                        <option value="1">Gender</option>
                        <option value="1">Male</option>
                        <option value="1">Female</option>
                      </select><div class="nice-select" tabindex="0" style="
    padding-left: 12px;
    padding-right: 0px;
"><span class="current">Gender</span><ul class="list"><li data-value="1" class="option selected focus">Gender</li><li data-value="1" class="option">Male</li><li data-value="1" class="option">Female</li></ul></div>

                    </div>
                  </div>
                  <div class="input-group-icon mt-10 mb-15 col-lg-6 form_group" style="
    padding-left: 15px;
    padding-right: 15px;
">
                    <div class="form-select" id="default-select4">
                      <select style="display: none;">
                        <option value="1">Register as</option>
                        <option value="1">Student</option>
                        <option value="1">Instructor</option>
                      </select><div class="nice-select" tabindex="0" style="
    padding-left: 12px;
    padding-right: 0px;
"><span class="current">Register as</span><ul class="list"><li data-value="1" class="option selected focus">Register as</li><li data-value="1" class="option">Student</li><li data-value="1" class="option">Instructor</li></ul></div>

                    </div>
                  </div>
                  <div class="input-group-icon mt-10 mb-15 col-lg-12 form_group">
                    <div class="form-select" id="default-select5">
                      <select style="display: none;">
                        <option value="1">University</option>
                        <option value="1">An-Najah National University</option>
                        <option value="1"></option>
                        <option value="1"></option>
                        <option value="1"></option>
                      </select><div class="nice-select" tabindex="0" style="
    padding-left: 12px;
"><span class="current">An-Najah National University</span><ul class="list"><li data-value="1" class="option">University</li><li data-value="1" class="option focus selected">An-Najah National University</li><li data-value="1" class="option"></li><li data-value="1" class="option"></li><li data-value="1" class="option"></li></ul></div>

                    </div>
                  </div>


                  <p>Upload a file verifying your university's membership: </p>
                  <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="customFile" name="filename">
                    <label class="custom-file-label selected" for="customFile"></label>
                  </div>
                  <script>
                    // Add the following code if you want the name of the file appear on select
                    $(".custom-file-input").on("change", function() {
                      var fileName = $(this).val().split("\\").pop();
                      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                    });
                  </script>







                  <div class="col-lg-12 text-center">
                    <button class="primary-btn">sign up</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!--================ End Registration Area =================-->

    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Awesome Feature</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-student"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Scholarship Facility</h4>
                <p>
                  Search for Scholarship on universities around the world.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-book"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">search Online Course</h4>
                <p>
                  now you can see your course online and you can add items to it.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-earth"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Online Chatting</h4>
                <p>
                  Chat with your instructor and the student in the course.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Feature Area =================-->

    <!--================ Start footer Area  =================-->
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>
