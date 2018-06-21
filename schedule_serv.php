<?php
  			session_start();
    ?>
<?php

	$conn=mysqli_connect('127.0.0.1','root','');
	
	mysqli_select_db($conn,'userbase');
		
	if(isset($_POST['schedule']))
   {
	$date=mysqli_escape_string($conn,$_POST['sdate']);
	$int=mysqli_escape_string($conn,$_POST['int']);
	$outt=mysqli_escape_string($conn,$_POST['outt']);
	$service=mysqli_escape_string($conn,$_POST['service']);
	echo'variables set';
   
	//$insert_path="INSERT INTO image_table VALUES('$folder','$upload_image')";
	//$var=mysqli_query($inser_path);
	$name=$_SESSION['memname'];
	$mid=$_SESSION['m_id'];
	echo $name;
	$sql2 = "INSERT INTO serviceapp(M_ID,Name,Sdate,Intime,Outtime,Service) VALUES ('$mid','$name','$date','$int','$outt','$service')";
	echo(mysqli_query($conn,$sql2));
	
}

header('Location:memindex.php?app=yes');

?>