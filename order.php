<?php
session_start();
if($_SESSION['logged_in']==1)
{
	$_SESSION['product']=$_POST['product'];
	$_SESSION['quant']=$_POST['quant'];
	$_SESSION['size']=$_POST['size'];
	$_SESSION['price']=$_POST['price'];
	$_SESSION['image']=$_POST['image'];
	$_SESSION['pid']=$_POST['pid'];
	header("Location:shipment details.php");
}
else
{
	header("Location:login.php");
}
?>