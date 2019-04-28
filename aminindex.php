<?php session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Login V2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" href="1321027.png" type="image/png">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendors/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendors/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendors/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendors/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendors/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <!--===============================================================================================-->
    </head>
    <body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
                    <span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" type="text" name="name">
                        <span class="focus-input100" data-placeholder="User name"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" name="login">
                                Login
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

                        <a class="txt2" href="#">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendors/animsitionn/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendors/bootstrap/js/popper.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendors/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendors/daterangepicker/moment.min.js"></script>
    <script src="vendors/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendors/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="/js/main.js"></script>

    </body>
    </html>
