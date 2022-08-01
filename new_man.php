<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Saira:wght@800&Caveat:wght@500&family=Great+Vibes&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="Assignment2/css/uniform.css">
<link rel="stylesheet" href="Assignment2/css/homepa/ge.css">
<title>Create new vaccine factory page (CIRS)</title>
</head>
<body>
  
<?php include 'header.php'; 
      include "navbar.php";?>

<div id="content">

  <a class="back-link" href="<?php echo 'login-admin.php'; ?>"> Back to List</a>

  <div class="New factory">
    <h1>Create New Child Information</h1>

    <form action='create_man.php' method="POST">

      <dl>
        <dt>SKU (Manufactory SKU number)</dt>
        <dd><input type="text" name="sku"/></dd> 
      </dl>

      <dl>
        <dt>Vaccine Name / Immunization Name</dt>
        <dd><input type="text" name="vname"/></dd>
        </dd>
      </dl>

      <div id="operations">
        <input type="submit" value="Create Vaccine Manufactory Information"/>
      </div>
    </form>


  </div>

</div>

<?php include 'footer.php'; ?>
