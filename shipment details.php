<?php
session_start();
$email=$_SESSION['email'];
$con = mysqli_connect("localhost","root","","shoppingadda");
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
  $sql = "SELECT hno, area, landmark, town, pin, state FROM shipment WHERE email='$email'";
$result = mysqli_query($con,$sql);
@$num=mysqli_num_rows($result);
if ($num > 0) {
    // output data of each row
    $row = mysqli_fetch_row($result);
    $_SESSION['hno']=$row[0];
$_SESSION['area']=$row[1];
$_SESSION['landmark']=$row[2];
$_SESSION['town']=$row[3];
$_SESSION['pin']=$row[4];
$_SESSION['state']=$row[5];
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
   <script type="text/javascript">
  // function checkForm(form)
  //{
    //var x = document.getElementById("mode").value;
   //if(x=='new'){ 
    // validation fails if the input is blank
    //if(form.hno.value == "" || form.area.value == "" || form.landmark.value == "" || form.town.value == "" || form.pin.value == "" || form.state.value == "") {
      //alert("Error: Some Feilds are empty!");
      //return false;
    //}}
    //else{
    // validation was successful
    //document.write("yes");
    //return true;
//}

  //};
</script>
  <script type="text/javascript">
  function show()
  {
    document.getElementById('div1').style.display ='none';
    
  
}
function show1(){
  document.getElementById('div1').style.display = 'block';
}
    </script>
  
  <style>
  body{ background-image:url("background.jpg");width:100%;height:100vh;
      background-repeat:no-repeat;
         color:#fff; }
    
    
.formcontainer{border:0px solid #fff; padding:30px 80px; margin-top:5vh; 
               -webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
               -moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
               box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
         }    
    
.font{ font-family: "playball",playball;
     font-size:5vw;}    
    
    
    
    
    </style>
</head>
<body> 
 <h1 class="font"><a href="index.php" style="color:white;text-decoration: none">Shopping Adda</a></h1>
<div class="container-fluid">
  <div class="row">
  <div class="col-md-4 col-sm-4 col-xs-12"></div>
  <div class="col-md-4 col-sm-4 col-xs-12">
    <form class="formcontainer" action="shipping.php" method="POST">
      <input type="radio" class="form-check-input" name="mode" id="mode" value ="saved" onclick="show()">Saved Address
  </label>
  <p style="font-size:15px  "><?php
  if ($num > 0) {
        echo "<br> Hno: ". $_SESSION['hno']. "<br> Area: ". $_SESSION['area']. "<br>Landmark: " . $_SESSION['landmark'] ."<br>Town: " . $_SESSION['town'] ."<br>Pincode: " . $_SESSION['pin'] ."<br>State: " . $_SESSION['state'] ;
    

} else {
    echo "No Saved Address!";
}
  ?></p>
<hr>
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="mode" id="mode" value="new" onclick="show1();">New Address
  </label>
  <div id="div1" style="display:none">
   <div class="form-group">
    <label for="add">Flat, House no., Building, Company, Apartment: </label>
    <input type="text" class="form-control" id="hno" name="hno">
  </div>
   <div class="form-group">
    <label for="address">Area, Colony, Street, Sector, Village: </label>
    <input type="text" class="form-control" id="area" name="area">
  </div>
  <div class="form-group">
    <label for="addresss">Landmark e.g. near apollo hospital: </label>
    <input type="text" class="form-control" id="landmark" name="landmark">
  </div>
  <div class="form-group">
    <label for="town">Town/City: </label>
    <input type="text" class="form-control" id="town" name="town">
  </div>
  <div class="form-group">
    <label for="code">Pincode:</label>
    <input type="number" class="form-control" id="pin" name="pin">
  </div>
  <div class="form-group">
    <label for="State">State: </label>
    <input type="text" class="form-control" id="state" name="state">
  </div>
  </div>
 
  <button type="Login" class="btn btn-success btn-block" value="submit">Submit</button>


</div>
   </div>
  </div>

 
</body>
</html>
