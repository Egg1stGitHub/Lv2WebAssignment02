<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Saira:wght@800&family=Great+Vibes&display=swap" rel="stylesheet">
<link rel="stylesheet" href="Assignment2/css/uniform.css">
<link rel="stylesheet" href="Assignment2/css/login.css">
<title>show vaccine factory page</title>
<body>
  

<?php
require_once('db_credentials.php');
require_once('database.php');
include "header.php"; 
include "navbar.php";
$db = db_connect();

//access URL parameter
$id = $_GET['id'];


$sql = "SELECT * FROM `vaccine_t` WHERE `SKU` = '$id';";
    
$result_set = mysqli_query($db, $sql);
    
$result = mysqli_fetch_assoc($result_set);

?>

<div id="content">

<a class="back-link"  href="login-admin.php"> Back to List</a>

  <div class="page show">

  <h1> <?php echo $result['vaccine_name'];?></h1>

<div class="attributes">
  <dl>
    <dt>SKU number</dt>
    <dd><?php echo $result['SKU'];?></dd>
  </dl>
  <dl>    
    <dt>Vaccine Name / Immunization Name</dt>
    <dd><?php echo $result['vaccine_name'];?></dd>
  </dl>
      
</div>


  </div>

</div>

<?php include 'footer.php'; ?>
</body>
</html>
