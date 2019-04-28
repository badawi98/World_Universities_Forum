<?php
session_start();
if(!isset($_SESSION["name"])) {
    echo "
        <script>
            window.location.replace('Login_v14/adminlogin.php');
        </script>";

}
else {
    $username = $_SESSION['name'];
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "web_project";
    $conn = new mysqli($servername, $user, $pass, $dbname);
    $sql = "select * from `users` where '$username' = User_Name";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $univID = $row['UnivID'];
        $sql = "select * from `university` where $univID = UnivID";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $UnivName = $row['Univ_Name'];
        }
    }
}
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/36/10a/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/36/10a/util.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    .fakeimg {
        height: 200px;
        background: #aaa;
    }
</style>

</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Universities Forum Administrator Page</h1>
    <!-- <p>Resize this responsive page to see the effect!</p>-->
</div>
<nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">

        <a class="py-2 d-none d-md-inline-block" href="#">Add scholarship</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Add a course</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Members requests</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Log out</a>

    </div>
</nav>
<div class="col-lg-12 " style=" margin-left: 0px;">

    <div style="padding-top: 40px; padding-bottom: 40px;" id="join_us" class="main-container register_form">
        <h3>Add Scholarships</h3>

        <form class="form_area md-form" id="SignUp" action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="mt-10 col-lg-12 form_group">
                    <?php
                    echo " 
                                        <input disabled value='$UnivName' id=\"Univ_Name\" type=\"text\" name=\"Signup_username\" placeholder=\"University name\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'User Name'\"  class=\"single-input\">

                    ";
                    ?>
                    <i class=" input-icon js-btn-calendar"></i>
                </div>
                <div class="mt-10 col-lg-12 form_group">
                    <input id="Dep_Name" type="text" name="Signup_username" placeholder="Department name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'User Name'"  class="single-input">
                    <i class=" input-icon js-btn-calendar"></i>
                </div>
                <div class="mt-10 col-lg-12 form_group">
                    <input id="Level" type="text" name="Signup_username" placeholder="Level" onfocus="this.placeholder = ''" onblur="this.placeholder = 'User Name'"  class="single-input">
                    <i class=" input-icon js-btn-calendar"></i>
                </div>
                <div class="mt-10 col-lg-12 form_group">
                    <input id="Dec" type="text" name="Signup_username" placeholder="Decription" onfocus="this.placeholder = ''" onblur="this.placeholder = 'User Name'"  class="single-input">
                    <i class=" input-icon js-btn-calendar"></i>
                </div>

                <div class="mt-10 col-lg-12 form_group">
                    <!--  <input name="Date" placeholder="Birth Date" class="single-input-secondary" required type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">-->
                    <input name="Date" class="single-input-secondary" required placeholder="Birth Date" id="datepicker" width="100%" />
                    <script>
                        $('#datepicker').datepicker({
                            format: 'yyyy/mm/dd',
                            showOtherMonths: true
                        });
                    </script>
                </div>
                <p>Scholarship Image</p>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" name="filename" id="filename" required >
                    <label class="custom-file-label selected" for="customFile"></label>
                </div>
                <button name="signup" value="signup" class="primary-btn"
                    <?php
                    echo " onclick='make_rqd1()'";
                    ?>>Add</button>
                <?php
                echo "
                                <script>
                                    function make_rqd1(){
                                        document.getElementById('Univ_Name').required = true;
                                        document.getElementById('Dep_Name').required = true;
                                        document.getElementById('Level').required = true;
                                        document.getElementById('Dec').required = true;
                                        document.getElementById('dat').required = true;
                                    }

                                </script>";
                ?>

        </form>
    </div>
</div>

</div>
<hr>
</div>
</div>
<div class="col-lg-8 " style=" margin-left: 0px;">

    <div style="padding-top: 40px; padding-bottom: 40px;" id="join_us" class="main-container register_form">
        <h3>Add Course</h3>

        <form class="form_area md-form" id="SignUp" action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="mt-10 col-lg-12 form_group">
                    <?php
                    echo " 
                                        <input disabled value='$UnivName' id=\"Univ_Name\" type=\"text\" name=\"Signup_username\" placeholder=\"University name\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'User Name'\"  class=\"single-input\">

                    ";
                    ?>                    <i class=" input-icon js-btn-calendar"></i>
                </div>
                <div class="mt-10 col-lg-12 form_group">
                    <input id="Dep_Name" type="text" name="Signup_username" placeholder="Course name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'User Name'"  class="single-input">
                    <i class=" input-icon js-btn-calendar"></i>
                </div>
                <div class="mt-10 col-lg-12 form_group">
                    <input id="Dec" type="text" name="Signup_username" placeholder="Decription" onfocus="this.placeholder = ''" onblur="this.placeholder = 'User Name'"  class="single-input">
                    <i class=" input-icon js-btn-calendar"></i>
                </div>
                <div class="mt-10 col-lg-12 form_group">
                    <input id="Dec" type="text" name="Signup_username" placeholder="Instructor" onfocus="this.placeholder = ''" onblur="this.placeholder = 'User Name'"  class="single-input">
                    <i class=" input-icon js-btn-calendar"></i>
                </div>
                <p>Course Image</p>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" name="filename" id="filename" required >
                    <label class="custom-file-label selected" for="customFile"></label>
                </div>



                <button name="signup" value="signup" class="primary-btn"
                    <?php
                    echo " onclick='make_rqd1()'";
                    ?>>Add</button>
                <?php
                echo "
                                <script>
                                    function make_rqd1(){
                                        document.getElementById('Univ_Name').required = true;
                                        document.getElementById('Dep_Name').required = true;
                                        document.getElementById('Level').required = true;
                                        document.getElementById('Dec').required = true;
                                        document.getElementById('dat').required = true;
                                    }

                                </script>";
                ?>

        </form>
    </div>
</div>

</div>


<div class="section-top-border">
    <h3 class="mb-30 title_color">Users Requests</h3>
    <div class="progress-table-wrap">
        <div class="progress-table">
            <div class="table-head">
                <div class="serial">#</div>
                <div class="country">Name </div>
                <div class="visit">Image</div>
                <div class="percentage">Decision</div>
            </div>

            <?php
            $servername = "localhost";
            $user = "root";
            $pass = "";
            $dbname = "web_project";
            $numberOfUsers = 0;
            $conn = new mysqli($servername, $user, $pass, $dbname);
            if ($conn->connect_error) {
                die("Connection Failed: " . $conn->connect_error);
            }
            else {
                $sql = " select * from `users` where 0  =  Valid";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    for ($i = 0; $i < $result->num_rows ; $i++) {
                        $row = $result->fetch_assoc();
                        $numberOfUsers = $numberOfUsers + 1 ;
                        $User_Name = $row['First_Name'] . " "  . $row['Family_Name'];
                        echo " 
                <div class=\"table-row\" >
                <div class=\"serial\" > $numberOfUsers</div >
                <div class=\"country\" > $User_Name</div >
                <div class=\"visit\" >
                
		<div class=\"lightbox-caption\"><button type = \"submit\" class=\"btn\" style = \"margin-right: 5px\" >View</button></div>
</div>
                
                
              
                <div class=\"percentage\" >
                    <button type = \"submit\" class=\"btn\" style = \"margin-right: 5px\" > Accept </button >
                    <button type = \"submit\" class=\"btn\" > Reject</button >
                </div >
            </div >";
                    }
                }
            }
            ?>

        </div>
    </div>
    <hr>

</body>
</html>
<?php
session_destroy();
?>