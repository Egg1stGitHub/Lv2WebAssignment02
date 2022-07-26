<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Saira:wght@800&family=Great+Vibes&display=swap" rel="stylesheet">
<link rel="stylesheet" href="Assignment2/css/uniform.css">
<link rel="stylesheet" href="Assignment2/css/login.css">
<title>admin page</title>
</head>
<body>

<?php
require_once('db_credentials.php');
require_once('database.php');
include "header.php";
include "navbar.php";

$db = db_connect();
//$page_title = 'webassignment2'; ?>


<?php 

  $sql = "SELECT * FROM mother_t";
  //echo $sql;
  $result_set = mysqli_query($db,$sql);
  
  ?>

<div id="content">
  <div class="subjects listing">
    <h1>Mother's Information</h1>

    <div class="actions">
      <a class="action" href="new_mother.php">Create New Mother's Data</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>Health Card</th>
        <th>Full Name</th>
        <th>Email</th>
  	    <th>Password</th>
  	    <th>&nbsp</th>
  	    <th>&nbsp</th>
        <th>&nbsp</th>
  	  </tr>

      <?php while($results = mysqli_fetch_assoc($result_set)) { ?>
        <tr>
          <td><?php echo $results['momhealthcard']; ?></td>
          <td><?php echo $results['momfullname']; ?></td>
          <td><?php echo $results['email'] ; ?></td>
    	    <td><?php echo $results['password']; ?></td>
          <td><a class="action" href="<?php echo"show.php?id=" . $results['momhealthcard']; ?>">View</a></td>
          <td><a class="action" href="<?php echo "edit.php?id=" . $results['momhealthcard']; ?>">Edit</a></td>
          <td><a class="action" href="<?php echo "delete.php?id=" . $results['momhealthcard']; ?>">delete</a></td>
          
    	  </tr>
      <?php } ?>
  	</table>
    <br>
    <br>

<?php 

  $sql = "SELECT * FROM child_t";
  //echo $sql;
  $result_set = mysqli_query($db,$sql);
  
?>

<div id="content">
  <div class="subjects listing">
    <h1>Child's Information</h1>

    <div class="actions">
      <a class="action" href="new_child.php">Create New Child Data</a>
    </div>

    <table class="list">
  	  <tr>
        <th>Child ID</th>
        <th>Mother's Health Card</th>
        <th>Child First Name</th>
  	    <th>Child Last Name</th>
        <th>Date of Birth<th>
        <th>SEX<th>
  	    <th>&nbsp</th>
  	    <th>&nbsp</th>
        <th>&nbsp</th>
  	  </tr>

      <?php while($results = mysqli_fetch_assoc($result_set)) { ?>
        <tr>
          <td><?php echo $results['child_id']; ?></td>
          <td><?php echo $results['m_healthcard']; ?></td>
          <td><?php echo $results['c_firstname'] ; ?></td>
    	    <td><?php echo $results['c_lastname']; ?></td>
          <td><?php echo $results['DOB']; ?></td>
          <td><?php echo $results['SEX']; ?></td>
          <td><a class="action" href="<?php echo"show.php?id=" . $results['child_id']; ?>">View</a></td>
          <td><a class="action" href="<?php echo "edit.php?id=" . $results['child_id']; ?>">Edit</a></td>
          <td><a class="action" href="<?php echo "delete.php?id=" . $results['child_id']; ?>">delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
    <br>
    <br>


<?php 

$sql = "SELECT * FROM vaccine_t";
//echo $sql;
$result_set = mysqli_query($db,$sql);

?>

<div id="content">
<div class="subjects listing">
  <h1>Vaccine Manufactory Information</h1>

  <div class="actions">
    <a class="action" href="new_manufactory.php">Create New Vaccine Manufactory Data</a>
  </div>

  <table class="list">
    <tr>
      <th>SKU</th>
      <th>Vaccine Name</th>
      <th>&nbsp</th>
      <th>&nbsp</th>
      <th>&nbsp</th>
    </tr>

    <?php while($results = mysqli_fetch_assoc($result_set)) { ?>
      <tr>
        <td><?php echo $results['SKU']; ?></td>
        <td><?php echo $results['vaccine_name']; ?></td>
        <td><a class="action" href="<?php echo"show.php?id=" . $results['SKU']; ?>">View</a></td>
        <td><a class="action" href="<?php echo "edit.php?id=" . $results['SKU']; ?>">Edit</a></td>
        <td><a class="action" href="<?php echo "delete.php?id=" . $results['SKU']; ?>">delete</a></td>
      </tr>
    <?php } ?>
  </table>
  <br>
  <br>

<?php 

$sql = "SELECT * FROM record_t";
//echo $sql;
$result_set = mysqli_query($db,$sql);

?>

<div id="content">
<div class="subjects listing">
  <h1>Child's Vaccine Record Information</h1>

  <div class="actions">
    <a class="action" href="new_reord.php">Create New Child's Vaccine Record Data</a>
  </div>

  <table class="list">
    <tr>
      <th>Child ID</th>
      <th>SKU</th>
      <th>VACCINE DATE<th>
      <th>&nbsp</th>
      <th>&nbsp</th>
      <th>&nbsp</th>
    </tr>

    <?php while($results = mysqli_fetch_assoc($result_set)) { ?>
      <tr>
        <td><?php echo $results['childid']; ?></td>
        <td><?php echo $results['SKU']; ?></td>
        <td><?php echo $results['vaccine_date']; ?></td>
        <td><a class="action" href="<?php echo"show.php?id=" . $results['childid']; ?>">View</a></td>
        <td><a class="action" href="<?php echo "edit.php?id=" . $results['childid']; ?>">Edit</a></td>
        <td><a class="action" href="<?php echo "delete.php?id=" . $results['childid']; ?>">delete</a></td>
      </tr>
    <?php } ?>
  </table>
  <br>
  <br>

  <?php include("footer.php"); ?>

</body>
</html>
