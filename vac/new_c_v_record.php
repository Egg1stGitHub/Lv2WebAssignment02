<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Saira:wght@800&Caveat:wght@500&family=Great+Vibes&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="Assignment2/css/uniform.css">
<link rel="stylesheet" href="Assignment2/css/homepa/ge.css">
<title>Create new Child page (CIRS)</title>
</head>
<body>
  
<?php include 'header.php'; 
      include "navbar.php";?>

<div id="content">

  <a class="back-link" href="<?php echo 'login-admin.php'; ?>"> Back to List</a>

  <div class="New Vax Record">
    <h1>Create New Child's Vaccine Record Information</h1>

    <form action='create_c_v_record.php' method="POST">

      <dl>
        <dt>Child ID</dt>
        <dd><input type="text" name="cid"/></dd> 
      </dl>

      <dl>
        <dt>SKU</dt>
        <dd><input type="text" name="sku"/></dd>
        </dd>
      </dl>

      <dl>
        <dt>Date</dt>
        <dd><input type="text" name="date"/></dd>
        </dd>
      </dl>

      <div id="operations">
        <input type="submit" value="Create Child Vaccine Record Information"/>
      </div>
    </form>


  </div>

</div>

<?php include 'footer.php'; ?>
