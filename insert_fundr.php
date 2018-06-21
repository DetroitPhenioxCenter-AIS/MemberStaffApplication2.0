<?php
  // Create database connection
  $conn=mysqli_connect('127.0.0.1','root','');
  mysqli_select_db($conn,'USERBASE');

  

  // If upload button is clicked ...
  if (isset($_POST['addfnd'])) {
  	// Get image name
  	$image = mysqli_escape_string($conn,$_FILES['fndi']['name']);
  	echo $image;
  	// Get text
  	$name=mysqli_escape_string($conn,$_POST['fndn']);
	$amt=mysqli_escape_string($conn,$_POST['fnda']);
	$description=mysqli_escape_string($conn,$_POST['fndd']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO fundraiser(Name,Amount,Description,Image) VALUES ('$name','$amt','$description','$image')";
  	// execute query
  	echo mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['fndi']['tmp_name'], $target)) {
  		header('Location:index.php?fnd=yes');
  	}else{
  		echo "Failed to upload image";
  	}
  }
 
?>