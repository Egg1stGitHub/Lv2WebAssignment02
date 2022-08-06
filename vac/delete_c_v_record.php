<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Saira:wght@800&family=Great+Vibes&display=swap" rel="stylesheet">
<link rel="stylesheet" href="Assignment2/css/uniform.css">
<link rel="stylesheet" href="Assignment2/css/login.css">
<title>delete child infor page</title>
</head>
<body>
<?php
require_once('db_credentials.php');
require_once('database.php');
include "header.php";
include "navbar.php";
$db = db_connect();

if(!isset($_GET['id'])) {
  header("Location:  login-admin.php");
}
$id = $_GET['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $sql = "DELETE FROM record_t WHERE recordid ='$id'";
    $result = mysqli_query($db, $sql);

  header("Location: login-admin.php");

} 
else 
{
  $sql = "SELECT * FROM record_t WHERE recordid = '$id' ";
    
$result_set = mysqli_query($db, $sql);
    
    $result = mysqli_fetch_assoc($result_set);
    
}

?>

<?php $page_title = 'Delete Page'; ?>


<div id="content">

  <a class="back-link" href="login-admin.php">&laquo; Back to List</a>

  <div class="page delete">
    <h1>Delete Page</h1>
    <p>Are you sure you want to delete this record?</p>
    <p class="item"><?php echo $result['childid'] . $result['vaccine_date']; ?></p>

    <form action="<?php echo 'delete_c_v_record.php?id=' . $result['recordid']; ?>"  method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Record" />
      </div>
    </form>
  </div>

  <?php include 'footer.php'; ?>
</div>


