<?php
$conn = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($conn,'USERBASE');
if(isset($_POST['addcomm'])){
 echo'entered loop';
$sdate=mysqli_query($conn,"SELECT CURRENT_DATE()");
$date=mysqli_fetch_array($sdate);
$query="INSERT INTO comments(M_ID,DateC,Comment)VALUES('{$_POST['commid']}','$date[0]','{$_POST['comm']}')";
//sends the query to delete the entry
if (mysqli_query ($conn,$query)) { 
//if it updated
echo 'success';
 //header('Location: index.php?comm=success');

}
}
?>