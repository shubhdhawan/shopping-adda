<?php
session_start();
require 'phpmailer/PHPMailerAutoload.php';
$con = mysqli_connect("localhost","root","","shoppingadda");
$nameErr = $emailErr = $passErr = "";
$name = $email = $repass = $phone = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$email1 = test_input($_POST["email"]);
  	if (empty($_POST["name"]))
  	{
    	$nameErr = "Name is required";
  	} 
  	elseif (!preg_match("/^[a-zA-Z ]*$/",$name)) 
  	{
      $nameErr = "Only letters and white space allowed";
    }
  	elseif (empty($_POST["email"])) 
  	{
    	$emailErr = "Email is required";
  	} 
  	elseif(!filter_var($email1, FILTER_VALIDATE_EMAIL)) 
  	{
      $emailErr = "Invalid email format"; 
    }
  	elseif (empty($_POST['pass']) ||empty($_POST['repass'] )) 
  	{
  		$passErr="Password is required";
  	}
  	elseif($_POST['pass']!=$_POST['repass'])
  	{
  		$passErr="Password does not match";
	}
	else{
		$name = test_input($_POST["name"]);
		$email=test_input($_POST["email"]);
		$pass=$_POST['pass'];
  		$phone = $_POST['phone'];
  		$_SESSION['name']=$name;

		$check ="SELECT * from login where email ='$email' ";
		$result = mysqli_query($con,$check);
		$num= mysqli_num_rows($result);
		if ($num == 1) {
		$emailErr= " e-mail already registered";
		}
		else
		{
		$statment = "INSERT into login (name,email,pass,phone) values ('$name','$email','$pass','$phone')";
		$res = mysqli_query($con ,$statment);
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
$mail->Subject='Shopping Adda Login OTP';
$_SESSION['otp']=mt_rand(1000,10000);
$mail->Body='<h1 align=center>Shopping Adda</h1><h2 align=left>Login OTP</h2><br><hr><p>Your Login OTP is:</p><h1>'.$_SESSION['otp'].'</h1><p>This OTP is confidential. For security reasons, DO NOT share the OTP with anyone.<br>Shopping Adda takes your account security very seriously. Shopping Adda will never email you and ask you to disclose or verify your Shopping Adda password, credit card, or banking account number. If you receive a suspicious email with a link to update your account information, do not click on the link—instead, report the email to Shopping Adda for investigation.<br>We hope to see you again soon.</p>';
$mail->AddAddress($email);
$mail->Send();

} catch (phpmailerException $e) {
echo $e->errorMessage(); //Pretty error messages from PHPMailer

} catch (Exception $e) {

echo $e->getMessage(); //Boring error messages from anything else!

}
		header("Location:otp.php");
		}
		}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
  body{ background-image:url("background.jpg");width:100%;height:100%;
      background-repeat:no-repeat;
      	 color:white; }
 	  
	  
.formcontainer{border:0px solid #fff; padding:50px 60px; margin-top:1vh;
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
			<div class="col-md-4 col-sm-4 col-xs-12">
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form class="formcontainer" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="form-group">
						<label for="Name">Name:</label>
						<input type="text" class="form-control" id="Name" name="name">
						<span class="error" style="color:red">* <?php echo $nameErr;?></span>
  					</div>
					<div class="form-group">
						<label for="No.">Phone No.</label>
						<input type="number" class="form-control" id="phone" name="phone">
					</div>
					<div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" class="form-control" id="email" name="email">
						<span class="error" style="color:red">* <?php echo $emailErr;?></span>
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" id="pass" name="pass">
						<span class="error" style="color:red">* <?php echo $passErr;?></span>
					</div>
					<div class="form-group">
						<label for="repwd">Confirm-Password:</label>
						<input type="password" class="form-control" id="repass" name="repass">
					</div>
					
					<button type="submit" class="btn btn-success btn-block" >Sign up</button>
				</form>
			</div>
		</div>
	</div>
 	
</body>
</html>
