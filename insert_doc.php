<?php
  // Create database connection
  $conn=mysqli_connect('127.0.0.1','root','');
  mysqli_select_db($conn,'USERBASE');

  

  // If upload button is clicked ...
  if (isset($_POST['adddoc'])) {
  	// Get image name
  	$docs = mysqli_escape_string($conn,$_FILES['doc']['name']);
  	echo $docs;
  	// Get text
  	$category=mysqli_escape_string($conn,$_POST['cat']);
	  $name=mysqli_escape_string($conn,$_POST['docname']);

  	// image file directory
  	$target = "docs/".$category."/".basename($docs);
    echo $target;
  	$sql = "INSERT INTO docs(Name,Category,Docpath) VALUES ('$name','$category','$target')";
  	// execute query
  	echo mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['doc']['tmp_name'], $target)) {
  		header('Location:index.php?doc=yes');
  	}else{
  		echo "Failed to upload image";
  	}
  }
 
?>