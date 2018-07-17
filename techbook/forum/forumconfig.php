<?php

	$conn = mysql_connect('localhost','root','');
	mysql_select_db('student');
	include('session.php');
	
	$qtitle = $_POST['q_title'];
	$qdes = $_POST['q_des'];


	$q = "INSERT INTO questions (username, q_title, q_des,avatar) VALUES ('$username', '$qtitle', '$qdes', '$avt')";
	$query = mysql_query($q);


	header('Location:forum.php');


?>