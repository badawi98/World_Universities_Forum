<?php
session_start();
$username = $_SESSION['username'];
if (!isset($username)){
    echo "<script>
  $(document).ready(function () {
                                swal('You should be a member');
                                });    </script>";
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
            $email=$row10['Email'];

            $sql = " select * from `passwords` where '$username'  =  User_Name";
            $result6 = $conn->query($sql);
            $row11 = $result6->fetch_assoc();
            $password=$row11['Password'];



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
    <link rel=\"icon\" href=\"img/1321027.png\" type=\"image/png\">
    <title>Courses Details</title>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.css\" />
    <link rel=\"stylesheet\" href=\"css/flaticon.css\" />
    <link rel=\"stylesheet\" href=\"css/themify-icons.css\" />
    <link rel=\"stylesheet\" href=\"vendors/owl-carousel/owl.carousel.min.css\" />
    <link rel=\"stylesheet\" href=\"vendors/nice-select/css/nice-select.css\" />
    <!-- main css -->
    <link rel=\"stylesheet\" href=\"css/style.css\" />
    <script type=\"text/javascript\" charset=\"UTF-8\" src=\"https://maps.googleapis.com/maps-api-v3/api/js/36/10a/common.js\"></script><script type=\"text/javascript\" charset=\"UTF-8\" src=\"https://maps.googleapis.com/maps-api-v3/api/js/36/10a/util.js\"></script></head>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css\" />
<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js\"></script>
<script
  src=\"https://code.jquery.com/jquery-3.4.0.js\"
  integrity=\"sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=\"
  crossorigin=\"anonymous\"></script>

      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


      <script src=\"https://www.gstatic.com/firebasejs/5.10.0/firebase.js\"></script>
      <script>
          // Initialize Firebase
          var config = {
              apiKey: \"AIzaSyB-4y1lO-YsaFpcMaybmpc_vKhrWbUYiiE\",
              authDomain: \"chattest116.firebaseapp.com\",
              databaseURL: \"https://chattest116.firebaseio.com\",
              projectId: \"chattest116\",
              storageBucket: \"chattest116.appspot.com\",
              messagingSenderId: \"399563458247\"
          };
          firebase.initializeApp(config);
      </script>\
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"description\" content=\"Learn how to use the Firebase platform on the Web\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

      <!-- Disable tap highlight on IE -->
      <meta name=\"msapplication-tap-highlight\" content=\"no\">

      <!-- Web Application Manifest -->
      <link rel=\"manifest\" href=\"friendlychat-web-master/web-start/public/manifest.json\">

      <!-- Add to homescreen for Chrome on Android -->
      <meta name=\"mobile-web-app-capable\" content=\"yes\">

      <meta name=\"theme-color\" content=\"#303F9F\">

      <!-- Add to homescreen for Safari on iOS -->
      <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
      <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">

      <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"#303F9F\">

      <!-- Tile icon for Win8 -->
      <meta name=\"msapplication-TileColor\" content=\"#3372DF\">
      <meta name=\"msapplication-navbutton-color\" content=\"#303F9F\">

      <!-- Material Design Lite -->
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
      <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.1.3/material.orange-indigo.min.css\">
      <script defer src=\"https://code.getmdl.io/1.1.3/material.min.js\"></script>

      <!-- App Styling -->
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en\">
      <link rel=\"stylesheet\" href=\"friendlychat-web-master/web-start/public/styles/main.css\">
  </head>

  <body style='overflow-x: hidden'>
    <!--================ Start Header Menu Area =================-->
    <header class=\"header_area white-header\">
      <div class=\"main_menu\">

        <nav class=\"navbar navbar-expand-lg navbar-light\">
          <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
             <a class=\"\" href=\"index.php\" style=\"
    margin-right: 0px;
\">
                    <img width=\"32\" hieght=\"32\" src=\"img/1321027.png\" style=\" display: inline-block; bottom: 8px; position:relative;\" alt=\"\">
                    <h4 style=\"top: 0px; margin-top: 14px;color: white; margin-left:5px; display: inline-block; position: relative;\" class=\"mb-3\">Universities Forum</h4>
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
              <div style=\"max-height:260px;overflow-y: visible\"
                      class=\"collapse navbar-collapse offset\"
                      id=\"navbarSupportedContent\"
              >
                  <ul class=\"nav navbar-nav menu_nav ml-auto\">
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
                                <button onclick=\"
    $(document).ready(function () {
        swal('Good Bye');
    });
 value=\"logout\" name=\"logout\" id=\"logout\" class=\"dropdown-item waves-effect waves-light\" href=\"<?php echo htmlspecialchars($_SERVER[PHP_SELF]);?>\">Log out</button>
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
                    <a onclick='location.reload()' id='enroll' href=\"course-details.php?coursename=$course_name&Add='true'\" class=\"primary-btn2 text-uppercase enroll rounded-0 text-white\">Enroll the course</a>
                  
                             
                        
                                           
                            
                            
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
                    
                          <h4 class=\"title\">Chat</h4>

<style>

    @media only screen and (max-width: 400px) {
        div.class1 {
            height: 200px;
        }
    }
    @media only screen and (max-width: 600px) {
        div.class1 {
            height: 400px;
        }
    }
    @media only screen and (max-width: 800px) {
       div .class1 {
            height: 600px;
        }
    }
    @media only screen and (max-width: 2000px) {
        .class1 {
            height: 650px;
        }
    }
    @media only screen and (max-width: 400px) {
        div.class2 {
            height: 10px;
        }
    }
    @media only screen and (max-width: 600px) {
        div.class2 {
            height: 20px;
        }
    }
    @media only screen and (max-width: 800px) {
        div .class2{
            height: 30px;
        }
    }
    @media only screen and (max-width: 2000px) {
        .class2 {
            height: 50px;
        }
    }

</style>

                    <div  style=\" width:100%;\" class=\"class1 demo-layout mdl-layout  mdl-layout--fixed-header\">


                        <!-- Header section containing logo -->
                        <header hidden class=\"  mdl-layout__header mdl-color-text--white mdl-color--light-blue-700\">
                            <div hidden class=\"class2 mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-grid\">

                                <div hidden id=\"user-container\">
                                    <div hidden id=\"user-pic\"></div>
                                    <div hidden id=\"user-name\"></div>
                                    <button hidden id=\"sign-out\" class=\"mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white\">
                                        Sign-out
                                    </button>
                                    <button hidden id=\"sign-in\" class=\"mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white\">
                                        <i hidden class=\"material-icons\">account_circle</i>Sign-in with Google
                                    </button>
                                </div>
                            </div>
                        </header>

                        <main style='overflow-y: hidden;' class=\"mdl-layout__content \">
                            <div id=\"messages-card-container\" style=\"width:100%; padding-top: 0px;padding-left: 0px;padding-right: 0px;}\"
                                 class=\"mdl-cell mdl-cell--12-col mdl-grid\">

                                <!-- Messages container -->
                                <div id=\"messages-card\" class=\"mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop\">
                                    <div stype=\"  padding-top: 0px;    padding-right: 10px;    padding-left: 10px;\"
                                         class=\"mdl-card__supporting-text mdl-color-text--grey-600\">
                                        <div id=\"messages\">
                                            <span id=\"message-filler\"></span>
                                        </div>
                                        <form id=\"message-form\" action=\"#\">
                                            <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\">
                                                <input class=\"mdl-textfield__input\" type=\"text\" id=\"message\">
                                                <label class=\"mdl-textfield__label\" for=\"message\">Message...</label>
                                            </div>
                                            <button id=\"submit\" disabled type=\"submit\" class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect\">
                                                Send
                                            </button>
                                        </form>
                                        <form id=\"image-form\" action=\"#\">
                                            <input id=\"mediaCapture\" type=\"file\" accept=\"image/*\" capture=\"camera\">
                                            <button id=\"submitImage\" title=\"Add an image\" class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--amber-400 mdl-color-text--white\">
                                                <i class=\"material-icons\">image</i>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <div id=\"must-signin-snackbar\" class=\"mdl-js-snackbar mdl-snackbar\">
                                    <div class=\"mdl-snackbar__text\"></div>
                                    <button class=\"mdl-snackbar__action\" type=\"button\"></button>
                                </div>

                            </div>
                        </main>
                    </div>








                    </div>
                </div>
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
                        <li><a href=\"index.php\">Home Page</a></li>
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
                        <li><a href=\"courses.php\">Chat</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-2 col-md-6 single-footer-widget\">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href=\"about-us.php\">About</a></li>
                        <li><a href=\"https://colorlib.com/wp/template/edustage/\" target=\"_blank\">ColorLib</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>";


?>
<?php
echo " 
    <!--================ End Course Details Area =================-->

  
      
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
          
           

    <script src=\"friendlychat-web-master/web-start/public/scripts/main.js\"></script>
   
    <script>setCourseName('$course_name','$username');signIn('$email','$password');</script>
        </body>
      </html>";


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
                echo "<script type=\"text/javascript\">
var click = false;
    $(document).ready(function () {
        swal('Now You are a member in this course');
        
    });
</script>
";
            }

        }
    }
}

?>

