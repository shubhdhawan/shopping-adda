<?php
session_start();
require_once('settings.php');

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

   <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="828439187981-72c8qm4u7bv94ckjvcidea3fiv3vvgeb.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  
  
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
    <form class="formcontainer" method="post" action="loginphp.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pass">
  </div>
  <button type="Login" class="btn btn-success btn-block">Login</button>
<center>--Or--
  <div class="register">
  <a href="signup.php"style="color:white">Register now</a></div>
  --Or--<br>
  <a href="<?= 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>" style="color:white">Login with Google</a>
</center><hr>
<div class="pl" align="center">
  <a href="plogin.php" style="color:white">Partner Login</a></div>
</form>

</div>
   </div>
  </div>

 
</body>
</html>
