<?php

require_once('db_credentials.php');
require_once('database.php');
include 'header.php';
include 'navbar.php';
$db = db_connect();

 // Handle form values sent by new_child.php
 if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $childid = $_POST['cid'];
  $sku = $_POST['sku'];
  $date = $_POST['date'];
 
   $sql= "INSERT INTO `record_t` VALUES ('', '$childid', '$sku', '$date')";
   $result = mysqli_query($db, $sql);
 
     // For INSERT statements, $result is true/falseins
   $id = mysqli_insert_id($db);
   //redirect to show page
   header("Location: show_c_v_record.php?id= $id");
   
 
 } else {
     header("Location: new_c_v_record.php");
 }
 

include 'footer.php';
?>