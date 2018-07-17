<?php

		
		$conn = mysql_connect('localhost','root','');
		mysql_select_db('student');


		$username = $_POST['username'];
		$pass = $_POST['password'];


		$q = "SELECT * FROM students WHERE username='$username' AND password='$pass'";
		$query = mysql_query($q);
		
		if(mysql_num_rows($query)>0)
		{
		
		$row = mysql_fetch_array($query);
		
		session_start();
		
		$_SESSION['user'] = $username;
		$_SESSION['pass'] = $pass;
		$_SESSION['av'] = $row['avatar'];
		

		$usn = $row['username'];
		$img = $row['avatar'];
		$ii = $row['college_id'];
		$mail = $row['email'];
		
		$_SESSION['avatar'] = $img;



		header('Location: forum/forum.php');
	
		}

			else{
		
		  echo'<script>alert("Wrong Username or Password");

                window.location="index.php";

            </script>';

		
			}


?>

