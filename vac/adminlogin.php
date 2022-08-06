<?php
session_start();
require_once('db_credentials.php');
require_once('database.php');
include 'header.php';
include 'navbar.php';
$db = db_connect();

$username=$_POST['account'];
$password=$_POST['Apass'];

$sql ="SELECT Account, Password FROM admin WHERE Account='$username' and Password='$password'";

$result = mysqli_query($db, $sql);

if($result)
{
    header("Location: dashboard.php");
} else {
    header("Location: adminlogin.html");
}

include 'footer.php';
?>

