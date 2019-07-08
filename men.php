<?php
session_start();

$conn = mysqli_connect("localhost","root","","shoppingadda");
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
            <li><a href="men2.php">Winter Collection</a></li>
            <li><a href="men2.php">Summer Collection</a></li>
            <li><a href="men2.php">Trending</a></li>
            <li><a href="men2.php">Most viewed</a></li>
            <li><a href="men2.php">Bestsellers</a></li>
            <li><a href="men2.php">Celeberity Look</a></li>
            <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse1" aria-expanded="false" aria-controls="nav-collapse1">Categories</a>
            </li>
          <li><form action='<?php echo $login; ?>' method="get" id="logout">
       <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse4" aria-expanded="false" aria-controls="nav-collapse3" onclick="logout()"><font color="grey"><?php echo $lname; ?></font></a>
           </form> </li>
         </ul>
          <ul class="collapse nav navbar-nav nav-collapse" id="nav-collapse1">
            <li><a href="men2.php">T-shirts</a></li>
            <li><a href="men2.php">Shirts</a></li>
            <li><a href="men2.php">Casuals</a></li>
            <li><a href="men2.php">Trousers</a></li>
            <li><a href="men2.php">Suits</a></li>
            <li><a href="men2.php">Ethnic</a></li>
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
      <img src="images/roadster1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/roadster2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/roadster3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Roadster Round Neck Stripped T-Shirt">Roadster<br> Round Neck Stripped T-Shirt Rs.999
      <input type="hidden" name="price" value="999"><input type="hidden" name="image" value="images/roadster1.jpg">
    <div class="form-group">	Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
									  Size: <select name="size"><option value="s">S</option>
                                      <option value="m">M</option>
                                      <option value="l">L</option>
                                    </select><br>
	</div>								 <button class="btn btn-danger" value="submit">BUY</button></div></form>
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
      <img src="images/roadsterc1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/roadsterc2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/roadsterc3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Roadster Charcoal Shirt">Roadster <br>Charcoal Shirt Rs. 1199
      <input type="hidden" name="price" value="1199">
    <input type="hidden" name="image" value="images/roadsterc1.jpg">
    <div class="form-group">	Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
							 Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
    </div>									
	<button class="btn btn-danger" value="submit">BUY</button></div></form>
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
      <img src="images/11524732227252-hangup-checkered-mens-blazer-size36-4041524732227055-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11524732227230-hangup-checkered-mens-blazer-size36-4041524732227055-2.jpg" alt="Chicago">
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
    <div class="panel-body"><input type="hidden" name="product" value="Hangup Men Multicoloured Printed Blazer"> Hangup<br>Men Multicoloured Printed Blazer Rs. 2499
      <input type="hidden" name="price" value="2499">
    <input type="hidden" name="image" value="images/11524732227252-hangup-checkered-mens-blazer-size36-4041524732227055-1.jpg">
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
    <div class="panel-heading"><div id="myCarousel3" class="carousel slide">
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel3" data-slide-to="1"></li>
  
  
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/42242eba-274f-4987-9ef4-06ee9a0acd28.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/65a9a3fb-4955-4349-ab74-61fa2eabf014.jpg" alt="Chicago">
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
    <div class="panel-body"><input type="hidden" name="product" value="Gap Black Narrow Fit Jeans"> Gap<br> Black Narrow Fit Jeans Rs. 5499
      <input type="hidden" name="price" value="5499">
      <input type="hidden" name="image" value="images/42242eba-274f-4987-9ef4-06ee9a0acd28.jpg">
    <div class="form-group">	Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
									  Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
	</div>								 <button class="btn btn-danger">BUY</button></div></form>
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
      <img src="images/maniac1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/maniac2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/maniac3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Maniac Checked round neck T-shirt"> Maniac <br> Checked round neck T-shirt Rs. 450
      <input type="hidden" name="price" value="450">
    <input type="hidden" name="image" value="images/maniac1.jpg">
    <div class="form-group">	Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
									  Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
	</div>								 <button class="btn btn-danger">BUY</button></div></form>
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
      <img src="images/b17058cc-2170-4348-b48a-dc57272444dc.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/94f9a3a7-44b5-479d-bb8a-3f3e29266eb1.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/25e830e8-7a19-4a5b-a36b-d1393cbf217c.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Nautica Men Red Long Sleeves Shirt"> Nautica<br>Men Red Long Sleeves Shirt Rs. 1179
      <input type="hidden" name="price" value="1179">
    <input type="hidden" name="image" value="images/b17058cc-2170-4348-b48a-dc57272444dc.jpg">
    <div class="form-group">	Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
									  Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
	</div>								 <button class="btn btn-danger">BUY</button></div></form>
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
      <img src="images/11c42eaf-e506-44cf-931d-c5c4390ce002.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/81e13958-1f2f-45c8-a341-bdac2c0647f7.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/3649cb47-d0a2-4dfb-b332-2f3667ef5310.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Van Heusen Blue Solid Collar T-Shirt"> Van Heusen<br> Blue Solid Collar T-Shirt Rs. 2019
      <input type="hidden" name="price" value="2019">
    <input type="hidden" name="image" value="images/11c42eaf-e506-44cf-931d-c5c4390ce002.jpg">
    <div class="form-group">	Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
									  Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
	</div>								 <button class="btn btn-danger">BUY</button></div></form>
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
      <img src="images/b9cde217-90a7-4d4e-9518-7ce266e50efb.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/a08c8ba0-7905-40ca-b4cb-5572155b676d.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/42242eba-274f-4987-9ef4-06ee9a0acd28.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Wrangler Mens Jeans(skin fit"> Wrangler <br>Mens Jeans(skin fit) Rs. 5514
      <input type="hidden" name="price" value="5514">
    <input type="hidden" name="image" value="images/b9cde217-90a7-4d4e-9518-7ce266e50efb.jpg">
    <div class="form-group">	Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
									  Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
	</div>								 <button class="btn btn-danger">BUY</button></div></form>
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
      <img src="images/e2822e62-df18-48ba-9de6-b889cdfc3a02.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/ed2e213d-a53a-44b6-a3b6-1ad543f31191.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/883dc924-d713-4fc2-9439-178c4d67fdf7.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value=" WRONG Mens Swatshirt"> WRONG<br>Mens Swatshirt Rs. 2699
      <input type="hidden" name="price" value="2699">
        <input type="hidden" name="image" value="images/e2822e62-df18-48ba-9de6-b889cdfc3a02.jpg">    
    <div class="form-group">	Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
									  Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
	</div>								 <button class="btn btn-danger">BUY</button></div></form>
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
      <img src="images/5a6d6b5f-5808-4749-8390-ef30f674d72c.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/e0ffb4e2-43a4-4ac0-9dd4-e59df4e0409e.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/6a9e21cd-d3e7-4642-98a8-fe646de6e309.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="BOSS Mens Black Solid Sweatshirt"> BOSS <br> Mens Black Solid Sweatshirt Rs. 4550
      <input type="hidden" name="price" value="4550">
    <input type="hidden" name="image" value="images/5a6d6b5f-5808-4749-8390-ef30f674d72c.jpg">
    <div class="form-group">	Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
									  Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
	</div>								 <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div>          
   
   
   <div class="col-lg-3 col-md-3 col-sm-6">
	  <div class="panel panel-default">
    <div class="panel-heading"><div id="myCarousel10" class="carousel slide" >
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel10" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel10" data-slide-to="1"></li>
    <li data-target="#myCarousel10" data-slide-to="2"></li>  
  
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/d651294c-c148-41fe-b02e-95c4237950e9.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/b3c5e6f4-770f-4b06-b44a-2a71da2ab9f4.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/c426f06a-867c-445c-adcb-64cfc0d71334.jpg" alt="New York">
    </div>
  
  
  </div>

  
  <a class="left carousel-control" href="#myCarousel10" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel10" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="HRX by Hritik Roshan Mens Red Solid Bomber"> HRX by Hritik Roshan<br>Mens Red Solid Bomber Rs. 2224
      <input type="hidden" name="price" value="2224">
    <input type="hidden" name="image" value="images/d651294c-c148-41fe-b02e-95c4237950e9.jpg">
    <div class="form-group">	Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
									  Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
	</div>								 <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div>          
   
   
   <div class="col-lg-3 col-md-3 col-sm-6">
	  <div class="panel panel-default">
    <div class="panel-heading"><img src="images/0d9baa1e-3f03-4c99-9a15-45b1794e4c151536149549935-Wrangler-Men-Red--Pink-Slim-Fit-Striped-Casual-Shirt-5061536-5.jpg" class="img-responsive"></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="LilPicks Striped Top with Trousers"> LilPicks<br> Striped Top with Trousers Rs. 1199
      <input type="hidden" name="price" value="1199">
      <input type="hidden" name="image" value="images/0d9baa1e-3f03-4c99-9a15-45b1794e4c151536149549935-Wrangler-Men-Red--Pink-Slim-Fit-Striped-Casual-Shirt-5061536-5.jpg">
    <div class="form-group">	Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
									  Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
	</div>								 <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div> 
   <?php
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 

      $sql = "SELECT * FROM product WHERE ptype ='Men`s fashion'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo '<div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><img src="images/'.$row['image'].'" class="img-responsive">
    </div><form method="POST" action="order.php">
    <div class="panel-body">
      <input type="hidden" name="product" value="'.$row['pname'].'">'.$row['pname'].'<br>'.$row['descrpt'].' Rs '.$row['price'].'
      <input type="hidden" name="price" value="'.$row['price'].'">
      <input type="hidden" name="pid" value="'.$row['pid'].'">
      <input type="hidden" name="image" value="images/'.$row['image'].'">
    <div class="form-group">  Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
                    Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                    </select>
  </div>                 <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div>';
          }
      } else {
          echo "0 results";
      }
    ?>         
   </body>
   </html>