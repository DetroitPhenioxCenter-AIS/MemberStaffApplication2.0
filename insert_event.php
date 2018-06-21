<?php
  // Create database connection
  $conn=mysqli_connect('127.0.0.1','root','');
  mysqli_select_db($conn,'USERBASE');

  

  // If upload button is clicked ...
  if (isset($_POST['addevent'])) {
  	// Get image name
  	$image = mysqli_escape_string($conn,$_FILES['eventi']['name']);
  	echo $image;
  	// Get text
  	$name=mysqli_escape_string($conn,$_POST['eventn']);
	$date=mysqli_escape_string($conn,$_POST['eventd']);
	$venue=mysqli_escape_string($conn,$_POST['eventv']);
	$description=mysqli_escape_string($conn,$_POST['eventdn']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO events(Name,Edate,Venue,Description,Image) VALUES ('$name','$date','$venue','$description','$image')";
  	// execute query
  	echo mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['eventi']['tmp_name'], $target)) {
  		header('Location:index.php?event=yes');
  	}else{
  		echo "Failed to upload image";
  	}
  }
 
?>