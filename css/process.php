<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysql_error($mysqli));

$update = false;
    $name = '';
	$price = '';
	$quantity = '';
	$description = '';
	$category = '';

if (isset($_POST['save']))
 {
	$name = $_POST['name'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$description = $_POST['description'];
	$category = $_POST['category'];
	/*$image = $_POST['image'];*/

	$_SESSION['message'] = "RECORD HAS BEEN SAVED";
	$_SESSION['msg_type'] = "SUCCESS";


	$mysqli->query("INSERT INTO data (name, price, quantity, description, category) VALUES ('$name', '$price', '$quantity', '$description', '$category')") or die($mysqli->error);
}

if (isset($_GET['delete']))
 {
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());

	$_SESSION['message'] = "RECORD HAS BEEN DELETED";
	$_SESSION['msg_type'] = "DANGER";

	header("location : index.php");
}



    $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysql_error($mysqli));
    $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
    //pre_r($result);
   // pre_r($result->fetch_assoc());
    //pre_r($result->fetch_assoc());
    

if (isset($_GET['edit']))
{
  $id = $_GET['edit'];
  $update = true;
  $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());

  if($result->num_rows)
  {
    $row = $result->fetch_array();
  	$name = $row['name'];
  	$price = $row['price'];
  	$quantity = $row['quantity'];
  	$description = $row['description'];
  	$category = $row['category'];	
  }
}




if (isset($_POST['save']))
 {
	$file = $_FILES['file'];
    print_r($file);
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf');

	if (in_array($fileActualExt, $allowed))
	 {
		if ($fileError===0)
		 {
			if (fileSize < 1000000)
			 {
				$fileNameNew = uniqid('', true)."".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header("location : index.php?uploadsuccess?");
			} else 
			{
				echo "Your file is too big!";
			}
		} else
		{
			echo "There was an error uploading your file!";
		}
	}
	else 
	{
		echo "You cannot upload files of this type!";
	}
}



