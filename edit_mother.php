<?php
require_once('db_credentials.php');
require_once('database.php');
$db = db_connect();


if(!isset($_GET['id'])) {
  header("Location:  login-admin.php");
}
$id = $_GET['id'];

$page_title = "Edit Mohter's Informtion"; 
  // Handle form values sent by new.php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  //access the employee information
 $momhcard = $_POST['momhcard'];
 $momfname = $_POST['momfname'];
 $email = $_POST['email'];
 $password = $_POST['password'];
  //update the table with new information
  $sql = "UPDATE mother_t set momfullname = '$momfname' , email = '$email' , password = '$password' where momhealthcard = '$momhcard';";

  $result = mysqli_query($db, $sql);
  //redirect to show page
    header("Location: show_mother.php?id=  $id");
  }
  // display the employee information
  else {
$sql = "SELECT * FROM mother_t WHERE momhealthcard = '$id';";
    
$result_set = mysqli_query($db, $sql);
    
$result = mysqli_fetch_assoc($result_set);
  }

?>

<?php include 'header.php'; 
      include 'navbar.php'; ?>

<div id="content">

  <a class="back-link" href="login-admin.php"> Back to List</a>

  <div class="page edit">
    <h1>Edit Mother's Information</h1>

<!-- from will post to the same page -->
    <form action = "<?php echo "edit_mother.php?id=" . $results['momhealthcard']; ?>"  method="post">
      <dl>
        <dt>Mother Health Card</dt>
        <dd><input type="text" name="momhcard" value = "<?php echo $result['momhealthcard'];?>" /></dd>
        </dd>
      </dl>
      <dl>
        <dt>Mother Full Name</dt>
        <dd><input type="text" name="momfname" value = "<?php echo $result['momfullname'];?>" /></dd>
      </dl> 
      <dl>
        <dt>Email</dt>
        <dd><input type="text" name="email" value = "<?php echo $result['email'];?>" /></dd>

        </dd>
      </dl>
      <dl>
        <dt>Password</dt>
        <dd><input type="text" name="password" value="<?php echo $result['password'];?>" /></dd>

        </dd>
      </dl>
      
      <div id="operations">
        <input type="submit" value="Edit Mother Information" />
      </div>
    </form>

  </div>

</div>

<?php include 'footer.php'; ?>
