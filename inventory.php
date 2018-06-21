<?php
	$conn=mysqli_connect('127.0.0.1','root','');
	
	mysqli_select_db($conn,'userbase');
	echo'data base se up';
		
	if(isset($_POST['addinve']))
   {
	$inventory=mysqli_escape_string($conn,$_POST['inventory']);
	$num=mysqli_escape_string($conn,$_POST['num']);
	$url=mysqli_escape_string($conn,$_POST['url']);
	
	/*$PFirstN=$_POST['PFirstN'];
	$PLastN=$_POST['PLastN'];
	$PGender=$_POST['PGender'];
	$PEmail=$_POST['PEmail'];
	$PPhone=$_POST['PPhone'];
	$Prel=$_POST['Prel'];
	$add=$_POST['add'];
	$add2=$_POST['add2'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];*/
	$sql2 = "INSERT INTO inventory(Item,Need,url) VALUES ('$inventory','$num','$url')";
	mysqli_query($conn,$sql2);
	echo'query';
   /* $sql2 = "INSERT INTO parent(Fname,Lname,Gender,Email,Phone,Relation,Address,Address2,City,State,Zip) VALUES ('$PFirstN','$PLastN','$PGender','$PEmail','$Prel','$add','$add2','$city','$state','$zip')";
    mysqli_query($conn,$sql2);
	*/
	header('Location:index.php?inv=yes');	
}
?>