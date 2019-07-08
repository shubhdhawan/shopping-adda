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
            <li><a href="kids2.php">Winter Collection</a></li>
            <li><a href="kids2.php">Summer Collection</a></li>
            <li><a href="kids2.php">Trending</a></li>
            <li><a href="kids2.php">Most viewed</a></li>
            <li><a href="kids2.php">Bestsellers</a></li>
            <li><a href="kids2.php">Celeberity Look</a></li>
            <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse1" aria-expanded="false" aria-controls="nav-collapse1">Categories</a>
            </li>
            <li><form action='<?php echo $login; ?>' method="get" id="logout">
       <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse4" aria-expanded="false" aria-controls="nav-collapse3" onclick="logout()"><font color="grey"><?php echo $lname; ?></font></a>
           </form> </li>
          </ul>
          <ul class="collapse nav navbar-nav nav-collapse" id="nav-collapse1">
            <li><a href="kids2.php">T-shirts</a></li>
            <li><a href="kids2.php">Shirts</a></li>
            <li><a href="kids2.php">Casuals</a></li>
            <li><a href="kids2.php">Trousers</a></li>
            <li><a href="kids2.php">Suits</a></li>
            <li><a href="kids2.php">Ethnic</a></li>
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
      <img src="images/87a6520e-56a0-420f-b55b-8f3da4d191531541500351293-United-Colors-of-Benetton-Boys-Green--Navy-Printed-Round-Neck-T-shirt-3421541500351126-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/7130ef07-6daa-4fc6-8daa-21b17cf0d0171541500351262-United-Colors-of-Benetton-Boys-Green--Navy-Printed-Round-Neck-T-shirt-3421541500351126-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/87e54a65-c1d3-4394-8fa0-62f52695685e1541500351209-United-Colors-of-Benetton-Boys-Green--Navy-Printed-Round-Neck-T-shirt-3421541500351126-4.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="United Colors of Benetton
Boys Green & Navy Printed T-shirt">United Colors of Benetton<br>
Boys Green & Navy Printed T-shirt
Rs. 399
<input type="hidden" name="image" value="images/87a6520e-56a0-420f-b55b-8f3da4d191531541500351293-United-Colors-of-Benetton-Boys-Green--Navy-Printed-Round-Neck-T-shirt-3421541500351126-1.jpg">
            <input type="hidden" name="price" value="399">
    <div class="form-group">  Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
                    Size: <select name="size"><option value="s">S</option>
                                      <option value="m">M</option>
                                      <option value="l">L</option>
                                    </select><br>
  </div>                 <button class="btn btn-danger" value="submit">BUY</button></div></form>
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
      <img src="images/1c379020-40ba-413d-9f65-1678a45c50da1541163615105-United-Colors-of-Benetton-Boys-Navy-Blue-Solid-Polo-Collar-T-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/2f53a288-ff95-4218-98e1-757bd243e1b21541163615080-United-Colors-of-Benetton-Boys-Navy-Blue-Solid-Polo-Collar-T-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/1b8d9f10-915d-4ba9-91e2-5bfc432a3d4a1541163615056-United-Colors-of-Benetton-Boys-Navy-Blue-Solid-Polo-Collar-T-3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="United Colors of Benetton
Boys Navy Blue Polo T-shirt">United Colors of Benetton<br>
Boys Navy Blue Polo T-shirt
Rs. 399
<input type="hidden" name="image" value="images/1c379020-40ba-413d-9f65-1678a45c50da1541163615105-United-Colors-of-Benetton-Boys-Navy-Blue-Solid-Polo-Collar-T-1.jpg">
            <input type="hidden" name="price" value="399">
    <div class="form-group">  Quantity: <select name="quant"><option value="1">1</option>
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
      <img src="images/ed20607d-7bf4-42aa-902e-5ef46c67c26d1538043394302-YK-Boys-Tshirts-1551538043393519-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/cdad3374-832f-4a6f-bf9f-7291d6f8e9be1538043394270-YK-Boys-Tshirts-1551538043393519-3.jpg" alt="Chicago">
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
    <div class="panel-body"><input type="hidden" name="product" value="YK Boys White & Blue Striped T-shirt"> YK<br>
Boys White & Blue Striped T-shirt
Rs. 199
<input type="hidden" name="image" value="images/ed20607d-7bf4-42aa-902e-5ef46c67c26d1538043394302-YK-Boys-Tshirts-1551538043393519-1.jpg">
      <input type="hidden" name="price" value="199">
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
      <img src="images/11477479569050-YK-Marvel-Boys-Black-Printed-Round-Neck-T-Shirt-8751477479568863-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11477479568966-YK-Marvel-Boys-Black-Printed-Round-Neck-T-Shirt-8751477479568863-3.jpg" alt="Chicago">
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
    <div class="panel-body"><input type="hidden" name="product" value="YK Marvel Boys Black Printed T-Shirt"> YK<br> Marvel
Boys Black Printed T-Shirt
Rs. 239
<input type="hidden" name="image" value="images/11477479569050-YK-Marvel-Boys-Black-Printed-Round-Neck-T-Shirt-8751477479568863-1.jpg">
      <input type="hidden" name="price" value="239">
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
      <img src="images/11523601311444-Lee-Cooper-Boys-Jeans-1551523601311296-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11523601311423-Lee-Cooper-Boys-Jeans-1551523601311296-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/11523601311380-Lee-Cooper-Boys-Jeans-1551523601311296-3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Lee Cooper Boys Grey Slim Fit Clean Look Jeans">Lee Cooper<br>Boys Grey Slim Fit Clean Look JeansRs. 679
      <input type="hidden" name="image" value="images/11523601311444-Lee-Cooper-Boys-Jeans-1551523601311296-1.jpg">
      <input type="hidden" name="price" value="679">
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
      <img src="images/7b1a966b-3de6-472d-88f5-605394d4075f1539250128599-United-Colors-of-Benetton-Boys-Jeans-4961539250127195-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/547e3857-1c1b-46c7-948c-6f717277f7481539250128586-United-Colors-of-Benetton-Boys-Jeans-4961539250127195-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/1d1dda57-061f-4712-99fd-fee3bb7d9e321539250128576-United-Colors-of-Benetton-Boys-Jeans-4961539250127195-3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="United Colors of Benetton
Boys Blue Slim Fit Jeans"> United Colors of Benetton<br>
Boys Blue Slim Fit Jeans
Rs. 1299
<input type="hidden" name="image" value="images/7b1a966b-3de6-472d-88f5-605394d4075f1539250128599-United-Colors-of-Benetton-Boys-Jeans-4961539250127195-1.jpg">
      <input type="hidden" name="price" value="1299">
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
      <img src="images/2cc31a36-b1fa-4fd6-b6b8-aa6c73a4d8661542795576507-YK-Girls-Grey-Colourblocked-T-Shirt-7331542795576397-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/83a911c8-d52a-4937-a68f-6e68c9788b651542795576481-YK-Girls-Grey-Colourblocked-T-Shirt-7331542795576397-3.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/b7d9ade5-6a32-468e-b97b-0c42a87ae0da1542795576471-YK-Girls-Grey-Colourblocked-T-Shirt-7331542795576397-4.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="YK
Boys Grey Colourblocked T-Shirt"> YK<br>Boys Grey Colourblocked T-Shirt
Rs. 349
<input type="hidden" name="image" value="images/2cc31a36-b1fa-4fd6-b6b8-aa6c73a4d8661542795576507-YK-Girls-Grey-Colourblocked-T-Shirt-7331542795576397-1.jpg">
      <input type="hidden" name="price" value="349">
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
      <img src="images/11520323087934-Gini-and-Jony-Boys-Jeans-5661520323087821-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11520323087902-Gini-and-Jony-Boys-Jeans-5661520323087821-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/11520323087860-Gini-and-Jony-Boys-Jeans-5661520323087821-3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Gini and Jony Boys Blue Jeans"> Gini and Jony<br>Boys Blue Stretchable Jeans Rs. 649
      <input type="hidden" name="image" value="images/11520323087934-Gini-and-Jony-Boys-Jeans-5661520323087821-1.jpg">
      <input type="hidden" name="price" value="649">
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
      <img src="images/11523598457124-Lee-Cooper-Boys-Jeans-2251523598457029-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11523598457109-Lee-Cooper-Boys-Jeans-2251523598457029-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/11523598457087-Lee-Cooper-Boys-Jeans-2251523598457029-3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Lee CooperBoys Blue Slim Fit Clean Look Jeans"> Lee Cooper<br>
Boys Blue Slim Fit Clean Look Jeans
Rs. 679
<input type="hidden" name="image" value="images/11523598457124-Lee-Cooper-Boys-Jeans-2251523598457029-1.jpg">
      <input type="hidden" name="price" value="679">
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
      <img src="images/1d8575e2-08e9-492c-9db4-c4db191adb8d1531739480122-Nike-Dry-Academy-6421531739479483-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/f900ecf2-9029-491a-a27f-14c911248ae31531739480105-Nike-Dry-Academy-6421531739479483-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/20efd3f8-7708-452a-a924-7d0337d475201531739480091-Nike-Dry-Academy-6421531739479483-3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Nike
Boys Red DRY ACDMY SS GX2 T-shirt"> Nike<br>
Boys Red DRY ACDMY GX2 T-shirt
Rs. 717
<input type="hidden" name="image" value="images/1d8575e2-08e9-492c-9db4-c4db191adb8d1531739480122-Nike-Dry-Academy-6421531739479483-1.jpg">
      <input type="hidden" name="price" value="717">
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
    <div class="panel-heading"><div id="myCarousel10" class="carousel slide" >
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel10" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel10" data-slide-to="1"></li>
    <li data-target="#myCarousel10" data-slide-to="2"></li>  
  
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/1e5a7f30-c1c3-4f95-88c0-aa859ea1d6a91531482267776-United-Colors-of-Benetton-Boys-Tshirts-8591531482267658-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/37bb1578-9339-4932-a0ae-f4d81662318b1531482267735-United-Colors-of-Benetton-Boys-Tshirts-8591531482267658-3.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/c4b4360a-41dd-4d8a-9a90-9e219d1a34d31531482267719-United-Colors-of-Benetton-Boys-Tshirts-8591531482267658-4.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="United Colors of Benetton
Boys Blue Printed Detail T-shirt"> United Colors of Benetton<br>
Boys Blue Printed Detail T-shirt
Rs. 399
<input type="hidden" name="image" value="images/1e5a7f30-c1c3-4f95-88c0-aa859ea1d6a91531482267776-United-Colors-of-Benetton-Boys-Tshirts-8591531482267658-1.jpg">
      <input type="hidden" name="price" value="399">
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
    <div class="panel-heading"><img src="images/GKIDZ-Boys-Pack-of-3-Printed-T-shirts_2c3965ba81b45c86b14865af613649f1_images.jpg" class="img-responsive"></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="GKIDZ
Boys Pack of 3 Printed T-shirts"> GKIDZ<br>
Boys Pack of 3 Printed T-shirts
Rs. 474
      <input type="hidden" name="price" value="474">
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
   <?php
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 

      $sql = "SELECT * FROM product WHERE ptype ='Kid`s fashion'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo '<div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><img src="images/'.$row['image'].'" class="img-responsive">
    </div><form method="POST" action="order.php">
    <div class="panel-body">
      <input type="hidden" name="product" value="'.$row['pname'].'">'.$row['pname'].'<br>'.$row['descrpt'].'Rs '.$row['price'].'
      <input type="hidden" name="price" value="'.$row['price'].'">
      <input type="hidden" name="image" value="images/'.$row['image'].'">
            <input type="hidden" name="pid" value="'.$row['pid'].'">
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