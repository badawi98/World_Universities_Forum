<?php
session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/icon.png" type="image/png" />
    <title>University</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between" method="" action="">
                    <input
                            type="text"
                            class="form-control"
                            id="search_input"
                            placeholder="Search Here"
                    />
                    <button type="submit" class="btn"></button>
                    <span
                            class="ti-close"
                            id="close_search"
                            title="Close Search"
                    ></span>
                </form>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="" href="index.php" style="
    margin-right: 0px;
">
                    <img width="32" hieght="32" src="img/1321027.png" style=" display: inline-block; bottom: 3px; position:relative;" alt="">
                    <h3 style=" margin-left:5px; display: inline-block; position: relative; top:5px;" class="mb-3">Universities Forum</h3>
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
                        <li class="nav-item">
                            <a class="nav-link" href="Scholarship.php">Scholarships</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="courses.php">Courses</a>
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
                                    <button onclick="alert('logged out')" value="logout" name="logout" id="logout" class="dropdown-item waves-effect waves-light" href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Log out</button>
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

<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h2 class="text-uppercase mt-4 mb-5" style="font-size: 36px">
                            Universities <br>
                        </h2>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog_left_sidebar">
                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                </div>

                            </div>
                        </div>
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
                            $sql = "select * from `University`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                for ($i = 0; $i < $result->num_rows; $i++) {
                                    $row = $result->fetch_assoc();
                                    $univname = $row['Univ_Name'];
                                    $univdec = $row['Description'];
                                    $univlink = $row['Link'];
                                    $univPic=$row['picture'];
                                    echo "
                        <div class=\"col-md-9\">
                            <div class=\"blog_post\">
                                <a target='_blank' href='$univlink'><img  width=\"100%\" src=$univPic alt=\"\"></a>
                                <div class=\"blog_details\">
                                    <a target='_blank' href=$univlink >
                                        <h2>$univname</h2>
                                    </a>
                                    <p>$univdec</p>
                                    <a href=$univlink class=\"blog_btn\" target=\"_blank\">View More</a>
                                </div>
                            </div>
                        </div>
                        </article>
                          <article class=\"row blog_item\">
                        <div class=\"col-md-3\">
                            <div class=\"blog_info text-right\">
                                <div class=\"post_tag\">

                                </div>

                            </div>
                        </div>";
                                }
                            }
                        }

                        ?>

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <i class="ti-angle-left"></i>
                                        </span>
                                </a>
                            </li>
                            <li class="page-item"><a href="#" class="page-link">01</a></li>
                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
                            <li class="page-item"><a href="#" class="page-link">03</a></li>
                            <li class="page-item"><a href="#" class="page-link">04</a></li>
                            <li class="page-item"><a href="#" class="page-link">09</a></li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <i class="ti-angle-right"></i>
                                        </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

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
</footer><!--================ End footer Area  =================-->

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

 <?php
 $first_univ = $second_univ = "";
 $first_univ = 1000;

 if (empty($_POST["second_univ"])) {
 } else {
     $second_univ = test_input($_POST["second_univ"]);
 }
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
     $sql = "select * from `University`";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
         for ($i = 0; $i < $result->num_rows; $i++) {
             $row = $result->fetch_assoc();
         }
     }
 }
?>