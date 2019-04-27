
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
</head>
<body>

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
                <div class=\"visit\" ><a href = \"#\" > View </a ></div >
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
</div>
</body>
</html>