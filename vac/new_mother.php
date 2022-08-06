<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Saira:wght@800&Caveat:wght@500&family=Great+Vibes&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="Assignment2/css/uniform.css">
<link rel="stylesheet" href="Assignment2/css/homepa/ge.css">
<title>Create new monther page (CIRS)</title>
</head>
<body>
  
<?php include 'header.php'; 
      include "navbar.php";?>

<div id="content">

  <a class="back-link" href="<?php echo 'login-admin.php'; ?>"> Back to List</a>

  <div class="New Mother">
    <h1>Create New Mother Information</h1>

    <form action='create_mother.php' method="POST">
    
      <dl>
        <dt>Mother's Health Card</dt>
        <dd><input type="text" name="momhcard"/></dd>
      </dl>

      <dl>
        <dt>Mother's Full Name</dt>
        <dd><input type="text" name="momfname"/></dd>
          
      </dl>

      <dl>
        <dt>Email</dt>
        <dd><input type="text" name="email"/></dd>
        </dd>
      </dl>

      <dl>
        <dt>Password</dt>
        <dd><input type="text" name="password"/></dd>
        </dd>
      </dl>

      <div id="operations">
        <input type="submit" value="Create Mother Information"/>
      </div>
    </form>


  </div>

</div>

<?php include 'footer.php'; ?>
