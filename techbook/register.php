<?php


		$conn = mysql_connect('localhost','root','');
		mysql_select_db('student');


		$username = $_POST['username'];
		$colid = $_POST['colid'];
		$pass = $_POST['password'];
		$email = $_POST['email'];


		

if(!isset($_FILES["img"]["name"]))
{

	echo 'upload a file';

}

else
{
		$target_dir = "image/";

$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$extension = end(explode(".", $_FILES["img"]["name"]));


$imagename = $_POST['colid'].".".$extension;


    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if($check !== false) {
       
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }


if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["img"]["tmp_name"], "image/".$_POST['colid'].".".$extension)) {
		
		$im = $_POST['colid'].".".$extension;
		
		$query = "INSERT INTO students (username, college_id, email, password, avatar) VALUES ('$username', '$colid', '$email','$pass', '$im')";
		$retval = mysql_query($query);
		
		
        echo'<script>alert("Registered Successfully");

                window.location="index.php";

            </script>';
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




}

/*

else
	{
		//set that to be the returned message
		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['img']['error'];
	}
*/


		if(! $retval )
{
  die('Could not enter data: ' . mysql_error());

}



?>