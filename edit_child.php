<?php
require_once('db_credentials.php');
require_once('database.php');
$db = db_connect();


if(!isset($_GET['id'])) {
  header("Location:  login-admin.php");
}
$id = $_GET['id'];

$page_title = "Edit Child's Informtion"; 
  // Handle form values sent by new.php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  //access the employee information
  $momhcard = $_POST['momhcard_c'];
  $cfn = $_POST['cfname'];
  $cln = $_POST['clname'];
  $dob = $_POST['dob'];
  $sex = $_POST['sex'];
  //update the table with new information
  $sql = "UPDATE child_t set m_healthcard = '$momhcard' , c_firstname = '$cfn' , c_lastname = '$cln', DOB = '$dob', SEX = '$sex' where child_id = '$id';";

  $result = mysqli_query($db, $sql);
  //redirect to show page
    header("Location: show_child.php?id=  $id");
  }
  // display the employee information
  else {
$sql = "SELECT * FROM child_t WHERE child_id = '$id';";
    
$result_set = mysqli_query($db, $sql);
    
$result = mysqli_fetch_assoc($result_set);
  }

?>

<?php include 'header.php'; 
      include 'navbar.php'; ?>

<div id="content">

  <a class="back-link" href="login-admin.php"> Back to List</a>

  <div class="page edit">
    <h1>Edit Child's Information</h1>

<!-- from will post to the same page -->
    <form action = "<?php echo "edit_child.php?id=" . $results['m_healthcard']; ?>"  method="post">
      <dl>
        <dt>Mother Health Card</dt>
        <dd><input type="text" name="momhcard_c" value = "<?php echo $result['m_healthcard'];?>" /></dd>
      </dl>
      <dl>
        <dt>Child First Name</dt>
        <dd><input type="text" name="cfname" value = "<?php echo $result['c_firstname'];?>" /></dd>
      </dl> 
      <dl>
        <dt>Child Last Name</dt>
        <dd><input type="text" name="clname" value = "<?php echo $result['c_lastname'];?>" /></dd>
      </dl>

      <dl>
        <dt>Date of Birth</dt>
        <dd><input type="text" name="dob" value="<?php echo $result['DOB'];?>" /></dd>
      </dl>

      <dl>
        <dt>SEX (F / M)</dt>
        <dd><input type="text" name="sex" value="<?php echo $result['SEX'];?>" /></dd>
      </dl>

      <dl>
        <dt>Child ID (auto number)</dt>
        <dd><input type="text" name="childid" value="<?php echo $result['child_id'];?>" /></dd>
      </dl>
      
      
      <div id="operations">
        <input type="submit" value="Edit Child Information" />
      </div>
    </form>

  </div>

</div>

<?php include 'footer.php'; ?>
