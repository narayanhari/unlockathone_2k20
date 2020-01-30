<?php
	require_once("config.php");
	require_once("validation_functions.php");
	session_start();
    session_unset();
    session_destroy();
    session_start();
    if(!isset($_POST['success']))
    	$_POST['success']=0;
	$errors=[];

	$message="";
    if (isset($_POST["submit"])) {
	    $user=trim($_POST["username"]);
	    $pass=trim($_POST["password"]);
	    $user=mysqli_real_escape_string($connection,$user);
	    $pass=mysqli_real_escape_string($connection,$pass);
	    
	    $fields_required=["username","password"];
	    foreach ($fields_required as $field) {
	        if(!has_presence(trim($_POST[$field]))){
	            $errors[$field]= $field . " can't be empty";
	        }
	    }
	    if(empty($errors)){
	        $query="SELECT UID FROM login WHERE UID='$user' AND PASS='$pass'";
	        $result=mysqli_query($connection,$query);
	        $row=mysqli_fetch_assoc($result);
	        $query1="SELECT * FROM login WHERE UID='$user'";
	        $r1=mysqli_query($connection,$query1);
	        $row1=mysqli_fetch_assoc($r1);
	        $count = mysqli_num_rows($result);
	        if($count==1) {
		        $_SESSION['log']=911;
		        $_SESSION['userid']=$user;
		        header("Location: home.php?ans=1");
	        }
	        elseif ($row1['UID']==$user) {
	            $message="Wrong Password";
	        }
	        else{
	            $message="Wrong Username and Password";
	            $user="";
	        }
	    }
        else {
            $message="There are some errors";
        }
    }
    else {
        $user="";
        $message="";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ISTE Unlocathon</title>
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
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="padding-top: 6%;padding-bottom: 6%;">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/ISTE.jpg" alt="IMG">
				</div>
				<?php 
			            if($_POST['success']==1)
			                echo "
			            <div class=\"alert alert-success\" >
			                            <center>
			                          <strong>Registration Successful</strong>
			                          </center>   
			                        </div>";
			    ?>
				<form action="login.php?success=0" method="POST" class="login100-form validate-form" id="form1">
					<span class="login100-form-title">
				         Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Registraion Number is required">
						<input class="input100" type="text" name="username" placeholder="Registration Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" name="submit" value="LOGIN">
					</div>
					<div class="message" style="padding-left: 5%;padding-top: 8%;color: #FF6347; margin-left:3%; ">
			        <?php echo $message; ?>
			    </div>
				<div class="error" style="padding-left: 10px;">
			    <?php echo error_report($errors);?>
			    </div>

					<div class="text-center p-t-136" style="padding-top: 0%;">
						<a class="txt2" href="register.php?err=0">
							Don't have an account? Sign up 
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
				<!-- <h2>The event is over. Thanks for participating. The Winners will be contacted shortly.</h2> -->
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