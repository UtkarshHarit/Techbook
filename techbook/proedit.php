<?php


		$conn = mysql_connect('localhost','root','');
		mysql_select_db('student');
		include('session.php');


		$idd = "";


		

		

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

$pp = "SELECT * FROM students WHERE username='$username'";
$pq = mysql_query($pp);

$result = mysql_fetch_array($pq);

$idd = $result['college_id'];

$imagename = $idd.".".$extension;


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
    if (move_uploaded_file($_FILES["img"]["tmp_name"], "image/".$idd.".".$extension)) {
		
		/*$im = $_POST['colid'].".".$extension;
		
		$query = "UPDATE students SET avatar='$im'";
		$retval = mysql_query($query);*/
		
		
        echo'<script>alert("Profile Picture Updated Successfully");

                window.location="pro.php";

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


	/*	if(! $retval )
{
  die('Could not enter data: ' . mysql_error());

}
*/


?>