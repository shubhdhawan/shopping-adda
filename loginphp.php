<?php
$con = mysqli_connect("localhost","root","24567980","shoppingadda");

$email=$_POST['email'];
$pass=$_POST['pass'];
$statment = "SELECT id from login WHERE email='$email' AND pass='$pass' ";

$res = mysqli_query($con, $statment);

if($res)
{
	while($arr = mysqli_fetch_array($res))
	{
		header("Location:intro.html");
	}
	
}

$row= mysqli_num_rows($res);
if(!$row)
{
	echo "Invalid Login Details";
}


?>