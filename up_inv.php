<?php
$conn = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($conn,'USERBASE');

$query="UPDATE inventory
SET Need = '{$_POST['invu']}'
WHERE In_ID='{$_POST['invi']}'";
//sends the query to delete the entry
if (mysqli_query ($conn,$query)) { 
//if it updated
 header('Location: index.php?updatei=success');

}
?>