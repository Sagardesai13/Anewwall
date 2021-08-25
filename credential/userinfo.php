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
  require_once __DIR__.'../.env';
  $mail=new PHPMailer();
$mail->isSMTP();
$mail->Host ="smtp.gmail.com";
$mail->SMTPAuth = true ;
$mail->Username = getenv('EMAIL');
$mail->Password = getenv('PASSWORD');
$mail->Port=465;
$mail->SMTPSecure="ssl";
$mail->isHTML(true);
$mail->addAddress("desai.sagar2002@gmail.com");
$mail->Subject = ("$subject");
$mail->Body= $name. " ".$mobile;
  if($mail->send())
    {echo"Sucess";
$mail->addAddress(null);
    }
  else {
    echo"cannot send mail";
  }
$subject="Your response has been submitted";
$message= "Thankyou for joining with us.We will call you soon";
$email=$_POST['email'];
$mail->addAddress("jagtapshruti2610@gmail.com");
$mail->Subject = ("$subject");
$mail->Body= $message;
if($mail->send())
  {echo"Sucess";}

else {
  echo"cannot send mail";
}

 ?>
