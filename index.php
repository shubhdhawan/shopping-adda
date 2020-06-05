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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Shoppers-Adda project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

<script>
       function logout()
{
                document.getElementById("logout").submit();

}
function plogin()
{
  document.getElementById("plogin").submit();
}


 </script>
<STYLE>
.font{ font-family: "playball",playball;
     font-size:5vw;}    
  
.navbar-brand { position: relative; z-index: 5; }

.navbar-nav.navbar-right .btn { position: relative; z-index: 2; padding: 4px 20px; margin: 10px auto; transition: transform 0.3s; }

.navbar .navbar-collapse { position: relative; overflow: hidden !important; }
.navbar .navbar-collapse .navbar-right > li { padding-left: 22px; }
.navbar .navbar-collapse .navbar-right  { padding-right: 0px; }
.navbar .nav-collapse { position: absolute; z-index: 1; top: 0; left: 0; right: 0; bottom: 0; margin: 0; padding-right: 343px; padding-left: 20px; width: 100%; }
.navbar.navbar-default .nav-collapse { background-color: #f8f8f8; }
.navbar.navbar-inverse .nav-collapse { background-color: #222; }
.navbar .nav-collapse .navbar-form { border-width: 0; box-shadow: none; }
.nav-collapse>li { float: right; }

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


  #spacing { margin-top:30px;
             margin-bottom:10px;
         margin-left:10px;
         margin-right:10px;
         }
   
.panel-body{ color:black;}   
   
#colouring{ color:grey;
            padding-top:4px;}  
   
   
   </style>



</head>
<body style="background-color:#000033; color:#fff;"  >
 <h1 class="font"><a href="index.php" style="color:white;text-decoration: none">Shopping Adda</a></h1>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
       
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
       <ul class="nav nav-pills" id="colouring">
  
  <li id="colouring"><a href="men.php" id="colouring">MEN</a></li>
  <li id="colouring"><a href="women.php" id="colouring">WOMEN</a></li>
  <li id="colouring"><a href="kids.php" id="colouring">KIDS</a></li>
</ul>

</a>
        </div>
    
        
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
             
    
       
      <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3"><font color="white">SEARCH</font></a>
            </li>
      <li><form action='<?php echo $login; ?>' method="get" id="logout">
       <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse4" aria-expanded="false" aria-controls="nav-collapse3" onclick="logout()"><font color="white"><?php echo $lname; ?></font></a>
           </form> </li>
      <li><form action="plogin.php" method="post" id="plogin">
       <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse4" aria-expanded="false" aria-controls="nav-collapse3"onclick="plogin()" ><font color="white">SELLER?</font></a>
           </form> </li>
      </ul>

          <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse3">
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control col-xs-4" placeholder="Search" />
              </div>
              <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>
          </div>
        </div>
      </div>
    </nav>

 <div class="row">
 <div class="col-lg-12 col-md-12 col-sm-12">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  <li data-target="#myCarousel" data-slide-to="3"></li>
  
  
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/kids.jpg"  alt="Los Angeles">
    </div>
     
    <div class="item">
      <img src="images/a1.jpg" alt="Chicago">
    </div>
  
    

    <div class="item">
      <img src="images/170414-Womens-Push-Gigi-CLP-Hero-Banner.jpg" alt="New York">
    </div>
  
  
  <div class="item">
      <img src="images/70ca99e0-aaae-410a-916e-c705fdd2684e1555162325522-Adidas_DesktopSlider_Brand-Day.jpg" width="100%" height="120%" alt="New York">
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
</div>
 </div>
 <br><br>
  <div class="container-fluid">
  <div class="row">
   
      <div class=" col-lg-3 col-md-3 col-sm-3 col-3">
    <img class="img-responsive" src="images/topbrands.jpeg" alt="Chania" width="96%" height="20%" id="spacing"> 
    </div >
    <div class=" col-lg-3 col-md-3 col-sm-3 col-3" >
      <img class="img-responsive" src="images/shopthelook.jpeg" alt="Chania" width="96%" height="20%" id="spacing">
       </div>
     <div class=" col-lg-3 col-md-3 col-sm-3 col-3">
      <img class="img-responsive" src="images/greatcombination.jpeg" alt="Chania" width="96%" height="20%" id="spacing">
       </div>
      <div class=" col-lg-3 col-md-3 col-sm-3 col-3">
      <img class="img-responsive" src="images/newcollection.jpeg" alt="Chania" width="96%" height="20%" id="spacing">
       </div>
     </div>
  
    <div class="row">
     <h1 style="font-family: playball,playball; margin-left:30px; font-size:50px;">Trending</h1>
   </div>
   <div class="row">
   <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><img src="images/cbd38aeb-359a-4c24-8d01-fe2ab52b55851542629266062-GAP-MENS-LOGO-FLEECE-PULLOVER-HOODIE-9371542629265921-3.jpg" class="img-responsive">
    </div><form method="POST" action="order.php">
    <div class="panel-body">
      <input type="hidden" name="product" value="GAP Men Pullover Hoodie">GAP<br> Men Pullover Hoodie Rs.1119
      <input type="hidden" name="price" value="1119">
      <input type="hidden" name="pid" value="1">
      <input type="hidden" name="image" value="images/cbd38aeb-359a-4c24-8d01-fe2ab52b55851542629266062-GAP-MENS-LOGO-FLEECE-PULLOVER-HOODIE-9371542629265921-3.jpg">
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
    <div class="panel-heading"><img src="images/11444041872433-Belle-Fille-Red-Jacket-7721444041872016-1.jpg" class="img-responsive"></div>
    <form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="Belle Fille Red Jacket Women"> Belle Fille<br> Red Jacket Women Rs. 639
      <input type="hidden" name="price" value="639">
      <input type="hidden" name="pid" value="2">
      <input type="hidden" name="image" value="images/11444041872433-Belle-Fille-Red-Jacket-7721444041872016-1.jpg">
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
    
  <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><img src="images/11510035544392-Difference-of-Opinion-Navy-Printed-T-shirt-4871510035544044-1.jpg" class="img-responsive"></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="Campana Boys Navy Blue  T-Shirt"> Campana<br> Boys Navy Blue  T-Shirt Rs. 494
      <input type="hidden" name="price" value="494">
    <input type="hidden" name="image" value="images/11510035544392-Difference-of-Opinion-Navy-Printed-T-shirt-4871510035544044-1.jpg">
    <div class="form-group">  Quantity: <select><option>1</option>
                                     <option>2</option>
                                     <option>3</option></select>
                    Size: <select><option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                    </select>
  </div>                 <button class="btn btn-danger">BUY</button></div>
  </div>
   </div>    
   
   <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><img src="images/771be1d6-af9a-4741-a188-de05173b03521531830105468-Zima-Leto-Women-Navy-Blue-Solid-Maxi-Dress-6711531830105347-1.jpg" class="img-responsive"></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="Zima Leto Women Navy Blue  Dress"> Zima Leto<br> Women Navy Blue  Dress<br> Rs. 549
      <input type="hidden" name="price" value="549">
      <input type="hidden" name="pid" value="3">
      <input type="hidden" name="image" value="images/771be1d6-af9a-4741-a188-de05173b03521531830105468-Zima-Leto-Women-Navy-Blue-Solid-Maxi-Dress-6711531830105347-1.jpg">
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
    <div class="panel-heading"><img src="images/6dee9497-80ba-40c9-aa10-a255a48a0eaf1536914858626-na-6711536914858463-1 (1).jpg" class="img-responsive"></div><form method="POST" action="order.php">
      <input type="hidden" name="pid" value="4">
    <div class="panel-body"><input type="hidden" name="product" value="LUXURAZI Men Navy Blue Suit"> LUXURAZI<br> Men Navy Blue Suit Rs. 5390
      <input type="hidden" name="price" value="5390">
      <input type="hidden" name="image" value="images/6dee9497-80ba-40c9-aa10-a255a48a0eaf1536914858626-na-6711536914858463-1 (1).jpg">
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
    <div class="panel-heading"><img src="images/11518240019469-naughty-ninos-Girls-White--Navy-Blue-Solid-T-shirt-with-Shorts-4791518240019294-1.jpg" class="img-responsive"></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value=" Naughty ninos Girls  Dungarees"> Naughty ninos<br> Girls  Dungarees Rs. 679
      <input type="hidden" name="pid" value="5">
      <input type="hidden" name="price" value="679">
      <input type="hidden" name="image" value="images/11518240019469-naughty-ninos-Girls-White--Navy-Blue-Solid-T-shirt-with-Shorts-4791518240019294-1.jpg">
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
    <div class="panel-heading"><img src="images/11497266446494-Roadster-Women-Jackets-2511497266445974-1.jpg" class="img-responsive"></div>
    <form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="Roadster Bomber Jacket"> Roadster<br> Bomber Jacket Rs. 1019
      <input type="hidden" name="price" value="1019">
      <input type="hidden" name="pid" value="6">
      <input type="hidden" name="image" value="images/11497266446494-Roadster-Women-Jackets-2511497266445974-1.jpg">
    <div class="form-group">  Quantity: <select name="quant"><option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option></select>
                    Size: <select name="size"><option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="m">L</option>
                                    </select>
  </div>                 <button class="btn btn-danger">BUY</button></div></form>
  </div>
   </div>        
    
    
  <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><img src="images/0d9baa1e-3f03-4c99-9a15-45b1794e4c151536149549935-Wrangler-Men-Red--Pink-Slim-Fit-Striped-Casual-Shirt-5061536-5.jpg" class="img-responsive"></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="Wrangler Striped Casual Shirt"> Wrangler<br> Striped Casual Shirt Rs. 1514
      <input type="hidden" name="price" value="1514">
      <input type="hidden" name="image" value="images/0d9baa1e-3f03-4c99-9a15-45b1794e4c151536149549935-Wrangler-Men-Red--Pink-Slim-Fit-Striped-Casual-Shirt-5061536-5.jpg">
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
    <div class="panel-heading"><img src="images/d548cd93-720c-4cb3-9451-709628ffb76a1540965101456-Marks--Spencer-Women-Jackets-6051540965100413-1.jpg" class="img-responsive"></div>
    <form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="Marks & Spencer Women Black Blazer"> Marks & Spencer<br> Women Black Blazer Rs. 2699
      <input type="hidden" name="price" value="2699">
      <input type="hidden" name="image" value="images/d548cd93-720c-4cb3-9451-709628ffb76a1540965101456-Marks--Spencer-Women-Jackets-6051540965100413-1.jpg">
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
    <div class="panel-heading"><img src="images/11516795124254-BOSS-Green-Men-White-Printed-Polo-Collar-T-shirt-9111516795124105-1.jpg" class="img-responsive"></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="BOSS Green printed  solid free size T-shirt"> BOSS<br> Green printed  solid free size T-shirt Rs. 8750
      <input type="hidden" name="price" value="8750">
      <input type="hidden" name="image" value="images/11516795124254-BOSS-Green-Men-White-Printed-Polo-Collar-T-shirt-9111516795124105-1.jpg">
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
    <div class="panel-heading"><img src="images/efa6c8a7-5849-41a4-989a-64f444faf52b1537875439022-AJ-DEZINES-Boys-Party-Wear-Clothing-Set-6581537875438824-1.jpg" class="img-responsive"></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="Aj DEZInES Boys Shirt with Trousers"> Aj DEZInES<br> Boys Shirt with Trousers Rs. 1224
      <input type="hidden" name="price" value="1224">
      <input type="hidden" name="image" value="images/efa6c8a7-5849-41a4-989a-64f444faf52b1537875439022-AJ-DEZINES-Boys-Party-Wear-Clothing-Set-6581537875438824-1.jpg">
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
    <div class="panel-heading"><img src="images/8525e115-16f7-4461-9ad5-db3ee377888f1538977164701-na-3691538977164487-1.jpg" class="img-responsive"></div><form method="POST" action="order.php">
    <div class="panel-body"><input type="hidden" name="product" value="LilPicks<br> Striped Top with Trousers"> LilPicks<br> Striped Top with Trousers Rs. 1199
      <input type="hidden" name="price" value="1199">
      <input type="hidden" name="image" value="images/8525e115-16f7-4461-9ad5-db3ee377888f1538977164701-na-3691538977164487-1.jpg">
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
      
    
    </div>
     </div>
     <hr width="80%">
  <div class="icon_boxes">
    <div class="container">
      <div class="row icon_box_row">
        
        <!-- Icon Box -->
        <div class="col-lg-4 col-md-3 col-sm-6 icon_box_col">
          <div class="icon_box">
            <div class="icon_box_image"><img src="images/icon_1.svg" alt="" height="200" width="200"></div>
            <div class="icon_box_title"><h2>Free Shipping Worldwide</h2></div>
            <div class="icon_box_text">
             </div>
          </div>
        </div>

        <!-- Icon Box -->
        <div class="col-lg-4 col-md-3 col-sm-6 icon_box_col">
          <div class="icon_box">
            <div class="icon_box_image"><img src="images/icon_2.svg" alt=""  height="200" width="200"></div>
            <div class="icon_box_title"><h2>Free Returns</h2></div>
            <div class="icon_box_text">
              </div>
          </div>
        </div>

        <!-- Icon Box -->
        <div class="col-lg-4 col-md-3 col-sm-6 icon_box_col">
          <div class="icon_box">
            <div class="icon_box_image"><img src="images/icon_3.svg" alt=""  height="200" width="200"></div>
            <div class="icon_box_title"><h2>24hr Fast Support</h2></div>
            <div class="icon_box_text">
              </div>
          </div>
        </div>

      </div>
    </div>
  </div>
 
 </body>
 </html>