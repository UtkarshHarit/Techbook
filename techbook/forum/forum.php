<?php

	$avt = "";
	include('session.php');

?>

<!DOCTYPE HTML>

<!DOCTYPE html>
<html>
<head>
	<title>TECHBOOK FORUM</title>


	<style type="text/css">

	body
	{
		background-color: #000066;
	}
		

	.header
	{
		background-color: #000066;
	
		width: 100%;
        
	}


	.header button
	{
		background-color: #f2f2f2;
		 outline: 5px;
  
  width: 45%;
  border: 0;

  margin: 0 0 15px;

  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-sizing: border-box;
  font-size: 14px;
	}


	.post
	{
		padding: 8px 8px;
		background-color: lightgray;
		margin-left: 0px;
		box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.16), 0px 2px 10px 0px rgba(0, 0, 0, 0.12) ;
		
	}

	.post input
	{
		  outline: 5px;
  background: #f2f2f2;
  width: 100%;
  border: 0;

  margin: 0 0 15px;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-sizing: border-box;
  font-size: 14px;
	}

	.post input[type=submit]
	{
		background-color: #000066;
		color: #f2f2f2;
		box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.16), 0px 2px 10px 0px rgba(0, 0, 0, 0.12);
	}


	.question
	{
		padding: 5px 8px;
		background-color: gray;
		margin-left: 0px;
		margin-top: 10px;
		border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.16), 0px 2px 10px 0px rgba(0, 0, 0, 0.12);
  color: #f2f2f2;
	}

	.question h3
	{
	
		
		font-family: sans-serif;
		align-self: left;
		color: #f2f2f2;
	}

	.question img
	{
		border-radius: 50%;
		float: left;
		margin-right: 20px;

	}

	.question h4
	{
		
		margin-top: 0px;
		margin-bottom: 0px; 
		font-size: 20px;
		color: #f2f2f2;
	}

	.question h6
	{
		margin-left: 5%;
		margin-top: 0px;
		margin-bottom: 0px;
		font-size: 15px;
		color: #ccffe6;
	}




	.reply
	{
		padding: 8px 8px;
		background-color: lightgray;
		margin-left: 10%;
		margin-top: 5px;
		border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.16), 0px 2px 10px 0px rgba(0, 0, 0, 0.12) ;
	}


	.rep
	{
		padding: 8px 8px;
		background-color: lightgray;
		margin-left: 10%;
		margin-top: 3px;
		border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
	}

	.reply input
	{
		 outline: 5px;
  background: #f2f2f2;
  width: 70%;
  border: 0;

  margin: 0 0 15px;
  padding: 1%;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-sizing: border-box;
  font-size: 14px;
	}

	.reply input[type="submit"]
	{
		width: 25%;
		margin-left: 3%;
		margin-right: 0px;
		background-color: #000066;
		color: #f2f2f2;
		box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.16), 0px 2px 10px 0px rgba(0, 0, 0, 0.12);


	}



	</style>



</head>
<body>

<div class="header">
	<a href="http://localhost/log/techbook/pro.php" style="margin-left: 4%;" title="Goto Your PROFILE"><button>PROFILE</button></a>
	<a href="http://localhost/log/techbook/logout.php" style="margin-left: 3%;" title="logout"><button>LOGOUT</button></a>
</div>



	<div class="post">
	<form action="forumconfig.php" method="post" >
		<input type="text" name="q_title" placeholder="Question Title" required>
		<input type="text" name="q_des" placeholder="Question Description" required>
		<input type="submit" name="post" value="Post IT">
	</form>
	</div>


</body>
</html>




<?php

	$conn = mysql_connect('localhost','root','');
	mysql_select_db('student');
	
	

	$q = "SELECT * FROM questions ORDER BY q_id DESC";
	$query = mysql_query($q);




	while($result = mysql_fetch_assoc($query))
	{
		$qd = $result['q_id'];

			$q1 = "SELECT * FROM reply WHERE q_id='$qd' ORDER BY r_id DESC";
			$query1 = mysql_query($q1);

			$num = mysql_num_rows($query1);

			$avt = $result['avatar'];


		echo  '<div class="question">
		<img src="http://localhost/log/techbook/image/'.$avt.'"style="width:10%;height:10%;"/><h3>'.$result["username"].'</h3><br /><h4>'.$result["q_title"].'</h4><br /><h6>'.$result["q_des"].'</h6><br />REPLIES :-'.$num.'
		</div>';
		


            
            
           
		

		

			

			while($result1 = mysql_fetch_assoc($query1))
			{
				
				echo '<div class="rep">'.$result1['username'].' Replied :-         '.$result1['r_des'].'
				<hr></div>';
			}


			echo '

			<div class="reply">

			<form action="reply.php" method="post">

				<input type="text" name="r_des" placeholder="Answer Here" required/>
				<input type="text" name="q_id" style="display:none;" value="'.$qd.'" />
				<input type="submit" name="reply" value="Reply" />
				

			</form>
			</div>


			';


	}

?>