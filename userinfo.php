
<?php
use PHPMailer\PHPMailer\PHPMailer;

  $email = "nisarg026@gmail.com";
  $subject = "Query from customer";
  $mobile = $_POST['mobile'];
  $name=$_POST['name'];
  $message= "ghdg";
  $headers="From: jagtapshruti2610@gmail.com";
  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";
  $mail=new PHPMailer();
$mail->isSMTP();
$mail->Host ="smto.gmail.com";
$mail->SMTPAuth = true ;
$mail->Username = "jagtapshruti2610@gmail.com";
$mail->Password = '%^^^^^^^^^^^^';
$mail->Port=465;
$mail->SMTPSecure="ssl";
$mail->isHTML(true);
$mail->addAddress("jagtapshruti2610-@gmail.com");
$mail->Subject = ("$email($subject)");
$mail->Body= $message;

  if($mail->send())
    {echo"Sucess";}
  else {
    echo"cannot send mail";
  }
 ?>
