<?php
session_start();
require 'phpmailer/PHPMailerAutoload.php';
$otpErr='';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if($_SESSION['otp'] == $_POST['otp'])
  {
    try{
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure='tls';
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->isHTML( true);
$mail->Username='shoppingaddaa1@gmail.com';
$mail->Password='24567980';
$mail->setFrom('shoppingaddaa1@gmail.com');
$mail->Subject='Shopping Adda Registration Success';
$_SESSION['otp']=mt_rand(1000,10000);
$mail->Body='<h1 align=center>Shopping Adda</h1><h2 align=left>Registration Success</h2><br><hr><p>Dear '.$name.'!!</p>Welcome to Shopping Adda<p>Enjoy shopping with us!!<br>Shopping Adda takes your account security very seriously. Shopping Adda will never email you and ask you to disclose or verify your Shopping Adda password, credit card, or banking account number. If you receive a suspicious email with a link to update your account information, do not click on the link—instead, report the email to Shopping Adda for investigation.<br>We hope to see you again soon.</p><br><p>For further assistance, contact our support team at support.shoppingadda@gmail.com</p><br>Regards,<br>Shopping Adda Team.';
$mail->AddAddress($email);
$mail->Send();

} catch (phpmailerException $e) {
echo $e->errorMessage(); //Pretty error messages from PHPMailer

} catch (Exception $e) {

echo $e->getMessage(); //Boring error messages from anything else!

}
    header("location:index.php");
  }
  else
  {
  $otpErr="Entered OTP is not correct.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopping Adda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  
  <style>
  body{ background-image:url("background.jpg");width:100%;height:100vh;
      background-repeat:no-repeat;
      	 color:#fff; }
 	  
	  
.formcontainer{border:0px solid #fff; padding:50px 60px; margin-top:20vh;
               -webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
               -moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
               box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
			   }	  
	  
.font{ font-family: "playball",playball;
     font-size:5vw;}	  
	  
	  
	  
	  
	  </style>
</head>
<body> 
 <h1 class="font">Shopping Adda</h1>
<div class="container-fluid">
  <div class="row">
  <div class="col-md-4 col-sm-4 col-xs-12"></div>
  <div class="col-md-4 col-sm-4 col-xs-12">
    <form class="formcontainer" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="form-group">
    <label for="otp">Enter OTP:</label>
    <input type="password" class="form-control" id="otp" name="otp">
    <span class="error" style="color:red">* <?php echo $otpErr;?></span>
  </div>
  <button type="Submit" class="btn btn-success btn-block">Submit</button>
</form></div>
   </div>
  </div>
 
</body>
</html>
