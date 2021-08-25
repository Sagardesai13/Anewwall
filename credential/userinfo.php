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

sendmail("jagtapshruti2610@gmail.com","Inquiry from customer","Sample body");
sendmail("sahilsu1998@gmail.com","Inquiry from customer","Sample body");
function sendmail($email,$subject,$body)
{
$mail=new PHPMailer();
$mail->isSMTP();
$mail->Host ="smtp.gmail.com";
$mail->SMTPAuth = true ;
$email=getenv('EMAIL');
echo $email;
$password=getenv('PASSWORD');
$mail->Username = $email;
$mail->Password = $password;
$mail->Port=465;
$mail->SMTPSecure="ssl";
$mail->isHTML(true);
$mail->addAddress("$email");
$mail->Subject = ("$subject");
$mail->Body= $body;
  if($mail->send())
    {echo"Sucess";
$mail->addAddress(null);
    }
  else {
    echo"cannot send mail";
  }

}
 ?>
