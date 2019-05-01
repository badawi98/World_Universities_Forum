<?php
session_start();

echo "<script type=\"text/javascript\">
setTimeout(function() { window.location.href = \"adminlogin.php\"; }, 60*15*1000);

</script>";

if((!isset($_SESSION["name"])&&!isset($_GET['admin'])&&!isset($_GET['acceptance'])&&!isset($_GET['usr']))) {
    echo "
        <script>
            window.location.replace('/phpstorm_projects/World_Universities_Forum/Login_v14/adminlogin.php');
        </script>";

}


    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "web_project";
    $conn = new mysqli($server_name, $user_name, $password, $database);
    if(isset($_SESSION["name"])||isset($_GET["admin"])){
        if(isset($_SESSION["name"])){
        $username=$_SESSION["name"];
        $admin=$_SESSION["name"];}

        if(isset($_GET["admin"])){
            $username=$_GET['admin'];
        $admin=$_GET['admin'];}



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



    if(isset($_GET['acceptance'])&&isset($_GET['admin'])){
        $usr=$_GET['usr'];
        $_SESSION["name"]=$_GET['admin'];
        $acceptanceGet=$_GET['acceptance'];
        $sql_acc="UPDATE `users` SET Valid = $acceptanceGet WHERE '$usr'=User_Name";
        $result = $conn->query($sql_acc);

        if( $result===TRUE&&$acceptanceGet=='0') {
            $sql_del="delete from `users` where '$usr'=User_Name";
            $result = $conn->query($sql_del);
            echo "<script> alert('Request Has been Rejected Successfully');
            window.location.replace('admin.php');

</script>";

        }
        elseif ($result===TRUE&&$acceptanceGet=='1'){
            $sql="select * from `users` where '$usr'=User_Name";
            $result = $conn->query($sql);
            if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $StudentID = $row['UserID'];
                $studentname=$row['User_Name'];
            }
            $sql_insrt="insert into `student` values('$StudentID','$studentname')";
            $result = $conn->query($sql_insrt);
            echo "<script>alert('Request Has been Accepted Successfully');
            window.location.replace('admin.php');
</script>";

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

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<style>
    .fakeimg {
        height: 200px;
        background: #aaa;
    }
</style>

</head>
<div>
<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Universities Forum Administrator Page</h1>
    <!-- <p>Resize this responsive page to see the effect!</p>-->


</div>
<nav style="position: relative;background-color: #002346;" class="site-header sticky-top py-1">



    <div class="container d-flex flex-column flex-md-row justify-content-between">

        <a style="color: white" class="py-2 d-none d-md-inline-block" href="#">Add scholarship</a>
        <a style="color: white" class="py-2 d-none d-md-inline-block" href="#">Add a course</a>
        <a style="color: white" class="py-2 d-none d-md-inline-block" href="#">Members requests</a>
        <a style="color: white" class="py-2 d-none d-md-inline-block" href="#">Log out</a>

    </div>
</nav>

<div class="container-fluid row" style="align-items: center;padding-top: 15px;padding-bottom: 15px;background-color: #f9fafb;margin-left: 0px;margin-right: 0px;padding-left: 30px;padding-right: 30px;">
<div class="col-lg-6 " style=" margin-left: 0px;">

    <div style="padding-top: 40px; padding-bottom: 40px;" id="join_us" class="main-container register_form">
        <h3>Add Scholarships</h3>

        <form class="form_area md-form" id="scholarship" action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="mt-10 col-lg-12 form_group">
                    <?php
                    echo " 
                     <input disabled value='$UnivName' id=\"Univ_Name\" type=\"text\" name=\"Univ_Name\" placeholder=\"University name\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'User Name'\"  class=\"single-input\">
                    ";
                    ?>
                    <i class=" input-icon js-btn-calendar"></i>
                </div>
                <div class="mt-10 col-lg-12 form_group">
                    <input id="Dep_Name" type="text" name="Dep_Name" placeholder="Department name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Dep_Name'"  class="single-input">
                    <i class=" input-icon js-btn-calendar"></i>
                </div>
                <div class="mt-10 col-lg-12 form_group">
                    <input id="title" type="text" name="title" placeholder="title" onfocus="this.placeholder = 'title'" onblur="this.placeholder = 'title'"  class="single-input">
                    <i class=" input-icon js-btn-calendar"></i>
                </div>
                <div class="mt-10 col-lg-12 form_group">
                    <input id="Level" type="text" name="Level" placeholder="Level" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Level'"  class="single-input">
                    <i class=" input-icon js-btn-calendar"></i>
                </div>
                <div class="mt-10 col-lg-12 form_group">
                    <input id="Dec" type="text" name="Dec" placeholder="Dec" onfocus="this.placeholder = 'Dec'" onblur="this.placeholder = 'Dec'"  class="single-input">
                    <i class=" input-icon js-btn-calendar"></i>
                </div>
                <div class="mt-10 col-lg-12 form_group">
                    <input id="link" type="text" name="link" placeholder="link" onfocus="this.placeholder = 'link'" onblur="this.placeholder = 'link'"  class="single-input">
                    <i class=" input-icon js-btn-calendar"></i>
                </div>

                <div class="mt-10 col-lg-12 form_group">
                    <!--  <input name="Date" placeholder="Birth Date" class="single-input-secondary" required type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">-->
                    <input name="Startdate" class="single-input-secondary" required placeholder="Startdate" id="datepicker" width="100%" />
                    <script>
                        $('#datepicker').datepicker({
                            format: 'yyyy/mm/dd',
                            showOtherMonths: true
                        });
                    </script>
                </div>
                <p>Scholarship Image</p>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" name="scholimg" id="scholimg" required >
                    <label class="custom-file-label selected" for="customFile"></label>
                </div>
                <script>
                    // Add the following code if you want the name of the file appear on select
                    $(".custom-file-input").on("change", function() {
                        var fileName = $(this).val().split("\\").pop();
                        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                    });
                </script>
                <button name="addschol" value="addschol" class="primary-btn"
                    <?php
                    echo " onclick='make_rqd1() '";
                    ?>>Add</button>
                <?php
                echo "
                                <script>
                                    function make_rqd1(){
                                        document.getElementById('Dep_Name').required = true;
                                        document.getElementById('title').required = true;
                                        document.getElementById('Level').required = true;
                                        document.getElementById('Dec').required = true;
                                        document.getElementById('link').required = true;
                                        document.getElementById('Startdate').required = true;
                                        document.getElementById('scholimg').required = true;
                                    }

                                </script>";
                ?>

        </form>
        <!--start scholarship processing-->
        <?php
        $Dep_Name  = $title = $Level = $Dec  = $link = $Startdate = $scholimg =$addschol="";
        $submit=true;
        if (isset($_POST["addschol"])&&$_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["Dep_Name"])) {
                echo $_POST["Dep_Name"];
                $submit = false;
            } else {
                $Dep_Name = test_input2($_POST["Dep_Name"]);
                if (!preg_match("/^[a-zA-Z]*$/", $Dep_Name)) {
                    echo $_POST["Dep_Name"];
                    $submit = false;
                }
            }
            if (empty($_POST["title"])) {
                echo $_POST["title"];
                $submit = false;
            } else {
                $title = test_input2($_POST["title"]);
                if (!preg_match("/^[a-zA-Z]*$/", $title)) {
                    echo $_POST["title"];
                    $submit = false;
                }
            }
            if (empty($_POST["Level"])) {
                echo $_POST["Level"];
                $submit = false;
            } else {
                $Level = test_input2($_POST["Level"]);
                if (!preg_match("/^[a-zA-Z]*$/", $Level)) {
                    echo $_POST["Level"];
                    $submit = false;
                }
            }
            if (empty($_POST["Dec"])) {
                echo $_POST["Dec"];
                $submit = false;
            } else {
                $Dec = test_input2($_POST["Dec"]);
                if (!preg_match("/^[a-zA-Z]*$/", $Dec)) {
                    echo $_POST["Dec"];
                    $submit = false;
                }
            }
            if (empty($_POST["link"])) {
                echo $_POST["link"];
                $submit = false;
            } else {
                $link = test_input2($_POST["link"]);
                //   if (!preg_match("/^[a-zA-Z]*$/", $first_name)) {
                //     echo $_POST["link"];
                //   $submit = false;
                // }
            }
            if (empty($_POST["Startdate"])) {
                echo $_POST["Startdate"];
                $submit = false;
            } else {
                $Startdate = test_input2($_POST["Startdate"]);
                //  if (!preg_match("/^[a-zA-Z]*$/", $first_name)) {
                //    echo $_POST["Startdate"];
                //  $submit = false;
                //}
            }
            if (empty($_POST["scholimg"])) {
                //   $submit=false;
            } else {
                $scholimg = $_POST["scholimg"];
            }


            //start

$filename=basename($_FILES["scholimg"]["name"]);
            $target_dir = dirname(__FILE__) . "/uploads/scholarships/";
            $target_file = $target_dir . basename($_FILES["scholimg"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
            if (isset($_POST["addschol"])) {
                $check = getimagesize($_FILES["scholimg"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                } else {

                    echo "File is not an image.";
                    $submit = false;
                }
            }
// Check if file already exists
            /*    if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    $submit = false;
                }*/
// Check file size
            if ($_FILES["scholimg"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                $submit = false;
            }
// Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $submit = false;
            }
// Check if $uploadOk is set to 0 by an error
            if ($submit === false) {
                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            }

            //end


            if ($submit === true) {
                $server_name = "localhost";
                $user_name = "root";
                $password = "";
                $database = "web_project";
                $conn = new mysqli($server_name, $user_name, $password, $database);
                if ($conn->connect_error) {
                    $die = die("Connection Failed: " . $conn->connect_error);

                } else {#   echo "<script>
#alert('$first_name');
#</script>";


                    $sql = "INSERT INTO scholarship (UnivID,Desciption,Title,Link,picture,start_Date,Level,Department)
                    VALUES ('$univID','$Dec' ,'$title','$link','$filename','$Startdate','$Level','$Dep_Name')";
                    echo $sql;
                    if (move_uploaded_file($_FILES["scholimg"]["tmp_name"], $target_file)) {
                        echo "The file " . basename($_FILES["scholimg"]["name"]) . " has been uploaded.";
                        if ($conn->query($sql) === TRUE) {
                            echo "<script type='text/javascript'>
    $(document).ready(function () {
        swal('Added Successfully');
    });
    </script>";
                        }
                    } else {
                        echo "<script type='text/javascript'>
    $(document).ready(function () {
        swal('there is a problem !');
    });
    </script>";
                    }


                }

                $conn->close();
            } else {
                echo "no";
                unset($signup);

                echo "
<script type='text/javascript'>
    $(document).ready(function () {
      //  swal('Invalid inputs formats');
    });
</script>";

            }
        }
        ?>

        <!--end scholarship processing-->



    </div>
</div>

</div>

<div class="col-lg-6 " >

    <div style="padding-top: 40px; padding-bottom: 40px;" id="join_us" class="main-container register_form">
        <h3>Add Course</h3>

        <form class="form_area md-form" id="Course" action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="mt-10 col-lg-12 form_group">
                    <?php
                    echo " 
                      <input disabled value='$UnivName' id=\"Univ_Name\" type=\"text\" name=\"UnivName\" placeholder=\"University name\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'University name'\"  class=\"single-input\">

                    ";
                    ?>                    <i class=" input-icon js-btn-calendar"></i>
                </div>
                <div class="mt-10 col-lg-12 form_group">
                    <input id="Course_name" type="text" name="Course_name" placeholder="Course name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Course name'"  class="single-input">
                    <i class=" input-icon js-btn-calendar"></i>
                </div>
                <div class="mt-10 col-lg-12 form_group">
                    <input id="Decription" type="text" name="Decription" placeholder="Decription" onfocus="this.placeholder = 'Decription'" onblur="this.placeholder = 'Decription'"  class="single-input">
                    <i class=" input-icon js-btn-calendar"></i>
                </div>
                <div class="mt-10 col-lg-12 form_group">
                    <input id="Instructor" type="text" name="Instructor" placeholder="Instructor" onfocus="this.placeholder = 'Decription'" onblur="this.placeholder = 'Decription'"  class="single-input">
                    <i class=" input-icon js-btn-calendar"></i>
                </div>
                <p>Course Image</p>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" name="Courseimg" id="Courseimg" required >
                    <label class="custom-file-label selected" for="customFile"></label>
                </div>
                <script>
                    // Add the following code if you want the name of the file appear on select
                    $(".custom-file-input").on("change", function() {
                        var fileName = $(this).val().split("\\").pop();
                        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                    });
                </script>



                <button name="Addcourse" value="Addcourse" class="primary-btn"
                    <?php
                    echo " onclick='make_rqd1()'";
                    ?>>Add</button>
                <?php
                echo "
                                <script>
                                    function make_rqd1(){
                                        document.getElementById('Course_name').required = true;
                                        document.getElementById('Decription').required = true;
                                        document.getElementById('Instructor').required = true;
                                        document.getElementById('Courseimg').required = true;
                                    }

                                </script>";
                ?>

        </form>

        <!--start courseAdd processing-->
        <?php
        $Course_name  = $Decription = $Courseimg = $Instructor  = $Addcourse ="";
        $submit=true;
        if (isset($_POST["Addcourse"])&&$_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["Course_name"])) {
                echo $_POST["Course_name"];
                $submit = false;
            } else {
                $Course_name = test_input2($_POST["Course_name"]);
                if (!preg_match("/^[a-z A-Z 0-9]*$/", $Course_name)) {
                    echo $_POST["Course_name"];
                    $submit = false;
                }
            }
            if (empty($_POST["Decription"])) {
                echo $_POST["Decription"];
                $submit = false;
            } else {
                $Decription = test_input2($_POST["Decription"]);
                if (!preg_match("/^[a-z A-Z 0-9]*$/", $Decription)) {
                    echo $_POST["Decription"];
                    $submit = false;
                }
            }
            if (empty($_POST["Instructor"])) {
                echo $_POST["Instructor"];
                $submit = false;
            } else {
                $Instructor = test_input2($_POST["Instructor"]);
                if (!preg_match("/^[a-zA-Z]*$/", $Instructor)) {
                    echo $_POST["Instructor"];
                    $submit = false;
                }
            }

            //start

            $filename=basename($_FILES["Courseimg"]["name"]);
            $target_dir = dirname(__FILE__) . "/uploads/courses/";
            $target_file = $target_dir . basename($_FILES["Courseimg"]["name"]);
            echo "$target_file";
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
            if (isset($_POST["Addcourse"])) {
                $check = getimagesize($_FILES["Courseimg"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                } else {

                    echo "File is not an image.";
                    $submit = false;
                }
            }
// Check if file already exists
            /*    if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    $submit = false;
                }*/
// Check file size
            if ($_FILES["Courseimg"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                $submit = false;
            }
// Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $submit = false;
            }
// Check if $uploadOk is set to 0 by an error
            if ($submit === false) {
                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            }

            //end

            if ($submit === true) {
                $server_name = "localhost";
                $user_name = "root";
                $password = "";
                $database = "web_project";
                $conn = new mysqli($server_name, $user_name, $password, $database);
                if ($conn->connect_error) {
                    $die = die("Connection Failed: " . $conn->connect_error);

                } else {#   echo "<script>
#alert('$first_name');
#</script>";

                    $sql = "select `instrctors`.InstructorID from `instrctors`,instructors_courses where `instrctors`.InstructorID=`instructors_courses`.InstructorID and 'tamer'=`instrctors`.Username";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        for ($i = 0; $i < $result->num_rows; $i++) {
                            $row = $result->fetch_assoc();
                            $InstructorID = $row["InstructorID"];


                        }
                    }

                    $sql1 = "INSERT INTO course (Course_Name,picture)
                    VALUES ('$Course_name','$filename')";
                    $sql2 = "INSERT INTO instructors_courses (InstructorID,Decription)
                    VALUES ('$InstructorID','$Decription')";
                    echo $sql2;
                    echo $sql;
                    if (move_uploaded_file($_FILES["Courseimg"]["tmp_name"], $target_file)) {
                        echo "The file " . basename($_FILES["Courseimg"]["name"]) . " has been uploaded.";
                        if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
                            echo "<script type='text/javascript'>
    $(document).ready(function () {
        swal('Added Successfully');
    });
    </script>";
                        }
                    } else {
                        echo "<script type='text/javascript'>
    $(document).ready(function () {
        swal('there is a problem !');
    });
    </script>";
                    }


                }

                $conn->close();
            } else {
                echo "no";

                unset($signup);
                echo "
<script type='text/javascript'>
    $(document).ready(function () {
        swal('Invalid inputs formats');
    });
</script>";

            }
        }
        function test_input2($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = strtolower($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        ?>

        <!--end courseAdd processing-->




    </div>
</div>

</div>
</div>

<div style="
    background-color: #f9fafb;
    margin-right: 0px;
    margin-left: 0px;
"  class="row container-fluid section-top-border">
    <div class="col-lg-6  progress-table-wrap">

        <div class="progress-table">
            <div style="background-color: #012245;" class="table-head">
                <div style='color: white' class="serial">#</div>
                <div style='color: white' class="visit">Name </div>
                <div style='color: white' class="country">Image</div>
                <div style='color: white' class="percentage">Decision</div>
            </div>

            <?php
            $numberOfUsers=0;
            $server_name = "localhost";
            $user_name = "root";
            $password = "";
            $database = "web_project";
            $conn = new mysqli($server_name, $user_name, $password, $database);
            if ($conn->connect_error) {
                die("Connection Failed: " . $conn->connect_error);
            }
            else {
                if(isset($_GET['admin'])){
                    $admin=$_GET['admin'];
                }
                elseif (isset($_SESSION["name"]))
                $admin=$_SESSION["name"];
                $sql = " select * from `users` where 0  =  Valid";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    for ($i = 0; $i < $result->num_rows ; $i++) {
                        $row = $result->fetch_assoc();
                        $numberOfUsers = $numberOfUsers + 1 ;
                        $Full_Name = $row['First_Name'] . " "  . $row['Family_Name'];
                        $usr_name=$row['User_Name'];
                        echo " 
                <div class=\"table-row\" >
                <div style='color: blue'  class=\"serial\" > $numberOfUsers</div >
                <div style='font-weight: bold; color: #1b1e21' class=\"visit\" >$Full_Name</div >
                <div  class=\"country\" ><img width='70' height='50' src='img/idCard2.jpg' onclick=\"document.getElementById('modal01').style.display='block'\"
                style=\"cursor:zoom-in\">
                </div>

  <div id=\"modal01\" class=\"w3-modal\" onclick=\"this.style.display='none'\">
    <span class=\"w3-button w3-hover-red w3-xlarge w3-display-topright\">&times;</span>
    <div class=\"w3-modal-content w3-animate-zoom\">
      <img src=\"img/idCard2.jpg\" style=\"width:100%\">
    </div>
  </div>
                
                
                <div class=\"percentage\" >
                    <a href='admin.php?admin=$admin&acceptance=1&usr=$usr_name'  class=\"btn\" style = \"background-color: greenyellow; margin-right: 5px\" > Accept </a >
                    <a href='admin.php?admin=$admin&acceptance=0&usr=$usr_name' class=\"btn\" style='background-color: red' > Reject</a >
                </div >
            </div >";
                    }
                }
            }
            ?>

        </div>
    </div>
</div>



</body>
</html>

