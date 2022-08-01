<?php
require_once('db_credentials.php');
require_once('database.php');
$db = db_connect();


if(!isset($_GET['id'])) {
  header("Location:  login-admin.php");
}
$id = $_GET['id'];

$page_title = "Edit Vaccine Manufactory Informtion"; 
  // Handle form values sent by new.php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  //access the employee information
  $sku = $_POST['sku'];
  $name = $_POST['vname'];
  //update the table with new information
  $sql = "UPDATE vaccine_t set SKU = '$sku' , vaccine_name = '$name' where SKU = '$id';";

  $result = mysqli_query($db, $sql);
  //redirect to show page
    header("Location: show_man.php?id=  $id");
  }
  // display the employee information
  else {
$sql = "SELECT * FROM vaccine_t WHERE SKU = '$id';";
    
$result_set = mysqli_query($db, $sql);
    
$result = mysqli_fetch_assoc($result_set);
  }

?>

<?php include 'header.php'; 
      include 'navbar.php'; ?>

<div id="content">

  <a class="back-link" href="login-admin.php"> Back to List</a>

  <div class="page edit">
    <h1>Edit Vaccine Manufactory Information</h1>

<!-- from will post to the same page -->
    <form action = "<?php echo "edit_man.php?id=" . $results['vaccine_name']; ?>"  method="post">
      <dl>
        <dt>SKU Number</dt>
        <dd><input type="text" name="sku" value = "<?php echo $result['SKU'];?>" /></dd>
        </dd>
      </dl>
      <dl>
        <dt>Vaccine Name / Immunization Name</dt>
        <dd><input type="text" name="vname" value = "<?php echo $result['vaccine_name'];?>" /></dd>
      </dl>       
      
      <div id="operations">
        <input type="submit" value="Edit Vaccine Manufactory Information" />
      </div>
    </form>

  </div>

</div>

<?php include 'footer.php'; ?>
