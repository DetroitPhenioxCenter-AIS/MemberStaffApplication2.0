<?php
	$conn=mysqli_connect('127.0.0.1','root','');
	
	mysqli_select_db($conn,'userbase');
	echo'data base se up';
		
	if(isset($_POST['fund_a']))
   {
   	$name=mysqli_escape_string($conn,$_POST['fund_n']);
	$bud_a=mysqli_escape_string($conn,$_POST['budget_a']);
	$act_a=mysqli_escape_string($conn,$_POST['actual_a']);
	$donor=mysqli_escape_string($conn,$_POST['donor_c']);
	$add_c=mysqli_escape_string($conn,$_POST['add_c']);
	
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
	$sql2 = "INSERT INTO Funds(Name,Budget,Actual,Donor_c,Add_c) VALUES ('$name','$bud_a','$act_a','$donor','$add_c')";
	mysqli_query($conn,$sql2);
	echo'query';
   /* $sql2 = "INSERT INTO parent(Fname,Lname,Gender,Email,Phone,Relation,Address,Address2,City,State,Zip) VALUES ('$PFirstN','$PLastN','$PGender','$PEmail','$Prel','$add','$add2','$city','$state','$zip')";
    mysqli_query($conn,$sql2);
	*/
	header('Location:index.php?fund=yes');	
}
?>