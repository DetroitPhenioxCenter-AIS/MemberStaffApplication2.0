<?php 
     session_start();
?>
<?php
$conn = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($conn,'USERBASE');
$mid=$_SESSION['m_id'];
echo $mid;
if(isset($_POST['programs'])){//to run PHP script on submit

if(!empty($_POST['program'])){
// Loop to store and display values of individual checked checkbox.
	$str='';
foreach($_POST['program'] as $selected){
    $str.=$selected;
    $str.=',';
}
echo $str;
}
$sql3="UPDATE member SET Programs='$str' WHERE M_ID='$mid' ";
mysqli_query($conn,$sql3);
header('Location:memindex.php?program=update');
}
?>