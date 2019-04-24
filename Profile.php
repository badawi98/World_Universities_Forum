<?php
session_start();
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$username = $_SESSION['username'];
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "web_project";
$conn = new mysqli($servername, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
else {
    $sql = " select * from `users` where '$username'  =  User_Name";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $First_Name = $row['First_Name'];
        $Second_Name = $row['Second_Name'];
        $Third_Name = $row['Third_Name'];
        $Family_Name = $row['Family_Name'];
        $Eamil = $row ['Email'];
        $Data = $row ['Date'];
        $Gender = $row['Gender'];
        $UnivID = $row['UnivID'];
        $sql2 =  "select * from `university` where '$UnivID'  =  UnivID";
        $result2 = $conn->query($sql2);
        if($result2->num_rows > 0) {
            $row2= $result2->fetch_assoc();
            $univ_name = $row2['Univ_Name'];
        }

    }
}
echo "
<html lang=\"en\"><head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" href=\"img/1321027.png\" type=\"image/png\">
    <title>World Universities Forum</title>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"css/themify-icons.css\">
    <link rel=\"stylesheet\" href=\"vendors/owl-carousel/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"vendors/nice-select/css/nice-select.css\">
    <!-- main css -->
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js\"></script>
    <link rel=\"canonical\" href=\"https://mdbootstrap.com/snippets/jquery/temp/590679/\">

    <script type=\"text/javascript\" charset=\"UTF-8\" src=\"https://maps.googleapis.com/maps-api-v3/api/js/36/10a/common.js\"></script><script type=\"text/javascript\" charset=\"UTF-8\" src=\"https://maps.googleapis.com/maps-api-v3/api/js/36/10a/util.js\"></script>
</head>

<body>
<!--================ Start Header Menu Area =================-->
<header class=\"header_area navbar_fixed\">
    <div class=\"main_menu\">


        <nav class=\"navbar navbar-expand-lg navbar-light\">
            <div class=\"container\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class=\"\" href=\"index.php\" style=\"margin-right: 0px;\">
                    <img width=\"32\" hieght=\"32\" src=\"img/1321027.png\" style=\" display: inline-block; bottom: 3px; position:relative;\" alt=\"\">
                    <h3 style=\" margin-left:5px; display: inline-block; position: relative; top:5px;\" class=\"mb-3\">Universities Forum</h3>
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse offset\" id=\"navbarSupportedContent\">
                    <ul class=\"nav navbar-nav menu_nav ml-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"about-us.php\">About</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"University.php\">Universities</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"courses.php\">Courses</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"Scholarship.php\">Scholarship</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"contact.php\">Contact</a>
                        </li>
                    </ul>
                    <ul style=\"margin-left: 40px; margin-right: 40px;\" class=\"nav navbar-nav nav-flex-icons\">

                        <!-- user -->
                        <li style=\"display:none; padding-bottom: 5px; padding-top: 2px; \" id=\"navbar-static-user\" class=\"nav-item dropdown\">

                            <button  class=\"btn btn-light btn-block dropdown-toggle\" aria-haspopup=\"true\" aria-expanded=\"false\" type=\"button\" id=\"navbar-user\"
                             data-toggle=\"dropdown\">tamer
                                <span class=\"caret\"></span></button>

                            <div class=\"dropdown-menu dropdown-menu-right dropdown-info \" aria-labelledby=\"navbar-tools\">
                                <a class=\"dropdown-item waves-effect waves-light\" href=\"\">Profile</a>
                                
                                <a class=\"dropdown-item waves-effect waves-light\" href=\"\">Courses</a>
                                <form method=\"post\" action=\"index.php\">
                                    <button onclick=\"alert('logged out')\" value=\"logout\" name=\"logout\" id=\"logout\" class=\"dropdown-item waves-effect waves-light\" href=`$_SERVER[PHP_SELF]`;?>Log out</button>
                                </form>




                            </div>
                        </li>

                       

                        <!-- Login / register -->
                        <a id=\"loginfisrt\" href=\"index.php#regst\" class=\"primary-btn ml-sm-3 ml-0\" style=\"margin-bottom: 5px; margin-top:2px; padding-left: 20px;padding-right: 20px;\"
                           onclick=\"$('#navbarSupportedContent').collapse('hide')
                        focus()\">Log In</a>
                       
                   </ul>



                </div>
            </div>
        </nav>
    </div>
</header>

<!--================ End Header Menu Area =================-->

<!--================ Start Home Banner Area =================-->
<section class=\"home_banner_area\">
    <div class=\"banner_inner\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"banner_content text-center\">
                        <h2 class=\"text-uppercase mt-4 mb-5\" style=\"font-size: 30pt\">
                            Best online education service In the world
                        </h2>
                        <div>
                            <a href=\"#\" class=\"primary-btn ml-sm-3 ml-0\">Get Started</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->

<!--================ Start Feature Area =================-->
<section class=\"feature_area section_gap_top\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-5\">
                <div class=\"main_title\">
                    <h2 class=\"mb-3\">Awesome Feature</h2>
                    <p>
                        Replenish man have thing gathering lights yielding shall you
                    </p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_feature\">
                    <div class=\"icon\"><span class=\"flaticon-student\"></span></div>
                    <div class=\"desc\">
                        <h4 class=\"mt-3 mb-2\">Scholarship Facility</h4>
                        <p>
                            Search for Scholarship on universities around the world.
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_feature\">
                    <div class=\"icon\"><span class=\"flaticon-book\"></span></div>
                    <div class=\"desc\">
                        <h4 class=\"mt-3 mb-2\">search Online Course</h4>
                        <p>
                            now you can see your course online and you can add items to it.
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_feature\">
                    <div class=\"icon\"><span class=\"flaticon-earth\"></span></div>
                    <div class=\"desc\">
                        <h4 class=\"mt-3 mb-2\">Online Chatting</h4>
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

<!--================ Start Popular Courses Area =================--><!--================ End Popular Courses Area =================-->

<!--================ Start Registration Area =================-->
 
<div class=\"section_gap registration_area\">
    <div class=\"container\" style=\"
    margin-left: 0px;
    margin-right: 0px;
    padding-right: 15px;
    padding-left: 15px;
\">
        <div class=\"col-lg-8\" style=\" margin-left: 0px;\">

            <div style=\"padding-top: 40px; padding-bottom: 40px;\" id=\"join_us\" class=\"main-container register_form\">
                <h3>Profile</h3>
                <p>It is high time for edit</p>

                <form class=\"form_area md-form\" id=\"SignUp\" action='$_SERVER[PHP_SELF]' method=\"post\">
                    <div class=\"row\">


                        <div class=\"mt-10 col-lg-12 form_group\">
                        <input  readonly value=$username type=\"text\" name=\"username\"  class=\"single-input\">
                       </div>
                        <div class=\"col-lg-6 form_group mt-10\">
                        <input  value=$First_Name type=\"text\" name=\"first_name\"  class=\"single-input\">
                        </div>
                        <div class=\"mt-10 col-lg-6 for
                        m_group\">
                        <input  value=$Second_Name type=\"text\" name=\"second_name\"  class=\"single-input\">
                        </div>
                        <div class=\"mt-10 col-lg-6 form_group\">
                        <input  value=$Third_Name type=\"text\" name=\"third_name\"  class=\"single-input\">
                        </div>
                        <div class=\"mt-10 col-lg-6 form_group\">
                        <input  value=$Family_Name type=\"text\" name=\"fimaly_name\"  class=\"single-input\">
                        </div>
                        <div class=\"mt-10 col-lg-12 form_group\">
                        <input  value=$Eamil type=\"text\" name=\"Email\"  class=\"single-input\">
                        </div>
                        <div class=\"col-lg-6 form_group mt-10\">
                        <input  placeholder='New Password' type=\"password\" name=\"Password\"  class=\"single-input\">
                        </div>
                        <div class=\"mt-10 col-lg-6 form_group\">
                        <input  placeholder='Confirm New Password' type=\"password\" name=\"confirm_password\"  class=\"single-input\">
                        </div>
                        <div class=\"mt-10 col-lg-12 form_group\">
                        <input  value=$Data type=\"data\" name=\"Date\"  class=\"single-input\">

                        </div>

                        <div class=\"input-group-icon mt-10 mb-15 col-lg-12 form_group\">
                            <div class=\"form-select\" id=\"default-select3\">
                                <select>
                                    <option value=\"1\">Gender</option>
                                    <option value=\"1\">Male</option>
                                    <option value=\"1\">Female</option>
                                </select><div class=\"nice-select\" tabindex=\"0\" style=\"
    padding-left: 12px;
    padding-right: 0px;
\"><span class=\"current\">$Gender</span><ul class=\"list\"></ul></div>

                            </div>
                        </div>
                        
                        <div class=\"input-group-icon mt-10 mb-15 col-lg-12 form_group\">
                            <div class=\"form-select\" id=\"default-select5\">
                                <select >
                                    <option value=\"1\">University</option>
                                    <option value=\"1\">An-Najah National University</option>
                                    <option value=\"1\"></option>
                                    <option value=\"1\"></option>
                                    <option value=\"1\"></option>
                                </select>
                                <div class=\"nice-select\" tabindex=\"0\" style=\" padding-left: 12px;\">
                                <span class=\"current\">$univ_name</span><ul class=\"list\"></ul></div>

                            </div>
                        </div>



                        <script>
                            // Add the following code if you want the name of the file appear on select
                            $(\".custom-file-input\").on(\"change\", function() {
                                var fileName = $(this).val().split(\"\").pop();
                                $(this).siblings(\".custom-file-label\").addClass(\"selected\").html(fileName);
                            });
                        </script>







                        <div class=\"col-lg-12 text-center\">
                            <button name = 'update' class=\"primary-btn\">UPDATE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!--================ End Registration Area =================-->

<!--================ Start Trainers Area =================-->
<section class=\"trainer_area section_gap_top\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-5\">
                <div class=\"main_title\">
                    <h2 class=\"mb-3\">Developed By </h2>
                    <p>
                        Replenish man have thing gathering lights yielding shall you
                    </p>
                </div>
            </div>
        </div>
        <div class=\"row justify-content-center d-flex align-items-center\">
            <div class=\"col-lg-3 col-md-6 col-sm-12 single-trainer\">
                <div class=\"thumb d-flex justify-content-sm-center\">
                    <img class=\"img-fluid\" src=\"img/trainer/t1.jpg\" alt=\"\">
                </div>
                <div class=\"meta-text text-sm-center\">
                    <h4>Badawi Wawi </h4>
                    <p class=\"designation\">Student</p>
                    <div class=\"mb-4\">
                        <p>
                            If you are looking at blank cassettes on the web, you may be
                            very confused at the.
                        </p>
                    </div>
                    <div class=\"align-items-center justify-content-center d-flex\">
                        <a target=\"_blank\" href=\"https://www.facebook.com/badawi.wawi\"><i class=\"ti-facebook\"></i></a>
                        <a href=\"#\"><i class=\"ti-twitter\"></i></a>
                        <a href=\"#\"><i class=\"ti-linkedin\"></i></a>
                        <a href=\"#\"><i class=\"ti-pinterest\"></i></a>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-6 col-sm-12 single-trainer\">
                <div class=\"thumb d-flex justify-content-sm-center\">
                    <img class=\"img-fluid\" src=\"img/trainer/t2.jpg\" alt=\"\">
                </div>
                <div class=\"meta-text text-sm-center\">
                    <h4>Tamer Assaliya</h4>
                    <p class=\"designation\">Student</p>
                    <div class=\"mb-4\">
                        <p>
                            If you are looking at blank cassettes on the web, you may be
                            very confused at the.
                        </p>
                    </div>
                    <div class=\"align-items-center justify-content-center d-flex\">
                        <a target=\"_blank\" href=\"https://www.facebook.com/profile.php?id=100003034376295\"><i class=\"ti-facebook\"></i></a>
                        <a href=\"#\"><i class=\"ti-twitter\"></i></a>
                        <a href=\"#\"><i class=\"ti-linkedin\"></i></a>
                        <a href=\"#\"><i class=\"ti-pinterest\"></i></a>
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
<footer class=\"footer-area section_gap\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-2 col-md-6 single-footer-widget\">
                <h4>Top Products</h4>
                <ul>
                    <li><a href=\"index.html\">Home Page</a></li>
                    <li><a href=\"about-us.php\">About us</a></li>
                    <li><a href=\"contact.php\">Contact us</a></li>
                </ul>
            </div>
            <div class=\"col-lg-2 col-md-6 single-footer-widget\">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href=\"Scholarship.php\">Scholarship</a></li>
                    <li><a href=\"courses.php\">courses</a></li>
                </ul>
            </div>
            <div class=\"col-lg-2 col-md-6 single-footer-widget\">
                <h4>Features</h4>
                <ul>
                    <li><a href=\"courses.php\">Courses</a></li>
                    <li><a href=\"Scholarship.php\">Scholarship</a></li>
                    <li><a href=\"#\">Chat</a></li>
                </ul>
            </div>
            <div class=\"col-lg-2 col-md-6 single-footer-widget\">
                <h4>Resources</h4>
                <ul>
                    <li><a href=\"about-us.php\">About</a></li>
                    <li><a href=\"https://colorlib.com/wp/template/edustage/\" target=\"_blank\">ColorLib</a></li>
                </ul>
            </div>
            <div class=\"col-lg-4 col-md-6 single-footer-widget\">
                <h4>Newsletter</h4>
                <p>You can trust us. we only send promo offers,</p>
                <div class=\"form-wrap\" id=\"mc_embed_signup\">
                    <form target=\"_blank\" action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\" method=\"get\" class=\"form-inline\" novalidate=\"true\">
                        <input class=\"form-control\" name=\"EMAIL\" placeholder=\"Your Email Address\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Your Email Address'\" required=\"\" type=\"email\">
                        <button class=\"click-btn btn btn-default\">
                            <span>subscribe</span>
                        </button>
                        <div style=\"position: absolute; left: -5000px;\">
                            <input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\" type=\"text\">
                        </div>

                        <div class=\"info\"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"row footer-bottom d-flex justify-content-between\" align=\"center\">
            <p class=\"col-lg-8 col-sm-12 footer-text m-0 text-white\">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved</i><a href=\"https://colorlib.com\" target=\"_blank\"></a>

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class=\"col-lg-4 col-sm-12 footer-social\">
                <a href=\"https://www.facebook.com/badawi.wawi\" target=\"_blank\"><i class=\"ti-facebook\"></i></a>
                <a href=\"https://twitter.com/badawi13\" target=\"_blank\"><i class=\"ti-twitter\"></i></a>

            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"js/jquery-3.2.1.min.js\"></script>
<script src=\"js/popper.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"vendors/nice-select/js/jquery.nice-select.min.js\"></script>
<script src=\"vendors/owl-carousel/owl.carousel.min.js\"></script>
<script src=\"js/owl-carousel-thumb.min.js\"></script>
<script src=\"js/jquery.ajaxchimp.min.js\"></script>
<script src=\"js/mail-script.js\"></script>
<!--gmaps Js-->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE\"></script>
<script src=\"js/gmaps.min.js\"></script>
<script src=\"js/theme.js\"></script>



</body></html>
";
$conn->close();
?>
<?php
$first_name  = $second_name = $third_name = $last_name  = $EMAIL  = $Password  = $Confirm_Password = $Date  = $gender ="";
if (isset($_POST["update"])&&$_SERVER["REQUEST_METHOD"] == "POST") {

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
    if (empty($_POST["fimaly_name"])) {
        echo "";
    } else {
        $last_name = test_input($_POST["fimaly_name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $last_name)) {
            echo "";
        }
    }
    if (empty($_POST["Email"])) {
        echo "";
    } else {
        $EMAIL = test_input($_POST["Email"]);
        if (!filter_var('EMAIL', FILTER_VALIDATE_EMAIL)) {
            echo "";
        }
    }
    if (empty($_POST["Password"])) {
        echo "";
    } else {
        $Password = test_input($_POST["Password"]);
        if (!preg_match("(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}", $Password)) {
            echo "";
        }
    }
    if (empty($_POST["confirm_password"])) {
        echo "";
    } else {
        $Confirm_Password = test_input($_POST["confirm_password"]);
        if (!preg_match("(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}", $Confirm_Password)) {
            echo "";
        }
    }
    if (empty($_POST["Date"])) {
        echo "";
    } else {
        $Date = test_input($_POST["Date"]);
    }

    $servername = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "web_project";
    $i = 0;
    $conn2 = new mysqli($servername, $user, $pass, $dbname);
    if ($conn2->connect_error) {
       $die= die("Connection Failed: " . $conn2->connect_error);

    } else {
        $sql2 = "UPDATE `users` SET `First_Name`='$first_name',
                  `Second_Name`='$second_name',`Third_Name`='$third_name',`Family_Name`='$last_name',`Date`='$Data',
                  `Email` = '$EMAIL' where '$username' =  User_Name";
    }
            if ($conn2->query($sql2) === TRUE) {
                echo "<script>
alert('Done');
</script>";

            }
            else {
                echo "<script>
alert('$sql.$conn2->error');
</script>";
            }

    $conn2->close();

}




?>
 <?php

                        if (isset($_POST['logout'])) {
                            unset($_SESSION['username']);
                            unset($_SESSION['firstTime']);
                            $logout=$_POST['logout'];
                        }

                        ?>
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
