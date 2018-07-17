<?php
	$username = $_POST['acname'];
	$pass = $_POST['password'];
	
	$username = stripcslashes($username);
	$pass = stripcslashes($pass);
	
	$username = mysql_real_escape_string($username);
	$pass = mysql_real_escape_string($pass);
	
	mysql_connect('localhost','root','');
	mysql_select_db('login');
	
	$result = mysql_query("select * from users where username='$username' and password='$pass' ") or die("Failed to query database".mysql_error());
	$row = mysql_fetch_array($result);
	if($row["username"]==$username && $row["password"]==$pass)
	{
		echo "Lgin Successful   ";
		echo "Welcome ".$username;
	}
	else
	{
		echo "Check filled information again";
	}
?>