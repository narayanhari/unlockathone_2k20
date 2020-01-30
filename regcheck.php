<?php 
    require_once("config.php");
?>
<?php

	$name=mysqli_real_escape_string($connection,$_POST["username"]);
	$reg=mysqli_real_escape_string($connection,trim($_POST["regno"]));
	$mail=mysqli_real_escape_string($connection,$_POST["email"]);
	$pass=mysqli_real_escape_string($connection,$_POST["password"]);
	$num=mysqli_real_escape_string($connection,$_POST["num"]);
	$uid_query="SELECT UID FROM login WHERE UID='$reg'";
	$uid_result=mysqli_query($connection,$uid_query);
	if($uid_result){
		echo " hello";
	}
	else{
		echo "hut";
	}
	$uid_row=mysqli_fetch_assoc($uid_result);
	$uid_count=mysqli_num_rows($uid_result);

	if(!isset($name) || $name=="")
		header("Location: register.php?err=2");
	else if(!isset($reg) || $reg=="")
		header("Location: register.php?err=4");
	else if(!isset($num) || $num=="")
		header("Location: register.php?err=7");
	else if(!isset($mail) || $mail=="")
		header("Location: register.php?err=5");
	else if(!isset($pass) || $pass=="")
		header("Location: register.php?err=6");
	else if($uid_count)
		header("Location: register.php?err=1");
	else if(strlen($reg)!=9)
		header("Location: register.php?err=3");
	else if(strlen($num)!=10)
		header("Location: register.php?err=8");
	else if(strlen($pass)<6)
		header("Location: register.php?err=9");
	// else if(!check_captcha())
	// {
	// 	header("Location: register.php?err=11");
	// }

	else{
		echo $name . " " . $mail . " " . $reg . " " . " " . $num ;
		$score=0;$status=1;$skips=3;
		$query="INSERT INTO login(name, email_id, UID, PASS, score, status, skips) VALUES('{$name}','{$mail}','{$reg}','{$pass}','{$score}','{$status}','{$skips}')";
		$result=mysqli_query($connection, $query);
		if($result) {
			echo "Theeeeeek";
		}
		else {
			echo "Contact admin";
		}
		if($result)
		{
			header("Location: login.php?success=1");
		}
	}
function check_captcha()
{


	$response = $_POST["g-recaptcha-response"];
	if(strlen($_POST["g-recaptcha-response"])==0)
	{
		return false;
	}
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => '6LdH4M8UAAAAAFPfANGBdzmnl7PDeJFvBJnQuhDo',
		'response' => $_POST["g-recaptcha-response"]
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success=json_decode($verify);
	if ($captcha_success->success==false) {
		return false;
	} else if ($captcha_success->success==true) {
		return true;
	}
}
?>