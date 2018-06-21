<?php

$conn = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($conn,'USERBASE');
//Define the query
if(isset($_POST['deletestaff'])){
$query = "DELETE FROM userstaff WHERE Name='{$_POST['names']}'";

//sends the query to delete the entry
if (mysqli_query ($conn,$query)) { 
//if it updated
 header('Location: index.php?deletes=success');

}
}
if(isset($_POST['deleteinv'])){
$query2 = "DELETE FROM inventory WHERE In_Id ='{$_POST['inv']}'";

//sends the query to delete the entry
if (mysqli_query ($conn,$query2)) { 
//if it updated
 header('Location: index.php?deleteinv=success');

}	
} 
if(isset($_POST['deleteevent'])){
$query3 = "DELETE FROM events WHERE E_ID ='{$_POST['namee']}'";

//sends the query to delete the entry
if (mysqli_query ($conn,$query3)) { 
//if it updated
 header('Location: index.php?deleteeve=success');

}	
} 
?>