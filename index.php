<?php session_start();
?>
<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/1321027.png" type="image/png">
    <title>World Universities Forum</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="canonical" href="https://mdbootstrap.com/snippets/jquery/temp/590679/">

    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/36/10a/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/36/10a/util.js"></script></head>

<body>
<!--================ Start Header Menu Area =================-->
<header class="header_area navbar_fixed">
    <div class="main_menu">
        <div class="search_input" id="search_input_box" style="display: none;">
            <div class="container">
                <form class="d-flex justify-content-between" method="" action="">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>

        <nav  class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="" href="index.php" style="
    margin-right: 0px;
">
                    <img width="32" hieght="32" src="img/1321027.png" style=" display: inline-block; bottom: 3px; position:relative;" alt="">
                    <h3 style=" margin-left:5px; display: inline-block; position: relative; top:5px;" class="mb-3">Universities Forum</h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="University.php">Universities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="courses.php">Courses</a>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a class="nav-link" href="Scholarship.php">Scholarship</a>
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
                            <a class="dropdown-item waves-effect waves-light" href="Profile.php">Profile</a>
                            <a class="dropdown-item waves-effect waves-light" href="">Courses</a>
                            <form method="post" action="index.php">
                                <button onclick="alert('logged out')" value="logout" name="logout" id="logout" class="dropdown-item waves-effect waves-light" href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Log out</button>
                            </form>




                        </div>
                    </li>

                        <?php
                            if (isset($_POST['logout'])) {
                                unset($_SESSION['username']);
                                unset($_SESSION['firstTime']);
                                unset($_SESSION['notstdntftime']);
                                $logout=$_POST['logout'];
                            }

                        ?>

                        <!-- Login / register -->
                        <a id="loginfisrt" href="#regst" class="primary-btn ml-sm-3 ml-0" style="margin-bottom: 5px; margin-top:2px; padding-left: 20px;padding-right: 20px;"
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
<!--================ End Header Menu Area =================-->

<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h2 class="text-uppercase mt-4 mb-5" style="font-size: 30pt">
                            Best online education service In the world
                        </h2>
                        <div>
                            <a href="#" class="primary-btn ml-sm-3 ml-0">Get Started</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->

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

<!--================ Start Popular Courses Area =================-->
<div class="popular_courses">
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
            <!-- single course -->
            <div class="col-lg-12">
                <div class="owl-carousel active_course owl-loaded owl-drag">





                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1140px, 0px, 0px); transition: all 0s ease 0s; width: 3420px;"><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="single_course">
                                    <div class="course_head">
                                        <img class="img-fluid" src="img/courses/c1.jpg" alt="">
                                    </div>
                                    <div class="course_content">
                                        <span class="price">$25</span>
                                        <span class="tag mb-4 d-inline-block">design</span>
                                        <h4 class="mb-3">
                                            <a href="course-details.php">Custom Product Design</a>
                                        </h4>
                                        <p>
                                            One make creepeth man bearing their one firmament won't fowl
                                            meat over sea
                                        </p>
                                        <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                            <div class="authr_meta">
                                                <img src="img/courses/author1.png" alt="">
                                                <span class="d-inline-block ml-2">Cameron</span>
                                            </div>
                                            <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                                                <span class="meta_info"><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="single_course">
                                    <div class="course_head">
                                        <img class="img-fluid" src="img/courses/c2.jpg" alt="">
                                    </div>
                                    <div class="course_content">
                                        <span class="price">$25</span>
                                        <span class="tag mb-4 d-inline-block">design</span>
                                        <h4 class="mb-3">
                                            <a href="course-details.php">Social Media Network</a>
                                        </h4>
                                        <p>
                                            One make creepeth man bearing their one firmament won't fowl
                                            meat over sea
                                        </p>
                                        <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                            <div class="authr_meta">
                                                <img src="img/courses/author2.png" alt="">
                                                <span class="d-inline-block ml-2">Cameron</span>
                                            </div>
                                            <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                                                <span class="meta_info"><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="single_course">
                                    <div class="course_head">
                                        <img class="img-fluid" src="img/courses/c3.jpg" alt="">
                                    </div>
                                    <div class="course_content">
                                        <span class="price">$25</span>
                                        <span class="tag mb-4 d-inline-block">design</span>
                                        <h4 class="mb-3">
                                            <a href="course-details.php">Computer Engineering</a>
                                        </h4>
                                        <p>
                                            One make creepeth man bearing their one firmament won't fowl
                                            meat over sea
                                        </p>
                                        <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                            <div class="authr_meta">
                                                <img src="img/courses/author3.png" alt="">
                                                <span class="d-inline-block ml-2">Cameron</span>
                                            </div>
                                            <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                                                <span class="meta_info"><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 350px; margin-right: 30px;"><div class="single_course">
                                    <div class="course_head">
                                        <img class="img-fluid" src="img/courses/c1.jpg" alt="">
                                    </div>
                                    <div class="course_content">
                                        <span class="price">$25</span>
                                        <span class="tag mb-4 d-inline-block">design</span>
                                        <h4 class="mb-3">
                                            <a href="course-details.php">Custom Product Design</a>
                                        </h4>
                                        <p>
                                            One make creepeth man bearing their one firmament won't fowl
                                            meat over sea
                                        </p>
                                        <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                            <div class="authr_meta">
                                                <img src="img/courses/author1.png" alt="">
                                                <span class="d-inline-block ml-2">Cameron</span>
                                            </div>
                                            <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                                                <span class="meta_info"><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 350px; margin-right: 30px;"><div class="single_course">
                                    <div class="course_head">
                                        <img class="img-fluid" src="img/courses/c2.jpg" alt="">
                                    </div>
                                    <div class="course_content">
                                        <span class="price">$25</span>
                                        <span class="tag mb-4 d-inline-block">design</span>
                                        <h4 class="mb-3">
                                            <a href="course-details.php">Social Media Network</a>
                                        </h4>
                                        <p>
                                            One make creepeth man bearing their one firmament won't fowl
                                            meat over sea
                                        </p>
                                        <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                            <div class="authr_meta">
                                                <img src="img/courses/author2.png" alt="">
                                                <span class="d-inline-block ml-2">Cameron</span>
                                            </div>
                                            <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                                                <span class="meta_info"><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 350px; margin-right: 30px;"><div class="single_course">
                                    <div class="course_head">
                                        <img class="img-fluid" src="img/courses/c3.jpg" alt="">
                                    </div>
                                    <div class="course_content">
                                        <span class="price">$25</span>
                                        <span class="tag mb-4 d-inline-block">design</span>
                                        <h4 class="mb-3">
                                            <a href="course-details.php">Computer Engineering</a>
                                        </h4>
                                        <p>
                                            One make creepeth man bearing their one firmament won't fowl
                                            meat over sea
                                        </p>
                                        <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                            <div class="authr_meta">
                                                <img src="img/courses/author3.png" alt="">
                                                <span class="d-inline-block ml-2">Cameron</span>
                                            </div>
                                            <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                                                <span class="meta_info"><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="single_course">
                                    <div class="course_head">
                                        <img class="img-fluid" src="img/courses/c1.jpg" alt="">
                                    </div>
                                    <div class="course_content">
                                        <span class="price">$25</span>
                                        <span class="tag mb-4 d-inline-block">design</span>
                                        <h4 class="mb-3">
                                            <a href="course-details.php">Custom Product Design</a>
                                        </h4>
                                        <p>
                                            One make creepeth man bearing their one firmament won't fowl
                                            meat over sea
                                        </p>
                                        <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                            <div class="authr_meta">
                                                <img src="img/courses/author1.png" alt="">
                                                <span class="d-inline-block ml-2">Cameron</span>
                                            </div>
                                            <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                                                <span class="meta_info"><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="single_course">
                                    <div class="course_head">
                                        <img class="img-fluid" src="img/courses/c2.jpg" alt="">
                                    </div>
                                    <div class="course_content">
                                        <span class="price">$25</span>
                                        <span class="tag mb-4 d-inline-block">design</span>
                                        <h4 class="mb-3">
                                            <a href="course-details.php">Social Media Network</a>
                                        </h4>
                                        <p>
                                            One make creepeth man bearing their one firmament won't fowl
                                            meat over sea
                                        </p>
                                        <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                            <div class="authr_meta">
                                                <img src="img/courses/author2.png" alt="">
                                                <span class="d-inline-block ml-2">Cameron</span>
                                            </div>
                                            <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                                                <span class="meta_info"><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="single_course">
                                    <div class="course_head">
                                        <img class="img-fluid" src="img/courses/c3.jpg" alt="">
                                    </div>
                                    <div class="course_content">
                                        <span class="price">$25</span>
                                        <span class="tag mb-4 d-inline-block">design</span>
                                        <h4 class="mb-3">
                                            <a href="course-details.php">Computer Engineering</a>
                                        </h4>
                                        <p>
                                            One make creepeth man bearing their one firmament won't fowl
                                            meat over sea
                                        </p>
                                        <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                            <div class="authr_meta">
                                                <img src="img/courses/author3.png" alt="">
                                                <span class="d-inline-block ml-2">Cameron</span>
                                            </div>
                                            <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                                                <span class="meta_info"><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"><img src="img/prev.png"></div><div class="owl-next"><img src="img/next.png"></div></div><div class="owl-dots disabled"></div></div>
            </div>
        </div>
    </div>
</div>
<!--================ End Popular Courses Area =================-->

<!--================ Start Registration Area =================-->


<div  id="regst" class="section_gap registration_area">
    <div class="container"
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


                    <form class="form_area" id="LogIn" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <div class="row">
                            <div class="col-lg-12 form_group">
                                <input  id="login_username"  name="username"  placeholder="Username or ID" type="text">
                                <input id="login_password" name="Password" placeholder="Password"  type="password">

                            </div>
                            <div class="col-lg-12 text-center">
                                <button  name="login" value="login" class="primary-btn" style=" margin-bottom: 30px;"
                                           <?php
                                            echo " onclick='make_rqd()'
               
                                                         ";
                                            ?>
                                        >log in</button>
                                <?php
                                echo "
                                <script>
                                    function make_rqd(){
                                        document.getElementById('login_username').required = true;
                                        document.getElementById('login_password').required = true;
                                    }

                                </script>";
                                ?>
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
            <?php

                $username = $Password = $login = "";
                if (isset($_POST["login"])&&$_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["username"])) {
                        echo "";
                    } else {
                        $username = test_input($_POST["username"]);
                    }
                    if (empty($_POST["Password"])) {

                    } else {
                        $Password = htmlspecialchars($_POST["Password"]);
                    }
                    if (empty($_POST["login"])) {


                    } else {
                        $login = $_POST["login"];
                    }
                      $servername = "192.168.1.23";
                      $user = "tamer";
                      $pass = "tamer";
                      $dbname = "web_project";
                      $conn = new mysqli($servername, $user, $pass, $dbname);
                      if ($conn->connect_error) {
                         $die= die("Connection Failed: " . $conn->connect_error);
                         echo "
                         <script>alert('$die');</script>
                         ";
                      } else {
                          if (isset($login)) {
                              $sql = "select * from `Passwords`";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                                  for ($i = 0; $i < $result->num_rows; $i++) {
                                      $row = $result->fetch_assoc();
                                      if ($row["User_Name"] == $username  && $row["Password"] == sha1($Password)) {
                                          break;
                                      }

                                  }
                                  if ($i < $result->num_rows) {

                                      $_SESSION["username"]=$username;
                                      if(isset($_SESSION['firstTime'])) {$_SESSION['firstTime']=false;}
                                      else $_SESSION['firstTime']=true;
                                      if($_SESSION['firstTime']==true){
                                          echo "
                                          <script>alert ('Welcome  $username');</script>";
                                      }
                                      echo "
                                    <script> 
                                        document.getElementById('loginfisrt').style.display='none';
                                        document.getElementById('navbar-static-user').style.display='inline-block';
                                        document.getElementById('navbar-user').innerText='👤 $username';
                                </script>";

                                      #  session_start();
                                      # if (isset($_SESSION['counter'])) {
                                      #    $_SESSION['counter'] = "visited";

                                      #}
                                  }
                                  elseif(!isset($logout)) {
                                      echo "
                                    <script> 
                                        alert ('Invalid username or password');
                                </script>";
                                      unset($logout);
                                  }
                              } else {
                              }
                              $result->free();
                          }
                      }
                      $conn->close();
                      unset($login);

                }
            function test_input($data) {
                $data = trim($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            ?>
            <div class="col-lg-8 " style=" margin-left: 0px;">

                <div style="padding-top: 40px; padding-bottom: 40px;" id="join_us" class="main-container register_form collapse">
                    <h3>Join Us</h3>
                    <p>It is high time for learning</p>

                    <form class="form_area md-form" id="SignUp" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <div class="row">


                            <div class="col-lg-6 form_group mt-10">
                                <input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
                            </div>
                            <div class="mt-10 col-lg-6 form_group">
                                <input type="text" name="second_name" placeholder="Second Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Second Name'" required class="single-input">
                            </div>
                            <div class="mt-10 col-lg-6 form_group">
                                <input type="text" name="third_name" placeholder="Third Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Third Name'" required class="single-input">
                            </div>
                            <div class="mt-10 col-lg-6 form_group">
                                <input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
                            </div>
                            <div class="mt-10 col-lg-12 form_group">
                                <input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
                                <i class=" input-icon js-btn-calendar"></i>
                            </div>
                            <div class="mt-10 col-lg-12 form_group">
                                <input type="text" name="Signup_username" placeholder="User Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'User Name'" required class="single-input">
                                <i class=" input-icon js-btn-calendar"></i>
                            </div>
                            <div class="mt-10 col-lg-12 form_group">
                                <input type="password" name="Signup_Password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input">
                                <i class=" input-icon js-btn-calendar"></i>
                            </div>
                            <div class="mt-10 col-lg-12 form_group">
                                <input name="Date" placeholder="Birth Date" class="single-input-secondary" required type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">

                            </div>

                            <div class="input-group-icon mt-10 col-lg-6 form_group">
                                <div class="form-select" id="default-select3">
                                    <select name="gender" style="display: none;" required>
                                        <option value="Gender">Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select><div class="nice-select" tabindex="0" style="
    padding-left: 12px;
    padding-right: 0px;
"><span class="current">Gender</span><ul class="list"><li data-value="Gender" class="option selected focus">Gender</li><li data-value="Male" class="option">Male</li><li data-value="Female" class="option">Female</li></ul></div>

                                </div>
                            </div>
                            <div class="input-group-icon mt-10 mb-15 col-lg-6 form_group" style="
    padding-left: 15px;
    padding-right: 15px;
">
                                <div class="form-select" id="default-select4">
                                    <select name="regester_as" style="display: none;">
                                        <option value="Register As">Register as</option>
                                        <option value="Student">Student</option>
                                        <option value="Instructor">Instructor</option>
                                    </select><div class="nice-select" tabindex="0" style="
    padding-left: 12px;
    padding-right: 0px;
"><span class="current">Register as</span><ul class="list">
                                            <li data-value="Register As" class="option selected focus">Register as</li>
                                            <li data-value="Student" class="option">Student</li><li data-value="Instructor" class="option">Instructor</li>
                                        </ul></div>

                                </div>
                            </div>
                            <div class="input-group-icon mt-10 mb-15 col-lg-12 form_group">
                                <div class="form-select" id="default-select5">
                                    <select name="Univ_Name" style="display: none;" >

                                        <?php
                                        $server_name = "192.168.1.23";
                                        $user_name = "tamer";
                                        $password = "tamer";
                                        $database = "web_project";
                                        $mycon = new mysqli($server_name , $user_name , $password , $database);
                                        if ($mycon->connect_error) {
                                            die("Connection Failed: " . $mycon->connect_error);
                                        }
                                        else {
                                            echo " 
                                       <option value=\"University\">University</option>
                                                        ";
                                            $sql_sel = "select `Univ_Name` from `university`";
                                            $myresult = $mycon->query($sql_sel);
                                            if ($myresult->num_rows > 0) {
                                                for ($i = 0; $i < $myresult->num_rows; $i++) {
                                                    $rows = $myresult->fetch_assoc();
                                                    $univ_name = $rows['Univ_Name'];
                                                    echo " 
                                        <option value='$univ_name'>$univ_name</option>
                                                        ";
                                                }

                                            }
                                        }
                                        ?>
                                    </select><div class="nice-select" tabindex="0" style="padding-left: 12px;">
                                        <span class="current">University</span>
                                        <ul  class="list">
                                            <?php
                                            $server_name = "192.168.1.23";
                                            $user_name = "tamer";
                                            $password = "tamer";
                                            $database = "web_project";
                                            $mycon = new mysqli($server_name , $user_name , $password , $database);
                                            if ($mycon->connect_error) {
                                                die("Connection Failed: " . $mycon->connect_error);
                                            }
                                            else {
                                                echo " 
                                        <li data-value=\"University\" class=\"option focus selected\">University</li>
                                                        ";
                                                $sql_sel = "select `Univ_Name` from `university`";
                                                $myresult = $mycon->query($sql_sel);
                                                if ($myresult->num_rows > 0) {
                                                    for ($i = 0; $i < $myresult->num_rows; $i++) {
                                                        $rows = $myresult->fetch_assoc();
                                                        $univ_name = $rows['Univ_Name'];
                                                        echo " 
                                        <li data-value='$univ_name' class=\"option\">$univ_name</li>
                                                        ";
                                                    }

                                                }
                                            }
                                            ?>
                                        </ul></div>
                                </div>
                            </div>


                            <p>Upload a file verifying your university's membership: </p>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" required name="filename">
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
                                <button name="signup" value="signup" class="primary-btn">sign up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!--================ End Registration Area =================-->
<?php
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "
                                    <script> 
                              
                                        document.getElementById('regst').style.display='none';
                                        document.getElementById('loginfisrt').style.display='none';
                                        document.getElementById('navbar-static-user').style.display='inline-block';
                                        document.getElementById('navbar-user').innerText='👤 $username';
                                       
                                </script>";
}
?>
<?php
$first_name  = $second_name = $third_name = $last_name  = $EMAIL = $Signup_username = $Signup_Password  = $Date = $filename =$Univ_Name=$gender=$regester_as="";
if (isset($_POST["signup"])&&$_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["first_name"])) {
        echo "";
    } else {
        $first_name = test_input($_POST["first_name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $first_name)) {
            echo "";
        }
    }
    if (empty($_POST["second_name"])) {
        echo "";
    } else {
        $second_name = test_input($_POST["second_name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $second_name)) {
            echo "";
        }
    }
    if (empty($_POST["third_name"])) {
        echo "";
    } else {
        $third_name = test_input($_POST["third_name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $third_name)) {
            echo "";
        }
    }
    if (empty($_POST["last_name"])) {
        echo "";
    } else {
        $last_name = test_input($_POST["last_name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $last_name)) {
            echo "";
        }
    }
    if (empty($_POST["EMAIL"])) {
        echo "";
    } else {
        $EMAIL = test_input($_POST["EMAIL"]);
        if (!filter_var('EMAIL', FILTER_VALIDATE_EMAIL)) {
            echo "";
        }
    }
    if (empty($_POST["Signup_Password"])) {
        echo "";
    } else {
        $Signup_Password = htmlspecialchars($_POST["Signup_Password"]);
        if (!preg_match("(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}", $Signup_username)) {
            echo "";
        }
    }
    if (empty($_POST["Signup_username"])) {
        echo "";
    } else {
        $Signup_username = test_input($_POST["Signup_username"]);
    }
    if (empty($_POST["Date"])) {
        echo "";
    } else {
        $Date = test_input($_POST["Date"]);
    }
    if (empty($_POST["filename"])) {
        echo "";
    } else {
        $filename = test_input($_POST["filename"]);
    }
    if (empty($_POST["signup"])) {
        echo "";
    } else {
        $signup = test_input($_POST["signup"]);
    }
    if (empty($_POST['Univ_Name'])) {

    } else {
        $Univ_Name = test_input($_POST['Univ_Name']);
    }
    if (empty($_POST['gender'])) {

    } else {
        $gender = test_input($_POST['gender']);
    }
    if (empty($_POST['regester_as'])) {

    } else {
        $regester_as = test_input($_POST['regester_as']);
    }

    function test_input_2($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strtolower($data);
        return $data;
    }

    $userID = 0000000000000000;
    $servername = "192.168.1.23";
    $user = "tamer";
    $pass = "tamer";
    $dbname = "web_project";
    $i = 0;
    $conn = new mysqli($servername, $user, $pass, $dbname);
    if ($conn->connect_error) {
       $die= die("Connection Failed: " . $conn->connect_error);

    } else {#   echo "<script>
#alert('$first_name');
#</script>";

        if (isset($signup)) {
            $sql = "select Univ_Name from `university`";
            $result = $conn->query($sql);
            if($result->num_rows>0){
                for ($i = 0; $i < $result->num_rows; $i++) {
                    $row = $result->fetch_assoc();
                    if ($row["Univ_Name"] == $Univ_Name) {
                        break;
                    }

                }
            }
            $sql2 = " select UnivID from `university` where '$Univ_Name'  =  Univ_Name ";
            $result2 = $conn->query($sql2);
            if($result2->num_rows > 0) {
                $row2 = $result2->fetch_assoc();
                $univID = $row2['UnivID'];
                $userID =  $univID * 1000000000000;
                if(strcmp($regester_as,"Student") === 0) {
                    $userID = $userID + (10 * 10000000000);
                }
                else {
                    $userID = $userID + (11 * 10000000000);
                }
                $userID = $userID + rand(0,9999999999);
                $passwords = sha1($Signup_Password);
                $sql = "INSERT INTO users (UserID,User_Name,UnivID, First_Name, Second_Name,Third_Name,Family_Name,Date,Email,Gender,picture,Valid)
                    VALUES ($userID, '$Signup_username',$univID ,'$first_name','$second_name','$third_name','$last_name','$Date','$EMAIL','$gender','$filename',false)";
                $sql5 = ("INSERT INTO passwords (UserID,Password,User_Name)
                    VALUES ('$userID','$passwords' , '$Signup_username')");
                if ($conn->query($sql) === TRUE) {
                echo "<script>
alert('New record created successfully');
</script>";
$conn->query($sql5);
            } else {
                echo "<script>
alert('$sql.$conn->error');
</script>";
            }


        }
            }
    }
    $conn->close();
    unset($signup);

}




?>
<!--================ Start Trainers Area =================-->
<section class="trainer_area section_gap_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3">Developed By </h2>
                    <p>
                        Replenish man have thing gathering lights yielding shall you
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center">
            <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                    <img class="img-fluid" src="img/trainer/t1.jpg" alt="">
                </div>
                <div class="meta-text text-sm-center">
                    <h4>Badawi Wawi </h4>
                    <p class="designation">Student</p>
                    <div class="mb-4">
                        <p>
                            If you are looking at blank cassettes on the web, you may be
                            very confused at the.
                        </p>
                    </div>
                    <div class="align-items-center justify-content-center d-flex">
                        <a target="_blank" href="https://www.facebook.com/badawi.wawi"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                <div class="thumb d-flex justify-content-sm-center">
                    <img class="img-fluid" src="img/trainer/t2.jpg" alt="">
                </div>
                <div class="meta-text text-sm-center">
                    <h4>Tamer Assaliya</h4>
                    <p class="designation">Student</p>
                    <div class="mb-4">
                        <p>
                            If you are looking at blank cassettes on the web, you may be
                            very confused at the.
                        </p>
                    </div>
                    <div class="align-items-center justify-content-center d-flex">
                        <a target="_blank" href="https://www.facebook.com/profile.php?id=100003034376295"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Trainers Area =================-->

<!--================ Start Events Area =================-->
<!--================ End Events Area =================-->

<!--================ Start Testimonial Area =================-->
<!--================ End Testimonial Area =================-->

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
                    <li><a href="Scholarship.html">Scholarship</a></li>
                    <li><a href="courses.php">courses</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Features</h4>
                <ul>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="Scholarship.html">Scholarship</a></li>
                    <li><a href="#">Chat</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Resources</h4>
                <ul>
                    <li><a href="about-us.php">About</a></li>
                    <li><a href="https://colorlib.com/wp/template/edustage/" target="_blank">ColorLib</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 single-footer-widget">
                <h4>Newsletter</h4>
                <p>You can trust us. we only send promo offers,</p>
                <div class="form-wrap" id="mc_embed_signup">
                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline" novalidate="true">
                        <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" required="" type="email">
                        <button class="click-btn btn btn-default">
                            <span>subscribe</span>
                        </button>
                        <div style="position: absolute; left: -5000px;">
                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                        </div>

                        <div class="info"></div>
                    </form>
                </div>
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
</footer>
<!--================ End footer Area  =================-->

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

</body></html>
