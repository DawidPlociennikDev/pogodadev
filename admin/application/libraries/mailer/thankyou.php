<?php
require 'config.php';
require 'functions.php';
require 'PHPMailerAutoload.php';
if($_GET['liame'] != '' && $_GET['email'] == ''){
  $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = $cfg['smtp_host'];
  $mail->SMTPAuth = true;         
$mail->SMTPOptions = array(
                                 'ssl' => array(
                                     'verify_peer' => false,
                                     'verify_peer_name' => false,
                                     'allow_self_signed' => true
                                 )
                             );                         // Enable SMTP authentication
  $mail->Username = $cfg['smtp_user'];
  $mail->Password = $cfg['smtp_pass'];

  $mail->Port = $cfg['smtp_port'];

  $mail->setFrom($cfg['smtp_user'], 'Noepoland.eu  - formularz kontaktowy');
  //$mail->AddBCC($_GET['mymail']);
  $mail->AddBCC('nean12.bg@gmail.com');
  if(!empty($_GET['liame']))
  {
    $mail->addReplyTo($_GET['liame']);
  }

  $mail->isHTML(true);
  $mail->CharSet = 'UTF-8';

  $mail->Subject = 'Noepoland.eu - formularz kontaktowy';
  $mail->Body    = build_mail_body($_GET);
  if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  }
}

?>
