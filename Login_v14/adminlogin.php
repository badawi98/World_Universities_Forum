<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V14</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="name" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button name="login" class="login100-form-btn">
							Login
						</button>

					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?
$username = $Password = $login = "";
$submit=true;
if (isset($_POST["login"])&& $_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $submit = false;
    } else {
        $username = test_input2($_POST["name"]);
    }
    if (empty($_POST["pass"])) {
        $submit = false;
    } else {
        $Password = htmlspecialchars($_POST["pass"]);
    }

    if ($submit == true) {
        $server_name = "192.168.1.23";
        $user_name = "tamer";
        $password = "tamer";
        $dbname = "web_project";
        $conn = new mysqli($server_name, $user_name, $password, $dbname);
        if ($conn->connect_error) {
            $die = die("Connection Failed: " . $conn->connect_error);
            echo "
<script type='text/javascript'>
        alert('$die');
</script> ";
        }
        else {
            if (isset($login)) {
                $sql = "select * from `Passwords`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    for ($i = 0; $i < $result->num_rows; $i++) {
                        $row = $result->fetch_assoc();
                        if ($row["User_Name"] == $username && $row["Password"] == sha1($Password)) {
                            break;
                        }

                    }
                    if($i < $result->num_rows ){
                        $sql = "select * from `admin` where '$username' = Username";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                            $_SESSION['name'] = $username;

                                echo "
                                    <script type='text/javascript'>
                                    window.location.replace('/phpstorm_projects/World_Universities_Forum/admin.php');
                                    </script>
                                ";
                            }
                        else {
                            echo " 
                            <script>
                                alert('Invalid');
                            </script>
                            ";
                        }
                    }
                }
            }

        }
    }
    else
        echo "no";
}
function test_input2($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strtolower($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
