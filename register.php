<?php
    if(!isset($_GET['err']))
        header("Location: logout.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ISTE's Unlocathon</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="icon" type="image/png" href="images/iste.png"/>
<!--===============================================================================================-->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" >
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/ISTE.jpg" alt="IMG">
				</div>

				<form action="regcheck.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						Register 
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="username" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Registration Number is required">
						<input class="input100" type="text" name="regno" placeholder="Registration number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Mobile Number is required">
						<input class="input100" type="tel" name="num" placeholder="Mobile Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile-phone" style="font-size:24px" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Email id is required">
						<input class="input100" type="email" name="email" placeholder="Email Address">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div style="padding-left: 10%;padding-top: 8%;color: #FF6347;margin-left: 2%; ">
					<?php
                            if($_GET['err']==1)
                            {
                                echo "Registration number already taken";
                            }
                            if($_GET['err']==2)
                            {
                                echo "NAME FIELD CANNOT BE EMPTY";
                            }
                            if($_GET['err']==3)
                            {
                                echo "Registration number invalid";
                            }
                             if($_GET['err']==4)
                            {
                                echo "REGISTRATION NO. FIELD CANNOT BE EMPTY";
                            }
                             if($_GET['err']==5)
                            {
                                echo "EMAIL ID FIELD CANNOT BE EMPTY";
                            }
                             if($_GET['err']==6)
                            {
                                echo "PASSWORD FIELD CANNOT BE EMPTY";
                            }
                             if($_GET['err']==7)
                            {
                                echo "NUMBER FIELD CANNOT BE EMPTY";
                            }
                            if($_GET['err']==8)
                            {
                                echo "NUMBER MUST BE 10 DIGITS";
                            }
                            if($_GET['err']==9)
                            {
                                echo "PASSWORD MUST BE ATLEAST 6 CHARACTERS LONG";
                            }
                            if($_GET['err']==11)
                            {
                                echo "CAPTCHA IS WRONG";
                            }
                        ?>
                        <div class="g-recaptcha" data-sitekey="6LdH4M8UAAAAAN0U3IkDvNkiRdXiKV-5ozKHrCVn"></div>
                    	<div class="container-login100-form-btn">
							<input class="login100-form-btn" type="submit" name="submit" value="Sign UP">
						</div>
                    </div>
					
					<div class="text-center p-t-136" style="margin-top:0% ;padding-top: 3%;">
						<a class="txt2" href="login.php">
							Already have an account? LogIn
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>

				</form>
				
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>