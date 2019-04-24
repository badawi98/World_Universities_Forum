
<?php
$course_name = $_GET["coursename"];
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


        }

        }
    $conn->close();
}
echo"
<!DOCTYPE html>
<html lang=\"en\">
  <head>
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
  </script>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"Learn how to use the Firebase platform on the Web\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

  <!-- Disable tap highlight on IE -->
  <meta name=\"msapplication-tap-highlight\" content=\"no\">

  <!-- Web Application Manifest -->
  <link rel=\"manifest\" href=\"manifest.json\">

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
  <link rel=\"stylesheet\" href=\"styles/main.css\">
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
        <div class=\"search_input\" id=\"search_input_box\">
          <div class=\"container\">
            <form class=\"d-flex justify-content-between\" method=\"\" action=\"\">
              <input
                type=\"text\"
                class=\"form-control\"
                id=\"search_input\"
                placeholder=\"Search Here\"
              />
              <button type=\"submit\" class=\"btn\"></button>
              <span
                class=\"ti-close\"
                id=\"close_search\"
                title=\"Close Search\"
              ></span>
            </form>
          </div>
        </div>

        <nav class=\"navbar navbar-expand-lg navbar-light\">
          <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class=\"navbar-brand logo_h\" href=\"index.php\">
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
                      <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"contact.php\">Contact</a>
                      </li>
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

                        
                        <h4 class=\"title\">Course Outline</h4>
                        <div class=\"content\">
                            <ul class=\"course_list\">
                                <li class=\"justify-content-between d-flex\">
                                    <p>Introduction Lesson</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Basics of HTML</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Getting Know about HTML</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Tags and Attributes</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Basics of CSS</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Getting Familiar with CSS</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Introduction to Bootstrap</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Responsive Design</p>
                                    <a class=\"primary-btn text-uppercase\" href=\"#\">View Details</a>
                                </li>
                                <li class=\"justify-content-between d-flex\">
                                    <p>Canvas in HTML 5</p>
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
                    <a href=\"#\" class=\"primary-btn2 text-uppercase enroll rounded-0 text-white\">Enroll the course</a>   
                    <h4 class=\"title\">Reviews</h4>
                    <div class=\"content\">
                    <div id=\"messages-card-container\" style=\"position: absolute;top: 0px;left:1000px;\" class=\"mdl-cell mdl-cell--12-col mdl-grid\">

      <!-- Messages container -->
      <div id=\"messages-card\" class=\"mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--6-col-tablet mdl-cell--6-col-desktop\">
        <div class=\"mdl-card__supporting-text mdl-color-text--grey-600\">
          <div id=\"messages\">
            <div class=\"message-container visible\" id=\"Bg57AgVDnpXiz804EEKG\" timestamp=\"Timestamp(seconds=1556057932, nanoseconds=622000000)\"><div class=\"spacing\"><div class=\"pic\" style=\"background-image: url(&quot;https://lh6.googleusercontent.com/-QwjGTLjkdkM/AAAAAAAAAAI/AAAAAAAADaE/M9NGzwOsKPQ/photo.jpg?sz=150&quot;);\"></div></div><div class=\"message\">h</div><div class=\"name\">Badawi Wawi</div></div><div class=\"message-container visible\" id=\"TLp6NROzGc5BrMMyor0D\" timestamp=\"Timestamp(seconds=1556057935, nanoseconds=577000000)\"><div class=\"spacing\"><div class=\"pic\" style=\"background-image: url(&quot;https://lh5.googleusercontent.com/-m89Jsp2Iock/AAAAAAAAAAI/AAAAAAAAF_I/h8_c1l_oceY/photo.jpg?sz=150&quot;);\"></div></div><div class=\"message\">w</div><div class=\"name\">Mohammed Ghazal</div></div><div class=\"message-container visible\" id=\"S68jBDieUDP6RnaeT1MM\" timestamp=\"Timestamp(seconds=1556057939, nanoseconds=324000000)\"><div class=\"spacing\"><div class=\"pic\" style=\"background-image: url(&quot;https://lh6.googleusercontent.com/-QwjGTLjkdkM/AAAAAAAAAAI/AAAAAAAADaE/M9NGzwOsKPQ/photo.jpg?sz=150&quot;);\"></div></div><div class=\"message\">hello</div><div class=\"name\">Badawi Wawi</div></div><div class=\"message-container visible\" id=\"Tg5O1CoMgYoLX5HyB6o0\" timestamp=\"Timestamp(seconds=1556057954, nanoseconds=235000000)\"><div class=\"spacing\"><div class=\"pic\" style=\"background-image: url(&quot;https://lh6.googleusercontent.com/-QwjGTLjkdkM/AAAAAAAAAAI/AAAAAAAADaE/M9NGzwOsKPQ/photo.jpg?sz=150&quot;);\"></div></div><div class=\"message\">d u love me ?</div><div class=\"name\">Badawi Wawi</div></div><div class=\"message-container visible\" id=\"US33Lem3k7bk0Spgteq2\" timestamp=\"Timestamp(seconds=1556058912, nanoseconds=371000000)\"><div class=\"spacing\"><div class=\"pic\" style=\"background-image: url(&quot;https://lh5.googleusercontent.com/-m89Jsp2Iock/AAAAAAAAAAI/AAAAAAAAF_I/h8_c1l_oceY/photo.jpg?sz=150&quot;);\"></div></div><div class=\"message\">do you do you ?</div><div class=\"name\">Mohammed Ghazal</div></div><div class=\"message-container visible\" id=\"4tTxLqFBF4nZ0B1v0F9s\" timestamp=\"Timestamp(seconds=1556060867, nanoseconds=847000000)\"><div class=\"spacing\"><div class=\"pic\" style=\"background-image: url(&quot;https://lh5.googleusercontent.com/-m89Jsp2Iock/AAAAAAAAAAI/AAAAAAAAF_I/h8_c1l_oceY/photo.jpg?sz=150&quot;);\"></div></div><div class=\"message\">huie</div><div class=\"name\">Mohammed Ghazal</div></div><div class=\"message-container visible\" id=\"rATH0vkcJm2aQmSY6Fmt\" timestamp=\"Timestamp(seconds=1556102889, nanoseconds=861000000)\"><div class=\"spacing\"><div class=\"pic\" style=\"background-image: url(&quot;https://lh5.googleusercontent.com/-m89Jsp2Iock/AAAAAAAAAAI/AAAAAAAAF_I/h8_c1l_oceY/photo.jpg?sz=150&quot;);\"></div></div><div class=\"message\">Hekk</div><div class=\"name\">Mohammed Ghazal</div></div><div class=\"message-container visible\" id=\"iZjCMLvud0Evv4wwTKEf\" timestamp=\"Timestamp(seconds=1556103266, nanoseconds=714000000)\"><div class=\"spacing\"><div class=\"pic\" style=\"background-image: url(&quot;https://lh5.googleusercontent.com/-m89Jsp2Iock/AAAAAAAAAAI/AAAAAAAAF_I/h8_c1l_oceY/photo.jpg?sz=150&quot;);\"></div></div><div class=\"message\">riorie</div><div class=\"name\">Mohammed Ghazal</div></div><div class=\"message-container visible\" id=\"tmKDIBuGFVHfPloDhS38\" timestamp=\"Timestamp(seconds=1556106352, nanoseconds=726000000)\"><div class=\"spacing\"><div class=\"pic\" style=\"background-image: url(&quot;https://lh5.googleusercontent.com/-m89Jsp2Iock/AAAAAAAAAAI/AAAAAAAAF_I/h8_c1l_oceY/photo.jpg?sz=150&quot;);\"></div></div><div class=\"message\">Ghazal</div><div class=\"name\">Mohammed Ghazal</div></div><div class=\"message-container visible\" id=\"5VZ0mdvs5096oZX7rPu7\" timestamp=\"Timestamp(seconds=1556108479, nanoseconds=263000000)\"><div class=\"spacing\"><div class=\"pic\" style=\"background-image: url(&quot;https://lh5.googleusercontent.com/-m89Jsp2Iock/AAAAAAAAAAI/AAAAAAAAF_I/h8_c1l_oceY/photo.jpg?sz=150&quot;);\"></div></div><div class=\"message\">uhruheuhf</div><div class=\"name\">Mohammed Ghazal</div></div><div class=\"message-container visible\" id=\"wJ8Zdnxo0KXXNDe4gQD7\" timestamp=\"Timestamp(seconds=1556108544, nanoseconds=691000000)\"><div class=\"spacing\"><div class=\"pic\" style=\"background-image: url(&quot;https://lh5.googleusercontent.com/-m89Jsp2Iock/AAAAAAAAAAI/AAAAAAAAF_I/h8_c1l_oceY/photo.jpg?sz=150&quot;);\"></div></div><div class=\"message\">dd</div><div class=\"name\">Mohammed Ghazal</div></div><div class=\"message-container visible\" id=\"PFRCK1z1tSnS3lKYDc0u\" timestamp=\"Timestamp(seconds=1556116586, nanoseconds=4000000)\"><div class=\"spacing\"><div class=\"pic\" style=\"background-image: url(&quot;https://lh6.googleusercontent.com/-2PK1CJzhKqE/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rdt90hep5Vt70Tpr2hR8aCRjDPxbg/mo/photo.jpg?sz=150&quot;);\"></div></div><div class=\"message\"><img src=\"https://firebasestorage.googleapis.com/v0/b/chattest116.appspot.com/o/lJ9yg6jcoXhD7fXT4LDiEKGWUeF2%2FPFRCK1z1tSnS3lKYDc0u%2F1321027.png?alt=media&amp;token=4aaddb18-ca30-4dfc-94cb-b5e8769468cb&amp;1556117478758\"></div><div class=\"name\">Tamer Assaliya</div></div><span id=\"message-filler\"></span>
          </div>
          <form id=\"message-form\" action=\"#\">
            <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded\" data-upgraded=\",MaterialTextfield\">
              <input class=\"mdl-textfield__input\" type=\"text\" id=\"message\">
              <label class=\"mdl-textfield__label\" for=\"message\">Message...</label>
            </div>
            <button id=\"submit\" disabled=\"\" type=\"submit\" class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect\" data-upgraded=\",MaterialButton,MaterialRipple\">
              Send
            <span class=\"mdl-button__ripple-container\"><span class=\"mdl-ripple\"></span></span></button>
          </form>
          <form id=\"image-form\" action=\"#\">
            <input id=\"mediaCapture\" type=\"file\" accept=\"image/*\" capture=\"camera\">
            <button id=\"submitImage\" title=\"Add an image\" class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--amber-400 mdl-color-text--white\" data-upgraded=\",MaterialButton,MaterialRipple\">
              <i class=\"material-icons\">image</i>
            <span class=\"mdl-button__ripple-container\"><span class=\"mdl-ripple\"></span></span></button>
          </form>
        </div>
      </div>

      <div id=\"must-signin-snackbar\" class=\"mdl-js-snackbar mdl-snackbar\" data-upgraded=\",MaterialSnackbar\">
        <div class=\"mdl-snackbar__text\"></div>
        <button class=\"mdl-snackbar__action\" type=\"button\" aria-hidden=\"true\"></button>
      </div>

    </div>
                    
                    
                    
                    
                    
                    
                    </div>   
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
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
          <script src=\"/__/firebase/5.10.0/firebase-app.js\"></script>
<script src=\"/__/firebase/5.10.0/firebase-auth.js\"></script>
<script src=\"/__/firebase/5.10.0/firebase-storage.js\"></script>
<script src=\"/__/firebase/5.10.0/firebase-messaging.js\"></script>
<script src=\"/__/firebase/5.10.0/firebase-firestore.js\"></script>
<script src=\"/__/firebase/init.js\"></script>

<script src=\"scripts/main.js\"></script>
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
      ?>