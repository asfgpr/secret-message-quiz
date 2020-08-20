<?php 
require 'assets/php/config.php';
if(isset($_POST['del'])){
	if(isset($_COOKIE['userid'])){
		mysqli_query($conn, "UPDATE user SET del = '0'");
		setcookie('userid', $uid, time() - 3600, "/");
	}
	header("Location: index.php");
}
 ?>