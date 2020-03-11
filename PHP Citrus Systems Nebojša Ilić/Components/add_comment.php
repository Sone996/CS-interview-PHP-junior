<?php require '../Include/validation.php';?>
<?php require '../DB/connection.php';?>
<div class='submit-com'>
<form action="Submit" method="POST">
  <div class="form-group">
    <label for="user">Your name</label>
    <input name="user" type="text" class="form-control" id="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="email@example.com">
  </div>
  <div class="form-group">
    <label for="comment">Add your comment</label>
    <textarea name="comment" class="form-control" id="comment" rows="3" required=''></textarea>
  </div>
  <button type="button" class="btn btn-primary" name="Submit">Commit</button>
</form>
</div>


<?php 
if(isset($_POST['Submit']))
{
        $user = $_POST['USER'];
        $email = $_POST['EMAIL'];
        $comment = $_POST['COMMENT'];
        if (!empty($_POST['USER']) && !empty($_POST['EMAIL']) && !empty($_POST['COMMENT'])) {
            if (preg_match('/[^A-Za-z]/', $data['USER']) || preg_match('/[^A-Za-z]/',
                            $data['EMAIL'])) {
                echo 'Dont use white speces or special characters in name or email!';
                http_response_code(400);
            } else {
              echo 'Invalid data in name or email!';
            } 
              echo "SUCCESS";
            
      }
    }
?>