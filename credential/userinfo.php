<?php
use PHPMailer\PHPMailer\PHPMailer;

  $subject = "Query from customer";
  $mobile = $_POST['mobile'];
  $name=$_POST['name'];
  $message= "hjkihh";
  $headers="From: anew.wall0@gmail.com";
  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";
$mobile=$_POST['mobile'];
$name=$_POST['name'];
$body=$mobile." ".$name;
$email=$_POST['email'];
sendmail("shadowhokage666@gmail.com","Reminder for call ".$name,$body);
echo "Calling for 1st";
sendmail($email,"You will be notified soon","Thankyou ".$name." for joining with us.We will call you soon");
echo "Calling for 2nd";
function sendmail($email,$subject,$body)
{
echo $email."<br>";
$mail=new PHPMailer();
$mail->isSMTP();
$mail->Host ="smtp.gmail.com";
$mail->SMTPAuth = true ;
$semail=getenv('EMAIL');
$spassword=getenv('PASSWORD');
$mail->Username = $semail;
$mail->Password = $spassword;
$mail->Port=465;
$mail->SMTPSecure="ssl";
$mail->isHTML(true);
$mail->addAddress("$email");
$mail->Subject = ("$subject");
$mail->Body= $body;
  if($mail->send())
    {echo"Sucess";
    }
  else {
    echo"cannot send mail";
  }

}
 ?>
