<?php require '../Components/header.php';?>
<form method="POST" id="login-form">
  <div class="form-group">
    <label>Name</label>
    <input name="admin_name" id="user" type="text" class="form-control" placeholder="Enter your name" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input name="admin_password" id="pass" type="password" class="form-control" placeholder="Password" autocomplete="off">
  </div>
  <button type="Submit" id="login-btn" class="btn btn-primary">Submit</button>
</form>
<?php require '../Components/footer.php';?>

<?php session_start();?>