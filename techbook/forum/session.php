
<?php
session_start();

if(!isset($_SESSION['user']))
{

  
  echo "<script>alert('You are not logged in')
  window.location='http://localhost/log/techbook/index.php';

  </script>";

}
else{
  

  $username=$_SESSION['user'];
  $password=$_SESSION['pass'];
  $avt = $_SESSION['av'];
  
}
?>