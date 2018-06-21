<?php
$conn = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($conn,'USERBASE');
if(isset($_POST['invite'])){//to run PHP script on submit
$eid=$_POST['eventid'];
$sqle="SELECT * FROM events WHERE E_ID='$eid'";
$resulte=mysqli_query($conn,$sqle);
$valuee=mysqli_fetch_array($resulte);
require 'PHPMailerAutoload.php';
require 'credential.php';
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){

$sql="SELECT FirstN FROM member WHERE Email='$selected'";
$result=mysqli_query($conn,$sql);
$value=mysqli_fetch_array($result);



$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASS;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom(EMAIL, 'Detroit Pheniox Center');
$mail->addAddress($selected);     // Add a recipient
/*$mail->addAddress($_POST['PEmail']);               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');*/
//$mail->addCC($_POST['PEmail']);
// $mail->addBCC('bcc@example.com');

/*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Event Invite';
$mail->Body    = '<html>
              <body style="font-family:Georgia, serif; ">
              <center>
        <div style="width:500px;background-color:#f5f5f5;border: 1px solid #a8a8a8; padding:20px; border-radius:2px;">
            <img src="https://scontent-ort2-2.cdninstagram.com/vp/dab330c3a04b24bb987abed742147509/5B8ABB80/t51.2885-19/s150x150/26873078_409153092875319_57809469530177536_n.jpg" height="100" width="100" style="border-radius:100%;"><br><br>
            Hello!&nbsp;'.$value[0].'
            <h2 style="color:#e60000;">DETROIT PHENIOX CENTER</h2>
             We are cordially inviting you all to '.$valuee[1].'. Please be there and support us.
            <br>
            Please <a href="http://localhost/TEST/createpassw.php">Register here</a> for the event.<br><br>
            <div style="padding:20px;background-color: #2c3840;">
                    <a  href="http://www.detroitphoenixcenter.org/index.html" style="color:white;">OurWebsite</a>&nbsp;&nbsp;&nbsp;<a  href="https://www.instagram.com/detroitphoenixcenter/" style="color:white;">Intsagram</a>&nbsp;&nbsp;&nbsp;<a  href="https://www.linkedin.com/company/detroit-phoenix-center" style="color:white;">Linkedin</a>
            </div>

        </center>
        </div>

        </body> 
        </html>  ';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}
}
header('Location:index.php?invite=yes');
}