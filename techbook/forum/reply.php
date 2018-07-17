<?php

	$conn = mysql_connect('localhost','root','');
	mysql_select_db('student');
	include('session.php');


	$rdes = $_POST['r_des'];
	$qid = $_POST['q_id'];

	$q = "INSERT INTO reply (username, r_des, q_id,avatar) VALUES ('$username', '$rdes', '$qid', '$avt')";
	$query = mysql_query($q);


	header('Location:forum.php');

?>