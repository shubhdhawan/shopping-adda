<?php
require 'phpmailer/PHPMailerAutoload.php';
try{
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure='tls';
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->isHTML( true);
$mail->Username='sswrndeep@gmail.com';
$mail->Password='24567980';
$mail->setFrom('sswrndeep@gmail.com','Swarndeep');
$mail->Subject='test run';
$mail->Body='hi this is a test';
$mail->AddAddress('coolshubh.dhawan5@gmail.com');
$mail->Send();
echo "Message Sent OK<p></p>\n";

} catch (phpmailerException $e) {
echo $e->errorMessage(); //Pretty error messages from PHPMailer

} catch (Exception $e) {

echo $e->getMessage(); //Boring error messages from anything else!

}
?>