<?php
 $conn = mysqli_connect('127.0.0.1','root','');
 mysqli_select_db($conn,'USERBASE');
$dat=$_POST['data_to_be_pass'];
//Washer dryer
$countmema = mysqli_query($conn,"SELECT count(*) as total from serviceapp where Service='Washer Dryer'and Sdate='$dat'");
$countma = (mysqli_fetch_array($countmema)); 
$wd=$countma[0];
//Lounge area count							
$countmeml = mysqli_query($conn,"SELECT count(*) as total from serviceapp where Service='Lounge area'and Sdate='$dat'");
$countml = (mysqli_fetch_array($countmeml));
$lga=$countml[0];
//Programming event							
$countmemp = mysqli_query($conn,"SELECT count(*) as total from serviceapp where Service='Programming Event'and Sdate='$dat'");
$countmp = (mysqli_fetch_array($countmemp)); 
$pe=$countmp[0];
//Computerlab							
$countmemc = mysqli_query($conn,"SELECT count(*) as total from serviceapp where Service='Computerlab'and Sdate='$dat'");
$countmc = (mysqli_fetch_array($countmemc)); 
$cl=$countmc[0];
//Councseling							
$countmemco = mysqli_query($conn,"SELECT count(*) as total from serviceapp where Service='Counselling'and Sdate='$dat'");
$countmco = (mysqli_fetch_array($countmemco)); 
$cc=$countmco[0];
//Identification							
$countmemi = mysqli_query($conn,"SELECT count(*) as total from serviceapp where Service='Identification'and Sdate='$dat'");
$countmi = (mysqli_fetch_array($countmemi)); 
$id=$countmi[0];
//people list who use washer dryer
$memwd = mysqli_query($conn,"SELECT * from serviceapp where Service='Washer Dryer'and Sdate='$dat'");
$memberwd = (mysqli_fetch_array($memwd)); 
//people list who use lounge area
$memlga = mysqli_query($conn,"SELECT * from serviceapp where Service='Lounge area'and Sdate='$dat'");
$memberlga = (mysqli_fetch_array($memlga)); 
//people list computer lab
$memcl = mysqli_query($conn,"SELECT * from serviceapp where Service='Computerlab'and Sdate='$dat'");
$membercl = (mysqli_fetch_array($memcl)); 
//people list councelling
$memcc = mysqli_query($conn,"SELECT * from serviceapp where Service='Counselling'and Sdate='$dat'");
$membercc = (mysqli_fetch_array($memcc));
//people list programming event
$mempe = mysqli_query($conn,"SELECT * from serviceapp where Service='Programming Event'and Sdate='$dat'");
$memberpe = (mysqli_fetch_array($mempe));
//people list identification
$memid = mysqli_query($conn,"SELECT * from serviceapp where Service='Identification'and Sdate='$dat'");
$memberid = (mysqli_fetch_array($memid)); 
$res = array("wd" => $wd,"lga" => $lga,"cl" => $cl,"cc" => $cc,"pe" => $pe,"id" => $id,"details" =>$memberwd,"detailsa" =>$memberlga,"detailsb" =>$membercl,"detailsc" =>$membercc,"detailsd" =>$memberpe,"detailse" =>$memberid);
echo json_encode($res);
 ?>