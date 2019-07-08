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
            <li><a href="women.php">Winter Collection</a></li>
            <li><a href="women.php">Summer Collection</a></li>
            <li><a href="women.php">Trending</a></li>
            <li><a href="women.php">Most viewed</a></li>
            <li><a href="women.php">Bestsellers</a></li>
            <li><a href="women.php">Celeberity Look</a></li>
            <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse1" aria-expanded="false" aria-controls="nav-collapse1">Categories</a>
            </li>
            <li><form action='<?php echo $login; ?>' method="get" id="logout">
       <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse4" aria-expanded="false" aria-controls="nav-collapse3" onclick="logout()"><font color="grey"><?php echo $lname; ?></font></a>
           </form> </li>
          </ul>
          <ul class="collapse nav navbar-nav nav-collapse" id="nav-collapse1">
            <li><a href="women.php">T-shirts</a></li>
            <li><a href="women.php">Shirts</a></li> 
            <li><a href="women.php">Casuals</a></li>
            <li><a href="women.php">Trousers</a></li>
            <li><a href="women.php">Suits</a></li>
            <li><a href="women.php">Ethnic</a></li>
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
  
  

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/e2affe6d-b4a6-424e-bc7c-f9fe16f6b25b1544866568458-DOROTHY-PERKINS-Women-Black-Self-Design-Sheath-Dress-6291544-5.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/635efbae-b5b6-4878-8560-9081b0af362a1544866568473-DOROTHY-PERKINS-Women-Black-Self-Design-Sheath-Dress-6291544-4.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/ede3fe4c-9029-4214-bbb7-225d3f1e735f1544866568507-DOROTHY-PERKINS-Women-Black-Self-Design-Sheath-Dress-6291544-2.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="DOROTHY PERKINS
Women Black Self-Design Sheath Dress">DOROTHY PERKINS<br>
Women Dress
Rs. 1795
<input type="hidden" name="image" value="images/e2affe6d-b4a6-424e-bc7c-f9fe16f6b25b1544866568458-DOROTHY-PERKINS-Women-Black-Self-Design-Sheath-Dress-6291544-5.jpg">
<input type="hidden" name="price" value="1795">
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
  
  

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/577c0cec-2c10-4dd8-8a95-9c042e9b4cc01533805872439-Speedo-Blue-Printed-Bodysuit-808876C234-2781533805870319-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/dde86ccf-4967-46ea-80de-b7ad6ac0cd0e1533805872369-Speedo-Blue-Printed-Bodysuit-808876C234-2781533805870319-4.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/fca92ab1-80fa-4b4a-a50d-5c308164286f1533805872351-Speedo-Blue-Printed-Bodysuit-808876C234-2781533805870319-5.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Speedo
Blue Printed Bodysuit 808876C234">Speedo<br>
Blue  Bodysuit 808876C234
Rs. 1959
<input type="hidden" name="image" value="images/577c0cec-2c10-4dd8-8a95-9c042e9b4cc01533805872439-Speedo-Blue-Printed-Bodysuit-808876C234-2781533805870319-1.jpg">
<input type="hidden" name="price" value="1959">
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
  
 

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/11504952529257-Campus-Sutra-Womens-Sweatshirt-9821504952529146-5.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11504952529324-Campus-Sutra-Womens-Sweatshirt-9821504952529146-2.jpg" alt="Chicago">
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
    <div class="panel-body"><input type="hidden" name="product" value="Campus Sutra
Women Grey Solid Hooded Sweatshirt"> Campus Sutra<br>
Women Grey Sweatshirt
Rs. 769
<input type="hidden" name="image" value="images/11504952529257-Campus-Sutra-Womens-Sweatshirt-9821504952529146-5.jpg">
<input type="hidden" name="price" value="769">
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
  
  

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/11508829036491-MANGO-Women-Sweaters-911508829036346-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11508829036423-MANGO-Women-Sweaters-911508829036346-4.jpg" alt="Chicago">
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
    <div class="panel-body"><input type="hidden" name="product" value="MANGO
Women Grey Self-Design Front Tie-Up Sweater"> MANGO<br>
Women Tie-Up Sweater
Rs. 897
<input type="hidden" name="image" value="images/11508829036491-MANGO-Women-Sweaters-911508829036346-1.jpg">
<input type="hidden" name="price" value="897">
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
  
  

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/ec7dbe61-99dd-4b88-ad5b-7feb8e2c88681543841507566-Mast--Harbour-Women-Sweaters-1691543841506582-5.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/2c3792b7-061d-4df3-bcd8-feba5c919cf21543841507601-Mast--Harbour-Women-Sweaters-1691543841506582-3.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/1f1fa2da-4ee5-4a01-bf9c-2d78b6892aa11543841507644-Mast--Harbour-Women-Sweaters-1691543841506582-1.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Mast & Harbour
Women Mustard Yellow Solid Pullover"> Mast & Harbour<br>
Women Mustard Pullover
Rs. 439
<input type="hidden" name="image" value="images/ec7dbe61-99dd-4b88-ad5b-7feb8e2c88681543841507566-Mast--Harbour-Women-Sweaters-1691543841506582-5.jpg">
<input type="hidden" name="price" value="439">
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
  
  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/8e30392b-542e-4eae-b299-3b0be821a82e1534769677970-Roadster-Women-Sweatshirts-8741534769676527-5.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/eb9e8056-810a-4194-a4f2-788b34c2fddc1534769678024-Roadster-Women-Sweatshirts-8741534769676527-3.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/4d03a9c1-7d23-412d-97bd-e96ae15207ae1534769678086-Roadster-Women-Sweatshirts-8741534769676527-1.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Roadster
Women Green Solid Sweatshirt">Roadster<br>
Women Green Sweatshirt
Rs. 599 
<input type="hidden" name="image" value="images/8e30392b-542e-4eae-b299-3b0be821a82e1534769677970-Roadster-Women-Sweatshirts-8741534769676527-5.jpg">
<input type="hidden" name="price" value="599">
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
  
  

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/953867d0-7644-4e06-94db-44c15ffbc2031542616050527-Roadster-Women-Maroon--Black-Solid-Cardigan-9201542616050402-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/c88bd4d1-c888-4806-82b0-68350ff9a8271542623876076-Roadster-Women-Maroon--Black-Solid-Cardigan-4601542623876050-5.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/84c03644-7bd6-4ae0-b81c-3aab19b2a9fe1542616050485-Roadster-Women-Maroon--Black-Solid-Cardigan-9201542616050402-4.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Roadster
Women Maroon Boucle Cardigan
"> Roadster<br>
Women  Cardigan
Rs. 849
<input type="hidden" name="image" value="images/953867d0-7644-4e06-94db-44c15ffbc2031542616050527-Roadster-Women-Maroon--Black-Solid-Cardigan-9201542616050402-1.jpg">
<input type="hidden" name="price" value="849">
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
  
  

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/11478512182452-Kook-N-Keech-Disney-Women-Grey-Solid-Front-Open-Sweatshirt-71478512182137-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11478512182339-Kook-N-Keech-Disney-Women-Grey-Solid-Front-Open-Sweatshirt-71478512182137-4.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/11478512182393-Kook-N-Keech-Disney-Women-Grey-Solid-Front-Open-Sweatshirt-71478512182137-3.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Kook N Keech Disney
Women Grey Solid Front-Open Sweatshirt
">Disney<br>
Women  Front-Open Sweatshirt
Rs. 679
<input type="hidden" name="image" value="images/11478512182452-Kook-N-Keech-Disney-Women-Grey-Solid-Front-Open-Sweatshirt-71478512182137-1.jpg">
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
    <div class="panel-heading"><div id="myCarousel8" class="carousel slide" >
  
 

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/330f4d90-b2bb-4528-92c6-1105903e26671543391911459-HERENOW-Women-Sweatshirts-6321543391910683-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/8202e76f-e017-4d0f-aab6-d9474689cbe41543391911419-HERENOW-Women-Sweatshirts-6321543391910683-3.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/a05b78c1-1a02-4f64-89b0-3a34845a32811543391911380-HERENOW-Women-Sweatshirts-6321543391910683-5.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="
HERE&NOW
Women Navy Blue & White Colourblocked Sweatshirt"> 
HERE&NOW<br>
Women Sweatshirt
Rs.879
<input type="hidden" name="image" value="images/330f4d90-b2bb-4528-92c6-1105903e26671543391911459-HERENOW-Women-Sweatshirts-6321543391910683-1.jpg">
<input type="hidden" name="price" value="879">
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
  
 

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/11508915273433-Kook-N-Keech-Women-Black-Printed-Sweatshirt-4281508915273160-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/11508915273312-Kook-N-Keech-Women-Black-Printed-Sweatshirt-4281508915273160-5.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/11508915273342-Kook-N-Keech-Women-Black-Printed-Sweatshirt-4281508915273160-4.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="Kook N Keech
Women Black Printed Sweatshirt">Kook N Keech<br>
Women  Sweatshirt
Rs. 679 
<input type="hidden" name="image" value="images/11508915273433-Kook-N-Keech-Women-Black-Printed-Sweatshirt-4281508915273160-1.jpg">
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
    <div class="panel-heading"><div id="myCarousel10" class="carousel slide" >
  
  

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/31b3fa3e-e448-4d03-8f2e-523d7bb8ec5e1541058304506-MANGO-Women-Sweatshirts-9601541058304374-1.jpg" alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/fce0d33f-2f9d-4c9c-88fd-cfb60ba995a11541058304470-MANGO-Women-Sweatshirts-9601541058304374-3.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/89be760b-23fa-4a5f-b59a-5d18faeea83c1541058304447-MANGO-Women-Sweatshirts-9601541058304374-4.jpg" alt="New York">
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
    <div class="panel-body"><input type="hidden" name="product" value="MANGO
Women Brown Solid Sweatshirt">MANGO<br>
Women Sweatshirt
Rs. 1813 
<input type="hidden" name="image" value="images/31b3fa3e-e448-4d03-8f2e-523d7bb8ec5e1541058304506-MANGO-Women-Sweatshirts-9601541058304374-1.jpg">
<input type="hidden" name="price" value="1813">
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
    <div class="panel-heading"><img src="images/5fd0e0d3-e6db-4401-b51e-b816b4d1f2e81540986632806-Roadster-Women-Brown--Pink-Solid-Pullover-5251540986632582-1.jpg" class="img-responsive"></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="Roadster
Women Brown & Beige Solid Pullover"> Roadster<br>
Women Solid Pullover
Rs. 389
<input type="hidden" name="price" value="389">
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