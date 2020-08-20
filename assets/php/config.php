<?php 
$host = 'localhost';
$dbusername = 'root';
$dbpass = '';
$database = 'quiz_app';

if($conn = mysqli_connect($host, $dbusername, $dbpass)){
	if(mysqli_select_db($conn, $database)){
		//echo 'connection success';
	}
	else{
		echo 'database selectin failed';
	}
}
else{
	echo 'Conection failed';
}



 ?>