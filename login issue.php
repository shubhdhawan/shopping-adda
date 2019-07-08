<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $sub=$_POST['sub'];
  $email=$_POST['email'];
  $descrpt=$_POST['description'];
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
$mail->setFrom($email);
$mail->Subject=$sub;
$mail->Body=$descrpt;
$mail->AddAddress('shoppingaddaa1@gmail.com');
$mail->Send();

} catch (phpmailerException $e) {
echo $e->errorMessage(); //Pretty error messages from PHPMailer

} catch (Exception $e) {

echo $e->getMessage(); //Boring error messages from anything else!
}
header("location:dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopping Adda (Partner)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="828439187981-scd6hak8g5e6a702rnoj5ftca1gmgk05.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script> 
  
  <style>
  body{ background-image:url("background.jpg");width:100%;height:100vh;
      background-repeat:no-repeat;
      	 color:#fff; }
 	  
	  
.formcontainer{border:0px solid #fff; padding:50px 60px; margin-top:10vh;
               -webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
               -moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
               box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
			   }	  
	  
.font{ font-family: "playball",playball;
     font-size:5vw;}	  
	  
	  
	  
	  
	  </style>
</head>
<body> 
 <h1 class="font"><a href="dashboard.php" style="color:white">Shopping Adda</a></h1>
<div class="container-fluid">
  <div class="row">
  <div class="col-md-4 col-sm-4 col-xs-12"></div>
  <div class="col-md-4 col-sm-4 col-xs-12">
    <form class="formcontainer" action="" method="post"> 
  <div class="form-group">
    <label for="email">E mail:</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="sub">Subject</label>
    <input type="text" class="form-control" id="sub" name="sub">
  </div>
  <div class="form-group">
    <label for="descrpt">Description:</label>
    <input type="text" class="form-control" name = "description">
    <br>
    <button type="Submit" class="btn btn-success btn-block">Submit</button>
  </div>
 
</form>

</div>
   </div>
  </div>

 
</body>
</html>
