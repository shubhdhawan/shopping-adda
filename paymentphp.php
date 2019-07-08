<?php
session_start();
$con = mysqli_connect("localhost","root","","shoppingadda");
$mode=$_POST['mode'];
$email=$_SESSION['email'];
$product=$_SESSION['product'];
$quant=$_SESSION['quant'];
$size=$_SESSION['size'];
$price=$_SESSION['price'];
$name=$_SESSION['name'];
$hno=$_SESSION['hno'];
$area=$_SESSION['area'];
$landmark=$_SESSION['landmark'];
$town=$_SESSION['town'];
$pin=$_SESSION['pin'];
$state=$_SESSION['state'];
$pid=$_SESSION['pid'];
	if ($mode=='cod') 
	{
	$statement="INSERT into payment (email,mode, card, name) values ('".$email."','".$mode."','".'0'."','".$name."')";
	$res=mysqli_query($con,$statement);
	}
	else
	{
		$card=$_POST['card'];
		$name=$_POST['name'];
		$statements="INSERT into payment(email,mode, card, name) values ('".$email."','".$mode."','".$card."','".$name."')";
		$res=mysqli_query($con,$statements);
		
	}
	$statment1 = "INSERT into orders (pid,email,product,quant,size,price) values ('".$pid."','".$email."','".$product."','".$quant."','".$size."','".$price."')";
	$res1 = mysqli_query($con ,$statment1);
	$query="INSERT INTO shipment(pid,email,hno,area,landmark,town,pin,state) values ('".$pid."','".$email."','".$hno."','".$area."','".$landmark."','".$town."','".$pin."','".$state."')";
		$res2=mysqli_query($con,$query);
		header("Location:summary.php");		
?>