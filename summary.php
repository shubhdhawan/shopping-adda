<?php
session_start();
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
 	  
	  

.font{ font-family: "playball",playball;
     font-size:5vw;}	  
	  
	  
	  
	  
	  </style>
</head>
<body> 
 <h1 class="font"><a href="index.php" style="color:white;text-decoration: none">Shopping Adda</a></h1>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12">
    </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <form class="formcontainer" method="post" action="index.php">
          <div class="form-check">
            <font size="4">
              <img src="<?php echo $_SESSION['image'];?>" width="100px" height="100px" float="right">
            <label class="form-check-label">Product:  <?php echo $_SESSION['product'];?>
            </label>
            <label class="form-check-label">Quantity:  x <?php echo $_SESSION['quant'];?>
            </label>
            <br>
            <div class="form-group row">
              <div class="col-xs-6">
              <label for="ex1">Size:  <?php echo strtoupper($_SESSION['size']);?></label>
              </div>
            </div>
  
            <div class="form-group row">
              <div class="col-xs-6">
              <label for="ex1">Delivery To:  <?php echo $_SESSION['name'];?></label>
              
                <label for="ex1"><?php echo $_SESSION['hno'];?>, <?php echo $_SESSION['area'];?>, <br><?php echo $_SESSION['landmark'];?>, <?php echo $_SESSION['town'];?>, <?php echo $_SESSION['state'];?>,<br>
                  Pincode:  <?php echo $_SESSION['pin'];?></label>
                </div>
            </div>

            <div class="form-group row">
              <div class="col-xs-6">
              <label for="ex1"><b>Order Total:</b> <?php echo $_SESSION['price'] * $_SESSION['quant'];?></label>
              </div>
            </div> </font>
            <button type="Submit" class="btn btn-success btn-block">Continue Shopping?</button>
            
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
