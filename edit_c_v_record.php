<?php
require_once('db_credentials.php');
require_once('database.php');
$db = db_connect();


if(!isset($_GET['id'])) {
  header("Location:  login-admin.php");
}
$id = $_GET['id'];

$page_title = "Edit Child's Vaccine Record Informtion"; 
  // Handle form values sent by new.php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  //access the employee information
  $childid = $_POST['cid'];
  $sku = $_POST['sku'];
  $date = $_POST['date'];
  //update the table with new information
  $sql = "UPDATE vaccine_t set childid = '$childid' , SKU = '$sku' , vaccine_date = '$date' where recordid = '$id';";

  $result = mysqli_query($db, $sql);
  //redirect to show page
    header("Location: show_c_v_record.php?id=  $id");
  }
  // display the employee information
  else {
$sql = "SELECT * FROM record_t WHERE recordid = '$id';";
    
$result_set = mysqli_query($db, $sql);
    
$result = mysqli_fetch_assoc($result_set);
  }

?>

<?php include 'header.php'; 
      include 'navbar.php'; ?>

<div id="content">

  <a class="back-link" href="login-admin.php"> Back to List</a>

  <div class="page edit">
    <h1>Edit Child's Vaccine Record Information</h1>

<!-- from will post to the same page -->
    <form action = "<?php echo "edit_c_v_record.php?id=" . $results['childid']; ?>"  method="post">
      <dl>
        <dt>Child ID</dt>
        <dd><input type="text" name="cid" value = "<?php echo $result['childid'];?>" /></dd>
        </dd>
      </dl>
      <dl>
        <dt>SKU</dt>
        <dd><input type="text" name="sku" value = "<?php echo $result['SKU'];?>" /></dd>
      </dl> 
      <dl>
        <dt>Vaccine Date</dt>
        <dd><input type="text" name="date" value = "<?php echo $result['vaccine_date'];?>" /></dd>
      </dl>
      
      <div id="operations">
        <input type="submit" value="Edit Child Vaccine Record Information" />
      </div>
    </form>

  </div>

</div>

<?php include 'footer.php'; ?>
