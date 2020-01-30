<?php
	include("session.php");
	include("config.php");

	$uid = $_SESSION['userid'];
	$status_query="SELECT status, skips FROM login WHERE UID=$uid";
	$status_result=mysqli_query($connection,$status_query);
	$status_row=mysqli_fetch_assoc($status_result);
	$state=$status_row["status"];
	$skips = $status_row["skips"];
	if($skips == 0) {
		header("Location: home.php?ans=1");
	}
	else {
		$state= $state + 1;
		$skips= $skips - 1;
		echo $uid;
		echo $state  . " " . $skips;
		$update_query="UPDATE login SET status=$state, skips=$skips WHERE UID='$uid'";
		$update_result=mysqli_query($connection,$update_query);
		header("Location: home.php?ans=1");
	}
?>