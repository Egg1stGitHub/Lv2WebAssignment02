<?php

require_once('db_credentials.php');
require_once('database.php');
include 'header.php';
include 'navbar.php';
$db = db_connect();

 // Handle form values sent by new_child.php
 if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $momhcard = $_POST['momhcard_c'];
  $cfn = $_POST['cfname'];
  $cln = $_POST['clname'];
  $dob = $_POST['dob'];
  $sex = $_POST['sex'];
 
   $sql= "INSERT INTO `child_t` VALUES ('', '$momhcard','$cfn', '$cln', '$dob', '$sex')";
 $result = mysqli_query($db, $sql);
 
     // For INSERT statements, $result is true/falseins
   $id = mysqli_insert_id($db);
   //redirect to show page
   header("Location: show_child.php?id= $id");
   
 
 } else {
     header("Location: new_child.php");
 }
 

include 'footer.php';
?>