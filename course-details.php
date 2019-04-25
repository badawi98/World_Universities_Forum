<?php
session_start();
$username = $_SESSION['username'];
if (!isset($username)){
    echo "<script>
    alert('You Should be a member');
    </script>";
    echo "<script>
window.location.replace('courses.php');</script>;
";
}
$course_name = $_GET['coursename'];
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
    $sql = " select * from `course` where '$course_name'  =  Course_Name";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $course_pic = $row['picture'];
        $CourseID = $row['CourseID'];
        $sql2 ="select * from `instructors_courses` where $CourseID  =  CourseID";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
            $row2 = $result2->fetch_assoc();
            $instructor_id = $row2['InstructorID'];
            $course_Decription = $row2['Decription'];
            $sql3 ="select * from `users` where $instructor_id  =  UserID";
            $result3 = $conn->query($sql3);
            if ($result3->num_rows > 0) {
                $row3 = $result3->fetch_assoc();
                $instructor_name =  $row3['First_Name'] . ' ' . $row3['Family_Name'];
            }
            $sql4 ="select * from `course_students` where $instructor_id  =  InstructorID and $CourseID = CourseID";
            $result4 = $conn->query($sql4);
            $numberOfStudent = $result4->num_rows;
            $sql5 ="select * from `users` where '$username'  =  User_Name";
            $result5 = $conn->query($sql5);
            $row10 = $result5->fetch_assoc();
            $StudentId = $row10['UserID'];



        }

    }
}
echo"
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"
    />
  <link rel=\"icon\" href=\"img/icon.png\" type=\"image/png\" />
    <title>Courses Details</title>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.css\" />
    <link rel=\"stylesheet\" href=\"css/flaticon.css\" />
    <link rel=\"stylesheet\" href=\"css/themify-icons.css\" />
    <link rel=\"stylesheet\" href=\"vendors/owl-carousel/owl.carousel.min.css\" />
    <link rel=\"stylesheet\" href=\"vendors/nice-select/css/nice-select.css\" />
    <!-- main css -->
    <link rel=\"stylesheet\" href=\"css/style.css\" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class=\"header_area white-header\">
      <div class=\"main_menu\">

        <nav class=\"navbar navbar-expand-lg navbar-light\">
          <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
             <a class=\"\" href=\"index.php\" style=\"
    margin-right: 0px;
\">
                    <img width=\"32\" hieght=\"32\" src=\"img/1321027.png\" style=\" display: inline-block; bottom: 3px; position:relative;\" alt=\"\">
                    <h3 style=\" margin-left:5px; color:white; display: inline-block; position: relative; top:5px;\" class=\"mb-3\">Universities Forum</h3>
                </a>
            <button
              class=\"navbar-toggler\"
              type=\"button\"
              data-toggle=\"collapse\"
              data-target=\"#navbarSupportedContent\"
              aria-controls=\"navbarSupportedContent\"
              aria-expanded=\"false\"
              aria-label=\"Toggle navigation\"
            >
              <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
              <div
                      class=\"collapse navbar-collapse offset\"
                      id=\"navbarSupportedContent\"
              >
                  <ul class=\"nav navbar-nav menu_nav ml-auto\">
                      <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"index.php\">Home</a>
                      </li>
                      <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"about-us.php\">About</a>
                      </li>
                      <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"University.php\">Universities</a>
                      </li>
                      <li class=\"nav-item submenu dropdown\">
                          <a class=\"nav-link\" href=\"Scholarship.php\"> Scholarships</a
                          >
                      </li>
                      </li>
                      <li class=\"nav-item submenu dropdown\">
                          <a class=\"nav-link\" href=\"courses.php\">Courses</a
                          >
                      </li>
                      <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"contact.php\">Contact</a>
                      </li>
                  </ul>
                  
                   <ul style=\"margin-left: 40px; margin-right: 40px;\" class=\"nav navbar-nav nav-flex-icons\">

                    <!-- user -->
                    <li style=\"display:none; padding-bottom: 5px; padding-top: 2px; \" id=\"navbar-static-user\" class=\"nav-item dropdown\">

                        <button  class=\"btn btn-light btn-block dropdown-toggle\" aria-haspopup=\"true\" aria-expanded=\"false\" type=\"button\" id=\"navbar-user\" data-toggle=\"dropdown\">tamer
                            <span class=\"caret\"></span></button>

                        <div class=\"dropdown-menu dropdown-menu-right dropdown-info \" aria-labelledby=\"navbar-tools\">
                            <a class=\"dropdown-item waves-effect waves-light\" href=\"Profile.php\">Profile</a>
                            <a class=\"dropdown-item waves-effect waves-light\" href=\"\">Courses</a>
                            <form method=\"post\" action=\"index.php\">
                                <button onclick=\"alert('logged out')\" value=\"logout\" name=\"logout\" id=\"logout\" class=\"dropdown-item waves-effect waves-light\" href=\"<?php echo htmlspecialchars($_SERVER[PHP_SELF]);?>\">Log out</button>
                            </form>




                        </div>
                    </li>

                        <!-- Login / register -->
                        <a id=\"loginfisrt\" href=\"#regst\" class=\"primary-btn ml-sm-3 ml-0\" style=\"margin-bottom: 5px; margin-top:2px; padding-left: 20px;padding-right: 20px;\"
                        onclick=\"$('#navbarSupportedContent').collapse('hide')
                        focus()\">Log In</a>
                        <script type=\"text/javascript\">
                            function focus() {
                                document.getElementById(\"login_username\").focus();
                            }
                        </script>
                    </ul>
                  
                  
                  
              </div>
          </div>
        </nav>
      </div>
    </header>
    
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class=\"banner_area\">
      <div class=\"banner_inner d-flex align-items-center\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
          <div class=\"row justify-content-center\">
            <div class=\"col-lg-6\">
              <div class=\"banner_content text-center\">
                <h2>Course Details</h2>
                <div class=\"page_link\">
                  <a href=\"index.php\">Home</a>
                  <a href=\"courses.php\">Courses</a>
                  <a href=\"course-details.php\">Courses Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->


    <!--================ Start Course Details Area =================-->
    <section class=\"course_details_area section_gap\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 course_details_left\">
                    <div class=\"main_image\">
                        <img class=\"img-fluid\" src=$course_pic alt=\"\">
                    </div>
                    <div class=\"content_wrapper\">
                        <h4 class=\"title\">Introduction</h4>
                        <div class=\"content\">
                           $course_Decription
                        </div>
";
?>

<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "web_project";
$conns = new mysqli($servername, $user, $pass, $dbname);
if ($conns->connect_error) {
    die("Connection Failed: " . $conns->connect_error);
}
else {
    $MySql = " select * from `course_students` where '$CourseID' = CourseID and '$instructor_id'=InstructorID and '$StudentId'=StudentID";
    $result = $conns->query($MySql);

    if ($result->num_rows == 0) {
        $row11 = $result4->fetch_assoc();
        echo " 
                        
                        <h4 class=\"title\">Course Outline</h4>
                        <div class=\"content\">
                            <ul class=\"course_list\">
                                <li class=\"justify-content-between d-flex\">
                                    <p>Course Slides</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Course Records</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Course Exams</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Course Summaries</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Course Illustrated lectures</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Course Info</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>                             
                            </ul>
                        </div>
                    </div>
                </div>


                <div class=\"col-lg-4 right-contents\">
                    <ul>
                        <li>
                            <a class=\"justify-content-between d-flex\" href=\"#\">
                                <p>Trainer’s Name</p>
                                <span class=\"or\">$instructor_name</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"justify-content-between d-flex\" href=\"#\">
                                <p>Number of Students </p>
                                <span>$numberOfStudent</span>
                            </a>
                        </li>
                        
                        
                    </ul>
                    <a id='enroll' href=\"course-details.php?coursename=$course_name&Add='true'\" class=\"primary-btn2 text-uppercase enroll rounded-0 text-white\">Enroll the course</a>
                  
                             
                        
                                           
                            
                            
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
    }
    else {
        echo"

        <h4 class= \"title\">Course Outline</h4>
                        <div class=\"content\">
                            <ul class=\"course_list\">
                                <li class=\"justify-content-between d-flex\">
                                    <p>Course Slides</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Course Records</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Course Exams</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Course Summaries</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Course Illustrated lectures</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Course Info</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class=\"col-lg-4 right-contents\">
                    <ul>
                        <li>
                            <a class=\"justify-content-between d-flex\" href=\"#\">
                                <p>Trainer’s Name</p>
                                <span class=\"or\">$instructor_name</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"justify-content-between d-flex\" href=\"#\">
                                <p>Number of Students </p>
                                <span>$numberOfStudent</span>
                            </a>
                        </li>


                    </ul>







                    </div>
                </div>
            </div>
        </div>
    </section>";
    }
}
?>
<?php
echo " 
    <!--================ End Course Details Area =================-->

    <!--================ Start footer Area  =================-->
    <footer class=\"footer-area section_gap\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-6 single-footer-widget\">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href=\"index.html\">Home Page</a></li>
                        <li><a href=\"about-us.html\">About us</a></li>
                        <li><a href=\"contact.html\">Contact us</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-2 col-md-6 single-footer-widget\">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href=\"Scholarship.php\">Scholarship</a></li>
                        <li><a href=\"courses.html\">courses</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-2 col-md-6 single-footer-widget\">
                    <h4>Features</h4>
                    <ul>
                        <li><a href=\"courses.html\">Courses</a></li>
                        <li><a href=\"Scholarship.php\">Scholarship</a></li>
                        <li><a href=\"#\">Chat</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-2 col-md-6 single-footer-widget\">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href=\"about-us.html\">About</a></li>
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
        </body>
      </html>";
echo "
<script>MathCourse=$course_name</script>";
#<a href="#" class="primary-btn2 text-uppercase enroll rounded-0 text-white">Enroll the course</a>
?>
<?php
if (isset($_POST['logout'])) {
    unset($_SESSION['username']);
    unset($_SESSION['firstTime']);
    unset($_SESSION['notstdntftime']);
    $logout=$_POST['logout'];
}
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "
                                    <script> 
                                        document.getElementById('loginfisrt').style.display='none';
                                        document.getElementById('navbar-static-user').style.display='inline-block';
                                        document.getElementById('navbar-user').innerText='👤 $username';
                                       
                                </script>";
}
if(isset($_GET['Add'])) {
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "web_project";
    $conns = new mysqli($servername, $user, $pass, $dbname);

    if ($conns->connect_error) {
        die("Connection Failed: " . $conns->connect_error);
    } else {
        $MySql = " select * from `users` where '$username' = User_Name";
        $MyResult = $conns->query($MySql);
        if ($MyResult->num_rows > 0) {
            $rows = $MyResult->fetch_assoc();
            $StudentId = $rows['UserID'];
            $MySql = "INSERT INTO course_students (CourseID,InstructorID,StudentID)
                    VALUES ('$CourseID', '$instructor_id','$StudentId' )";
            if ($conns->query($MySql) === TRUE) {
                echo "<script>
                alert('Now You are a member on this course');
                document.getElementById('enroll').style.display='none';
                </script>";
            }

        }
    }
}

?>

