<?php

require_once('db_credentials.php');
require_once('database.php');
include 'header.php';
include 'navbar.php';
$db = db_connect();

  // Handle form values sent by new_mother.php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
 $momhcard = $_POST['momhcard'];
 $momfname = $_POST['momfname'];
 $email = $_POST['email'];
 $password = $_POST['password'];

  $sql= "INSERT INTO `mother_t` VALUES ('$momhcard','$momfname','$email', '$password')";
$result = mysqli_query($db, $sql);
//(`momhealthcard`, `momfullname`, `email`, `password`)

    // For INSERT statements, $result is true/falseins
  $id = mysqli_insert_id($db);
  //redirect to show page
  header("Location: show_mother.php?id= $id");
  

} else {
    header("Location: new_mother.php");
}
 

include 'footer.php';
?>