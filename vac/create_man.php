<?php

require_once('db_credentials.php');
require_once('database.php');
include 'header.php';
include 'navbar.php';
$db = db_connect();

 // Handle form values sent by new_child.php
 if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $sku = $_POST['sku'];
  $name = $_POST['vname'];
 
   $sql= "INSERT INTO `vaccine_t` VALUES ('$sku', '$name')";
 $result = mysqli_query($db, $sql);
 
     // For INSERT statements, $result is true/falseins
   $id = mysqli_insert_id($db);
   //redirect to show page
   header("Location: show_man.php?id= $id");
   
 
 } else {
     header("Location: new_man.php");
 }
 

include 'footer.php';
?>