<?php
	session_start();
	if(isset($_SESSION["username"]))
	{
		$user=$_SESSION["username"];
		echo "<h2 align='right'>You have logged in as $user</h2>";
		echo "<br>";
		echo "<a href=Login.php>LOGOUT</a>";
	}
	else
		header("location:Login.php");


?>