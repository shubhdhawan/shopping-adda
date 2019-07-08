<?php
session_start();
// Include config file
require_once('C:/Users/Swarndeep Singh/Downloads/google-api-php-client-1.1.7/google-api-php-client-1.1.7/src/Google/autoload.php');

// Remove token and user data from the session
unset($_SESSION['access_token']);
unset($_SESSION['state']);
unset($_GET['code']);


// Destroy entire session data
$_SESSION['logged_in'] = 0;
// Redirect to homepage
header("Location:index.php");

?>