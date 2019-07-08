<?php
session_start();
$conn = mysqli_connect("localhost","root","","shoppingadda");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><a href="dashboard.php">Shopping Adda</a></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js">
</script>
<script src="../../../../dist/2.7.2/Chart.bundle.js"></script>
	<script src="../../utils.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> 
 
   </script>
<style>
.row.content {height: 900px;}
.sidenav {
      background-color: #001a33;
      height: 100%;
    }
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding-right: 30px;
      }
      .row.content {height: auto;} 
    }
	.nav-tabs.li.a {
    color: white;	
}
body
{ background-color:#ededde;
}
.panel-default > .blue {
    background: #3333cc; color: #fff;
}
.panel-default > .red {
    background: #ff0000; color: #fff;
}
.panel-default > .green {
    background: #006600; color: #fff;
}
.panel-default > .yellow {
    background: #990099; color: #fff;
}
.position
{ position:absolute;
  left:10px;
  bottom:730px;
  }
.nav{ background-color:#001a33;
}	
.color{ background-color:#001a33;
        border-color:#001a33;
		
}	 

	
.login{ position:absolute;
        right:65px;
		top:5px;
		}
.font{ font-family: "playball",playball;
     font-size:4vw;
	 color:white; }	 

 
</style> 
</head>
<body >

 
<div class="row content">

  
    <div class="col-sm-2 sidenav"  >

       <h1 class="font">Shopping Adda</h1>
      <ul class="nav nav-pills  nav-stacked" >
	   <br><br>
	   
		
        <li><a href="dashboard.php" style="color: #d9d9d9";><span class="glyphicon glyphicon-home"></span> Home  </a></li>
        <li><a href="#section2" style="color: #d9d9d9";> <span class="glyphicon glyphicon-lock"></span> Login issue</a></li>
        <li><a href="logout.php" style="color: #d9d9d9";>   <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul><br>
	  </div>
	  
<nav class="navbar navbar-default col-sm-10 color">
  

 <div class="container-fluid">
    <img src="images/login.png" class="img-responsive login" width="40px" height="40px">
    <ul class="nav navbar-right">
    
      <li><a href="#" style="color:white";> <?php echo $_SESSION['name']; ?></a></li>
    </ul>
   
</nav>
<div class="container-fluid">
<div class="col-md-10" >
<div class="panel panel-default">
<div class="panel-heading">Orders</div>
 <div class="panel-body">
 	<div class="col-lg-6 col-md-6 col-sm-10">
 	<table class="table table-dark table-hover" >
    <tr>
    	<th>Order Id</th>
    <th>Porduct Id</th>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Size</th>
    <th>Price</th>
    <th>Address</th>
    
</tr>

    <?php
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 
      $email=$_SESSION['email'];
      $sql = "SELECT s.`pid`,o.`oid`,o.`product`,o.`quant`,o.`size`,o.`price`,s.`hno`,s.`area`,s.`landmark`,s.`town`,s.`pin`,s.`state` FROM orders o, shipment s WHERE o.`email` =s.`email`";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {

            echo '<tr>
            <td>'.$row['oid'].'</td>
            <td>'.$row['pid'].'</td>
            <td>'.$row['product'].'</td>
            <td>'.$row['quant'].'</td>
            <td>'.$row['size'].'</td>
            <td>'.$row['price'].'</td>
            <td>'.$row['hno'].','.$row['area'].','.$row['landmark'].','.$row['town'].','.$row['state'].'-'.$row['pin'].'</td>
            
    ';
          }
      } else {
          echo "No Active Products!!";
      }
    ?>
</table>
	</div>
         
    	</div>
         </div>
		 
          
        <div class="row">
     <div class="col-md-4 col-sm-6 col-xs-6">
		


</body>
</html>