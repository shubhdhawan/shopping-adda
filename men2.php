<?php
session_start();
if($_SESSION['logged_in']==0)
{
  $login="login.php";
  $lname="SIGN IN";
}
else
{
  $login="logout.php";
  $lname="SIGN OUT";
}
?>
<html>
<head>
<title>Shopping Adda</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
       function logout()
{
                document.getElementById("logout").submit();

}</script>


<STYLE>
.font{ font-family: "playball",playball;
     font-size:5vw;}	
	 
 .panel-body{ color:black;}	 
	 
.navbar-brand { position: relative; z-index: 2; }

.navbar-nav.navbar-right .btn { position: relative; z-index: 2; padding: 4px 20px; margin: 10px auto; transition: transform 0.3s; }

.navbar .navbar-collapse { position: relative; overflow: hidden !important; }
.navbar .navbar-collapse .navbar-right > li:last-child { padding-left: 22px; }

.navbar .nav-collapse { position: absolute; z-index: 1; top: 0; left: 0; right: 0; bottom: 0; margin: 0; padding-right: 120px; padding-left: 80px; width: 100%; }
.navbar.navbar-default .nav-collapse { background-color: #f8f8f8; }
.navbar.navbar-inverse .nav-collapse { background-color: #222; }
.navbar .nav-collapse .navbar-form { border-width: 0; box-shadow: none; }
.nav-collapse>li { float: left; }

.btn.btn-circle { border-radius: 50px; }
.btn.btn-outline { background-color: transparent; }

.navbar-nav.navbar-right .btn:not(.collapsed) {
    background-color: rgb(111, 84, 153);
    border-color: rgb(111, 84, 153);
    color: rgb(255, 255, 255);
}

.navbar.navbar-default .nav-collapse,
.navbar.navbar-inverse .nav-collapse {
    height: auto !important;
    transition: transform 0.3s;
    transform: translate(0px,-50px);
}
.navbar.navbar-default .nav-collapse.in,
.navbar.navbar-inverse .nav-collapse.in {
    transform: translate(0px,0px);
}


@media screen and (max-width: 767px) {
    .navbar .navbar-collapse .navbar-right > li:last-child { padding-left: 15px; padding-right: 15px; } 
    
    .navbar .nav-collapse { margin: 7.5px auto; padding: 0; }
    .navbar .nav-collapse .navbar-form { margin: 0; }
    .nav-collapse>li { float: none; }
    
    .navbar.navbar-default .nav-collapse,
    .navbar.navbar-inverse .nav-collapse {
        transform: translate(-100%,0px);
    }
    .navbar.navbar-default .nav-collapse.in,
    .navbar.navbar-inverse .nav-collapse.in {
        transform: translate(0px,0px);
    }
    
    .navbar.navbar-default .nav-collapse.slide-down,
    .navbar.navbar-inverse .nav-collapse.slide-down {
        transform: translate(0px,-100%);
    }
    .navbar.navbar-default .nav-collapse.in.slide-down,
    .navbar.navbar-inverse .nav-collapse.in.slide-down {
        transform: translate(0px,0px);
    }
}	 
	 
	 
	 </style>
 </head>
<body style="background-color:#000033; color:#fff;" >
 <h1 class="font"><a href="index.php" style="color:white;text-decoration: none">Shopping Adda</a></h1>
 
  
    <!-- Second navbar for categories -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">HOME</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="men.php">Winter Collection</a></li>
            <li><a href="men.php">Summer Collection</a></li>
            <li><a href="men.php">Trending</a></li>
            <li><a href="men.php">Most viewed</a></li>
            <li><a href="men.php">Bestsellers</a></li>
            <li><a href="men.php">Celeberity Look</a></li>
            <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse1" aria-expanded="false" aria-controls="nav-collapse1">Categories</a>
            </li>
            <li><form action='<?php echo $login; ?>' method="get" id="logout">
       <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse4" aria-expanded="false" aria-controls="nav-collapse3" onclick="logout()"><font color="grey"><?php echo $lname; ?></font></a>
           </form> </li>
          </ul>
          <ul class="collapse nav navbar-nav nav-collapse" id="nav-collapse1">
            <li><a href="men.php">T-shirts</a></li>
            <li><a href="men.php">Shirts</a></li>
            <li><a href="men.php">Casuals</a></li>
            <li><a href="men.php">Trousers</a></li>
            <li><a href="men.php">Suits</a></li>
            <li><a href="men.php">Ethnic</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
	
	
	<div class="container-fluid">
   <div class="row">
     <div class="row">
   <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><div id="myCarousel" class="carousel slide" >
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  
  
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/11475583798798-Nautica-Men-Jackets-6441475583798570-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11475583798787-Nautica-Men-Jackets-6441475583798570-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/11475583798775-Nautica-Men-Jackets-6441475583798570-3.jpg" alt="New York">
    </div>
  
  
  
  </div>

  
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="Nautica Green Sleeveless Puffer Jacket"> Nautica<br> Green Sleeveless Puffer Jacket Rs.2999
      <input type="hidden" name="price" value="2999">
    <input type="hidden" name="image" value="images/11475583798798-Nautica-Men-Jackets-6441475583798570-1.jpg">
    <div class="form-group">  Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
                    Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
  </div>                 <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div>
    
   <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <div id="myCarousel1" class="carousel slide" >
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel1" data-slide-to="1"></li>
    <li data-target="#myCarousel1" data-slide-to="2"></li>
  
  
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/11503574228591-Roadster-Men-Black--Grey-Solid-Sweatshirt-1751503574228523-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11503574228567-Roadster-Men-Black--Grey-Solid-Sweatshirt-1751503574228523-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/11503574228537-Roadster-Men-Black--Grey-Solid-Sweatshirt-1751503574228523-3.jpg" alt="New York">
    </div>
  
  
  
  </div>

  
  <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel1" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="Roadster Black Grey Sweatshirt"> Roadster <br>Black Grey Sweatshirt Rs. 1199
      <input type="hidden" name="image" value="images/11503574228591-Roadster-Men-Black--Grey-Solid-Sweatshirt-1751503574228523-1.jpg">
      <input type="hidden" name="price" value="1199">
    <div class="form-group">  Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
               Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
    </div>                  
  <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div>  
    
  <div class="container-fluid">
   <div class="row">
     <div class="row">
   <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><img src="images/33a7b6ae-1205-43fd-b139-78d30c118d911542179533994-US-Polo-Assn-Men-Black-Solid-Reversible-Bomber-5031542179533791-1.jpg" class="img-responsive"></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="U.S. Polo Assn. Men Black Bomber Jacket"> U.S. Polo Assn. Men Black Bomber Jacket Rs. 3999
      <input type="hidden" name="price" value="3999">
      <input type="hidden" name="image" value="images/33a7b6ae-1205-43fd-b139-78d30c118d911542179533994-US-Polo-Assn-Men-Black-Solid-Reversible-Bomber-5031542179533791-1.jpg">
    <div class="form-group">  Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
                    Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
  </div>                 <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div>    
   
   <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><div id="myCarousel2" class="carousel slide">
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel2" data-slide-to="1"></li>
  
  
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/4f4c744e-853c-434d-8632-de7d8c38c6c91540362129646-Fort-Collins-Men-Jackets-2661540362129552-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/547ceffb-2977-4b27-be71-71a12e4b872f1540362129633-Fort-Collins-Men-Jackets-2661540362129552-2.jpg" alt="Chicago">
    </div>
 
  </div>

  
  <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel2" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="Fort Collins Men Navy Blue Solid Bomber Jacket"> Fort Collins<br>Men Navy Blue Solid Bomber Jacket Rs. 1499<input type="hidden" name="price" value="1499">
    <input type="hidden" name="image" value="images/4f4c744e-853c-434d-8632-de7d8c38c6c91540362129646-Fort-Collins-Men-Jackets-2661540362129552-1.jpg">
    <div class="form-group">  Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
                    Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
  </div>                 <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div>    
   
    <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><div id="myCarousel3" class="carousel slide" >
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel3" data-slide-to="1"></li>
    <li data-target="#myCarousel3" data-slide-to="2"></li>
  
  
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/11510035544392-Difference-of-Opinion-Navy-Printed-T-shirt-4871510035544044-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11510035544361-Difference-of-Opinion-Navy-Printed-T-shirt-4871510035544044-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/11510035544340-Difference-of-Opinion-Navy-Printed-T-shirt-4871510035544044-3.jpg" alt="New York">
    </div>
  
  </div>

  
  <a class="left carousel-control" href="#myCarousel3" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel3" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="Difference of Opinion Navy Printed T-shirt"> Difference of Opinion<br>Navy Printed T-shirt Rs. 450
      <input type="hidden" name="price" value="450">
    <div class="form-group">  Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
                    Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
  </div>                 <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div>    
    
    <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><div id="myCarousel4" class="carousel slide" >
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel4" data-slide-to="1"></li>
    <li data-target="#myCarousel4" data-slide-to="2"></li>
  
  
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/2290ef2c-f3a5-4be2-8e1b-7e010ef30e9e1542629266093-GAP-MENS-LOGO-FLEECE-PULLOVER-HOODIE-9371542629265921-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/8b9a0c1e-766f-47e4-a0cd-e2b57f3609301542629266077-GAP-MENS-LOGO-FLEECE-PULLOVER-HOODIE-9371542629265921-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/8b9a0c1e-766f-47e4-a0cd-e2b57f3609301542629266077-GAP-MENS-LOGO-FLEECE-PULLOVER-HOODIE-9371542629265921-3.jpg" alt="New York">
    </div>
 
  </div>

  
  <a class="left carousel-control" href="#myCarousel4" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel4" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="GAP Men Maroon Logo Pullover Hoodie"> GAP<br>Men Maroon Logo Pullover Hoodie Rs. 4179
      <input type="hidden" name="price" value="4179">
    <div class="form-group">  Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
                    Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
  </div>                 <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div>      
    
    
   <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><div id="myCarousel5" class="carousel slide" >
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel5" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel5" data-slide-to="1"></li>
    <li data-target="#myCarousel5" data-slide-to="2"></li>
  
  
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/11505298086595-Roadster-Men-Black-Printed-Sweatshirt-8891505298086360-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11505298086579-Roadster-Men-Black-Printed-Sweatshirt-8891505298086360-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/11505298086553-Roadster-Men-Black-Printed-Sweatshirt-8891505298086360-3.jpg" alt="New York">
    </div>
  
  
  
  </div>

  
  <a class="left carousel-control" href="#myCarousel5" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel5" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="Roadster Men Black Printed Sweatshirt"> Roadster<br>Men Black Printed Sweatshirt Rs. 899
      <input type="hidden" name="price" value="899">
    <div class="form-group">  Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
                    Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
  </div>                 <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div>        
    
    
  <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><div id="myCarousel6" class="carousel slide" >
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel6" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel6" data-slide-to="1"></li>
    <li data-target="#myCarousel6" data-slide-to="2"></li>
  
  
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/11473854424106-Kook-N-Keech-Black--Grey-Melange-Colourblocked-Sweatshirt-1091473854423751-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11473854424091-Kook-N-Keech-Black--Grey-Melange-Colourblocked-Sweatshirt-1091473854423751-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/11473854424061-Kook-N-Keech-Black--Grey-Melange-Colourblocked-Sweatshirt-1091473854423751-3.jpg" alt="New York">
    </div>

  
  
  </div>

  
  <a class="left carousel-control" href="#myCarousel6" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel6" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="Kook N Keech Black & Grey Sweatshirt"> Kook N Keech<br>Black & Grey Sweatshirt Rs. 1514
      <input type="hidden" name="price" value="1514">
    <div class="form-group">  Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
                    Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
  </div>                 <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div>          
   
   
   <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><div id="myCarousel7" class="carousel slide" >
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel7" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel7" data-slide-to="1"></li>
    <li data-target="#myCarousel7" data-slide-to="2"></li>
  
  
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/11503556428922-Roadster-Men-Blue-Printed-Hooded-Sweatshirt-6971503556428793-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11503556428922-Roadster-Men-Blue-Printed-Hooded-Sweatshirt-6971503556428793-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/11503556428922-Roadster-Men-Blue-Printed-Hooded-Sweatshirt-6971503556428793-3.jpg" alt="New York">
    </div>
  
  
  
  </div>

  
  <a class="left carousel-control" href="#myCarousel7" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel7" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="Roadster Men Blue Printed Hooded Sweatshirt"> Roadster<br>Men Blue Printed Hooded Sweatshirt Rs. 699
      <input type="hidden" name="price" value="699">
    <div class="form-group">  Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
                    Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
  </div>                 <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div>          
   
   
    <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><div id="myCarousel8" class="carousel slide" >
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel8" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel8" data-slide-to="1"></li>
    <li data-target="#myCarousel8" data-slide-to="2"></li>
  
  
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/8b0d1442-84b1-464d-ac05-a611eefaab631540970558870-na-5341540970558475-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/45521c5b-1c4d-47f1-917f-b4e404220ff81540970558799-na-5341540970558475-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/45521c5b-1c4d-47f1-917f-b4e404220ff81540970558799-na-5341540970558475-3.jpg" alt="New York">
    </div>
  
  
  </div>

  
  <a class="left carousel-control" href="#myCarousel8" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel8" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="LOCOMOTIVE Men Black Solid Padded Jacket"> LOCOMOTIVE<br>Men Black Solid Padded Jacket Rs. 4550
      <input type="hidden" name="price" value="4550">
    <div class="form-group">  Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
                    Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
  </div>                 <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div>          
   
   
   <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><div id="myCarousel9" class="carousel slide" >
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel9" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel9" data-slide-to="1"></li>
    <li data-target="#myCarousel9" data-slide-to="2"></li>  
  
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/2c34be72-4248-4ca5-936d-19b8cad7f1a01541484439778-United-Colors-of-Benetton-Men-Sweatshirts-6951541484439651-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/f11d7f5b-8950-4567-a134-cf7d95ed4afe1541484439766-United-Colors-of-Benetton-Men-Sweatshirts-6951541484439651-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/945f5b6d-4273-4d96-b68a-1f9c075f25071541484439756-United-Colors-of-Benetton-Men-Sweatshirts-6951541484439651-3.jpg" alt="New York">
    </div>
  
  
  </div>

  
  <a class="left carousel-control" href="#myCarousel9" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel9" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="United Colors of Benetton Off-White & Blue Sweatshirt"> United Colors of Benetton<br>Off-White & Blue Sweatshirt Rs. 1224<input type="hidden" name="price" value="1224">
    <div class="form-group">  Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
                    Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
  </div>                 <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div>          
   
   
   <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><img src="images/b36cf1b8-6e74-4847-876b-267eeb9b07f61541160237636-HERENOW-Men-Maroon--Grey-Regular-Fit-Printed-Casual-Shirt-8361541160237487-2.jpg" class="img-responsive"></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="HERE&NOW Men Maroon & Grey Printed Shirt"> HERE&NOW<br>Men Maroon & Grey Printed Shirt Rs. 1199
      <input type="hidden" name="price" value="1199">
    <div class="form-group">  Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
                    Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
  </div>                 <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div>  
           
          
   </body>
   </html>