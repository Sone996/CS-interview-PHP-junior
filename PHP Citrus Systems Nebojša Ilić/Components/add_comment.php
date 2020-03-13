<?php require '../Include/validation.php';?>
<?php require '../DB/connection.php';?>
<div class='submit-com'>
<form action="" method="POST" autocomplete="off">
  <div class="form-group">
    <label for="user">Your name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input name="mail" type="email" class="form-control" id="email" placeholder="email@example.com">
  </div>
  <div class="form-group">
    <label for="comment">Add your comment</label>
    <textarea name="comment" class="form-control" id="comment" rows="3" required=''></textarea>
  </div>
  <!-- <button type="button" class="btn btn-primary" name="submit">Commit</button> -->
  <input name="add" class="btn btn-primary" type="submit" value="Commit">
</form>
</div>


<?php 
if(isset($_POST["add"])){
  new_comment();
}

function new_comment(){ 
      $conn = new mysqli('localhost', 'root', '', "shop");
      $name = $_POST['name'];
      $mail = $_POST['mail'];
      $comment = $_POST['comment'];
      $status = 0;
      if (!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['comment'])) {
        $sqlf = "INSERT INTO comments SET USER='$name', MAIL='$mail', COMMENT='$comment', STATUS_com='$status'";
        $Execute = mysqli_query($conn, $sqlf);
      } else {
        echo '<div class="alert alert-warning" role="alert">Please fill all fields!</div>';
      }
}
?>