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
            <li><a href="kids.php">Winter Collection</a></li>
            <li><a href="kids.php">Summer Collection</a></li>
            <li><a href="kids.php">Trending</a></li>
            <li><a href="kids.php">Most viewed</a></li>
            <li><a href="kids.php">Bestsellers</a></li>
            <li><a href="kids.php">Celeberity Look</a></li>
            <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse1" aria-expanded="false" aria-controls="nav-collapse1">Categories</a>
            </li>
            <li><form action='<?php echo $login; ?>' method="get" id="logout">
       <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse4" aria-expanded="false" aria-controls="nav-collapse3" onclick="logout()"><font color="grey"><?php echo $lname; ?></font></a>
           </form> </li>
          </ul>
          <ul class="collapse nav navbar-nav nav-collapse" id="nav-collapse1">
            <li><a href="kids.php">T-shirts</a></li>
            <li><a href="kids.php">Shirts</a></li>
            <li><a href="kids.php">Casuals</a></li>
            <li><a href="kids.php">Trousers</a></li>
            <li><a href="kids.php">Suits</a></li>
            <li><a href="kids.html">Ethnic</a></li>
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
      <img src="images/11505353131163-Naughty-Ninos-Navy-Blue-front-open-fleece-sweatshrits-9061505353130945-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11505353131130-Naughty-Ninos-Navy-Blue-front-open-fleece-sweatshrits-9061505353130945-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/11505353131039-Naughty-Ninos-Navy-Blue-front-open-fleece-sweatshrits-9061505353130945-3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="naughty ninos
Boys Navy Solid Sweatshirt">Naughty ninos<br>
Boys Navy Solid Sweatshirt
Rs. 699
<input type="hidden" name="image" value="images/11505353131163-Naughty-Ninos-Navy-Blue-front-open-fleece-sweatshrits-9061505353130945-1.jpg">
<input type="hidden" name="price" value="699">
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
      <img src="images/11510302207756-YK-Boys-White--Black-Printed-Hooded-Sweatshirt-5181510302207622-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11510302207739-YK-Boys-White--Black-Printed-Hooded-Sweatshirt-5181510302207622-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/11510302207725-YK-Boys-White--Black-Printed-Hooded-Sweatshirt-5181510302207622-3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="YK
Boys White & Black Hooded Sweatshirt">YK<br>
Boys White & Black Sweatshirt
Rs. 449
      <input type="hidden" name="price" value="449">
    <input type="hidden" name="image" value="images/11510302207756-YK-Boys-White--Black-Printed-Hooded-Sweatshirt-5181510302207622-1.jpg">
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
      <img src="images/73468bbb-67bd-417d-aa33-398a3ec3de711537431840314-Cherry-Crumble-Slate-Jacket-6501537431840092-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/32ef2a54-19a8-4f70-b5b2-3831a59b80351537431840263-Cherry-Crumble-Slate-Jacket-6501537431840092-3.jpg" alt="Chicago">
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
    <div class="panel-body"><input type="hidden" name="product" value="Cherry Crumble
Boys Blue Solid Quilted Jacket">Cherry Crumble<br>
Boys Blue Solid Quilted Jacket
Rs. 1839
      <input type="hidden" name="price" value="1839">
    <input type="hidden" name="image" value="images/73468bbb-67bd-417d-aa33-398a3ec3de711537431840314-Cherry-Crumble-Slate-Jacket-6501537431840092-1.jpg">
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
      <img src="images/ed270a27-e243-4aa1-b17f-3e0245502bdc1538393144720-YK-Boys-Sweaters-1901538393144227-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/1cebe0fa-ac88-45ab-8d5f-ebb755bf79161538391493283-YK-Boys-Sweaters-3971538391492228-3.jpg" alt="Chicago">
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
    <div class="panel-body"><input type="hidden" name="product" value="YK
Boys Blue Self Design Pullover">YK<br>
Boys Blue Self Design Pullover
Rs. 759
      <input type="hidden" name="price" value="759">
    <input type="hidden" name="image" value="images/ed270a27-e243-4aa1-b17f-3e0245502bdc1538393144720-YK-Boys-Sweaters-1901538393144227-1.jpg">
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
      <img src="images/11479108543989-naughty-ninos-Unisex-Jackets-9401479108543652-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11479108543950-naughty-ninos-Unisex-Jackets-9401479108543652-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/11479108543918-naughty-ninos-Unisex-Jackets-9401479108543652-3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="naughty ninos
Kids Yellow & Grey Reversible Jacket">Naughty ninos<br>
Kids Yellow Reversible Jacket
Rs. 1199
      <input type="hidden" name="price" value="1199">
    <input type="hidden" name="image" value="images/11479108543989-naughty-ninos-Unisex-Jackets-9401479108543652-1.jpg">
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
      <img src="images/38f56501-64b3-4597-92ce-8cdad7502cb11542267280562-Boys-Nylon-Bomber-Jacket-1661542267280441-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/ee9faac6-466e-46b7-a93f-0a055dc1ac641542267280550-Boys-Nylon-Bomber-Jacket-1661542267280441-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/db5a9679-59af-48d8-86c2-4a2db87f967d1542267280512-Boys-Nylon-Bomber-Jacket-1661542267280441-5.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Fort Collins
Boys Grey Solid Bomber">Fort Collins<br>
Boys Grey Solid Bomber with
Rs. 999
      <input type="hidden" name="price" value="999">
    <input type="hidden" name="image" value="images/38f56501-64b3-4597-92ce-8cdad7502cb11542267280562-Boys-Nylon-Bomber-Jacket-1661542267280441-1.jpg">
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
      <img src="images/65508428-a83b-4d1f-97f5-fd95e6eab2c61539688742684-HRX-by-Hrithik-Roshan-Boys-Orange-Solid-Sweatshirt-866153968-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/3fa3836f-7eed-4eb6-b084-a71abd0fd9aa1539688742660-HRX-by-Hrithik-Roshan-Boys-Orange-Solid-Sweatshirt-866153968-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/b70f6e99-7bda-479e-8648-a30b6c9461791539688742645-HRX-by-Hrithik-Roshan-Boys-Orange-Solid-Sweatshirt-866153968-3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="HRX by Hrithik Roshan Orange Colourblocked Sweatshirt">HRX by Hrithik Roshan<br>Orange Colourblocked Sweatshirt Rs. 649
      <input type="hidden" name="price" value="649">
    <input type="hidden" name="image" value="images/65508428-a83b-4d1f-97f5-fd95e6eab2c61539688742684-HRX-by-Hrithik-Roshan-Boys-Orange-Solid-Sweatshirt-866153968-1.jpg">
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
      <img src="images/8c91b846-f030-4027-a773-00f8de1162b11531476447863-United-Colors-of-Benetton-Boys-Green-Solid-Pullover-1201531476447789-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/9c564a0c-9ace-490d-aab3-a17bbb599d921531476447837-United-Colors-of-Benetton-Boys-Green-Solid-Pullover-1201531476447789-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/d0dc6ef0-6be4-4582-bcfd-c0f7f15e1de91531476447821-United-Colors-of-Benetton-Boys-Green-Solid-Pullover-1201531476447789-3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="United Colors of Benetton
Boys Green Solid Pullover">United Colors of Benetton<br>
Boys Green Solid Pullover
Rs. 959
      <input type="hidden" name="price" value="959">
    <input type="hidden" name="image" value="images/8c91b846-f030-4027-a773-00f8de1162b11531476447863-United-Colors-of-Benetton-Boys-Green-Solid-Pullover-1201531476447789-1.jpg">
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
      <img src="images/11510987395997-Flying-Machine-Boys-Jackets-8351510987395945-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11510987395983-Flying-Machine-Boys-Jackets-8351510987395945-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/11510987395966-Flying-Machine-Boys-Jackets-8351510987395945-3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Flying Machine
Boys Black Solid Bomber Jacket">Flying Machine<br>
Boys Black Solid Bomber Jacket
Rs. 1299
<input type="hidden" name="image" value="images/11510987395997-Flying-Machine-Boys-Jackets-8351510987395945-1.jpg">
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
    <div class="panel-heading"><div id="myCarousel9" class="carousel slide" >
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel9" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel9" data-slide-to="1"></li>
    <li data-target="#myCarousel9" data-slide-to="2"></li>
  
  
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/41ed4c8f-25bb-4bf3-808b-a54a6337eafd1542264692831-Boys-Nylon-Bomber-Jacket-1571542264692714-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/cbcb09df-83e8-4158-9cdb-01f150387cd61542264692818-Boys-Nylon-Bomber-Jacket-1571542264692714-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/21910001-461e-48d2-b8ab-5da59bde57261542264692779-Boys-Nylon-Bomber-Jacket-1571542264692714-5.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Fort Collins
Boys Brown Solid Bomber Jacket">Fort Collins<br>
Boys Brown Solid Bomber Jacket
Rs. 999
<input type="hidden" name="image" value="images/41ed4c8f-25bb-4bf3-808b-a54a6337eafd1542264692831-Boys-Nylon-Bomber-Jacket-1571542264692714-1.jpg">
      <input type="hidden" name="price" value="999">
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
      <img src="images/b5957818-510e-4b0f-8ba7-98f6cd5244d61540901658028-Beebay-Boys-Red-Printed-Hooded-Sweatshirt-5141540901657920-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/bc9ad1b2-d703-47af-aba6-5f6c10ec1dd51540901658010-Beebay-Boys-Red-Printed-Hooded-Sweatshirt-5141540901657920-2.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/bc15dae3-8af4-4aca-934e-7307896220351540901657990-Beebay-Boys-Red-Printed-Hooded-Sweatshirt-5141540901657920-3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Beebay Red Printed Hooded Sweatshirt">Beebay<br>Red Printed Hooded Sweatshirt Rs. 582
      <input type="hidden" name="image" value="images/b5957818-510e-4b0f-8ba7-98f6cd5244d61540901658028-Beebay-Boys-Red-Printed-Hooded-Sweatshirt-5141540901657920-1.jpg">
      <input type="hidden" name="price" value="582">
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
    <div class="panel-heading"><img src="images/26408e99-ec1c-46a7-ab31-3e97ceb807841541137584695-United-Colors-of-Benetton-Boys-Sweatshirts-4331541137584652-1.jpg" class="img-responsive"></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="United Colors of Benetton Red & Black Checked Sweatshirt">United Colors of Benetton<br>Red & Black Checked Sweatshirt Rs. 899
      <input type="hidden" name="price" value="699"><input type="hidden" name="image" value="images/26408e99-ec1c-46a7-ab31-3e97ceb807841541137584695-United-Colors-of-Benetton-Boys-Sweatshirts-4331541137584652-1.jpg">
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