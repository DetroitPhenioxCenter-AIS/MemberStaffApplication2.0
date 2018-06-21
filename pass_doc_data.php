<?php
 $conn = mysqli_connect('127.0.0.1','root','');
 mysqli_select_db($conn,'USERBASE');
$cate=$_POST['data_to_be_pass'];
//Washer dryer
$docl = mysqli_query($conn,"SELECT Name,Docpath from docs where Category='$cate'");

//Lounge area count	
$docll = mysqli_fetch_array($docl);
    
    
echo json_encode($docll);
 ?>
