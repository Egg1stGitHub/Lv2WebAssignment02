<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Saira:wght@800&family=Great+Vibes&display=swap" rel="stylesheet">
<link rel="stylesheet" href="Assignment2/css/uniform.css">
<link rel="stylesheet" href="Assignment2/css/login.css">
<title>show child vaccine record page</title>
<body>
  

<?php
require_once('db_credentials.php');
require_once('database.php');
include "header.php"; 
include "navbar.php";
$db = db_connect();

//access URL parameter
$id = $_GET['id'];


$sql = "SELECT `vaccine_date`, `child_t`.`m_healthcard`, `child_t`.`c_firstname`, `child_t`.`c_lastname`, `vaccine_t`.`vaccine_name`
        FROM `record_t` LEFT JOIN `child_t` ON `child_t`.`child_id` = '$id'
        LEFT JOIN `vaccine_t`ON `record_t`.`SKU` = `vaccine_t`.`SKU`";
    
$result_set = mysqli_query($db, $sql);
    
$result = mysqli_fetch_assoc($result_set);

?>

<div id="content">

<a class="back-link"  href="login-admin.php"> Back to List</a>

  <div class="page show">

  <h1> <?php echo $result['m_healthcard'];?></h1>

<div class="attributes">
  <dl>
    <dt>Mother's Health Card</dt>
    <dd><?php echo $result['m_healthcard'];?></dd>
  </dl>
  <dl>    
    <dt>Child First Name</dt>
    <dd><?php echo $result['c_firstname'];?></dd>
  </dl>
  <dt>Child Last Name</dt>
    <dd><?php echo $result['c_lastname'];?></dd>
  </dl>
  <dl>
    <dt>Vaccine Date</dt>
    <dd><?php echo $result['vaccine_date'];?></dd>
  </dl>
  <dl>
    <dt>Vaccine Name</dt>
    <dd><?php echo $result['vaccine_name'];?></dd>
  </dl>
    
</div>


  </div>

</div>

<?php include 'footer.php'; ?>
</body>
</html>
