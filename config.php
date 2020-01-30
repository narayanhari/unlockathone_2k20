<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="unlock2019";
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(mysqli_connect_errno()){
	die("Database cant load"); 
}
// $dbhost="139.59.72.149";
// $dbuser="admin_user1";
// $dbpass="isteistewebweb";
// $dbname="admin_unlockathon";
// $connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
// if(mysqli_connect_errno()){
// 	die("Database cant load"); 
// }
?>