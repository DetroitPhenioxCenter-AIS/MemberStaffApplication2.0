    <?php
  			session_start();
    ?>
    <?php
	
	if (isset($_POST['mlogin'])) 
	{
				$conn = mysqli_connect('127.0.0.1','root','');
	            mysqli_select_db($conn,'USERBASE');
	            echo 'database set';
				$usr = $_POST['usr'];
			    $pwd = $_POST['pwd'];
			   /* $usr = stripcslashes($usr);
			    $pwd = stripcslashes($pwd);
			    $usr = mysql_real_escape_string($usr);
			    $pwd = mysql_real_escape_string($pwd);*/
			    echo 'variables set';
			    $sql = "SELECT * FROM memlog WHERE username = '$usr' and password = '$pwd'";
			    $result = mysqli_query($conn,$sql);
			    $row = mysqli_fetch_array($result);
			    echo $row[0];
			    $sql1= "SELECT * FROM member WHERE Email = '$usr'";
			    $result1 = mysqli_query($conn,$sql1);
			    $row1 = mysqli_fetch_array($result1);
			    echo $row1[0];
        if($row['username'] == $usr and $row['password'] == $pwd){
			    	$_SESSION['u_id'] = $usr;
			    	$_SESSION['pwd'] = $pwd;
			    	$_SESSION['memname']=$row1['FirstN'];
			    	$_SESSION['m_id']=$row1['M_ID'];
			    	echo 'session set';
			    	header('Location: memindex.php?login=success');
			    	
			    }
			    else{
			
			    	header('Location: memberlogin.php?login=failure');
			    }
			    
               
}
else{
	header('Location: memberlogin.php');
	echo'nill';
}
	
   /* $sql2 = "INSERT INTO parent(Fname,Lname,Gender,Email,Phone,Relation,Address,Address2,City,State,Zip) VALUES ('$PFirstN','$PLastN','$PGender','$PEmail','$Prel','$add','$add2','$city','$state','$zip')";
    mysqli_query($conn,$sql2);
	*/
	
		
	//header("refresh:2;form.php");

?>