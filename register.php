<!DOCTYPE HTML>
<html>
	<head>
	<meta charset='UTF-8'>
	<title>TechBook-REGISTRATION</title>
	<style type="text/css">
	body {
			background-color:white;
			background-image:url(back3.png);
			background-repeat:no-repeat;
			background-position: 50% 10%;
			background-size: 100% 200%;
		}
		
	input{
    width: 20%;
	margin: 1px auto;
    padding: 1%;
	
			}
			input[type=button] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}

	</style>
	</head>
	
	<body>
		<br />
	 <center><h1 style="color:white"><?php
	 echo "REGISTRATION PAGE";
	 
	 ?></h1></center>
	 <center>
	 <div id="fields">
	 <form action="" method="post">
		<input type="text" placeholder="Username" name="acname" required="required"></br>
		<input type="text" placeholder="Email ID" name="email" required="required"></br>
		<input type="password" placeholder="Password" name="password" required="required"></br>
		<input type="password" placeholder="Re-Enter Password" name="repassword" required="required"></br>
		<input type="submit" value="Register" name="reg">
		<a href="login.php" ><input type="button" value="< Back to Login" name="log"></a>
	 </form>
	 </div></center>
	</body>
</html>