<?php
session_start();
$con = mysqli_connect("localhost","root","","shoppingadda");

$add=$_POST['mode'];
if($add=='new'){
$_SESSION['hno']=$hno = $_POST['hno'];
$_SESSION['area']=$area = $_POST['area'];
$_SESSION['landmark']=$landmark = $_POST['landmark'];
$_SESSION['town']=$town = $_POST['town'];
$_SESSION['pin']=$pin = $_POST['pin'];
$_SESSION['state']=$state = $_POST['state'];
$email = $_SESSION['email'];
if (empty($hno) || empty($area) || $landmark=='' || $town=='' || $pin=='' || $state=='') {

	echo "alert('Some feilds are empty!');";
	header("Location:shipping details.php");
}
}
	header("Location:payment.html");

?>