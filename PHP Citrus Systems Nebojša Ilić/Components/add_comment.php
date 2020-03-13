<?php require '../Include/validation.php';?>
<?php require '../DB/connection.php';?>
<div class='submit-com'>
<form action="new_comment()" method="POST" autocomplete="off">
  <div class="form-group">
    <label for="user">Your name</label>
    <input name="user" type="text" class="form-control" id="NAME" placeholder="name">
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
  <input id="submit" class="btn btn-primary" type="submit" value="Commit">
</form>
</div>


<?php 
// function sub_com(){
//         $user = $_POST['NAME'];
//         $email = $_POST['MAIL'];
//         $comment = $_POST['COMMENT'];
//         if (!empty($_POST['NAME']) && !empty($_POST['MAIL']) && !empty($_POST['COMMENT'])) {
//             if (preg_match('/[^A-Za-z]/', $data['NAME']) || preg_match('/[^A-Za-z]/',
//                             $data['MAIL'])) {
//                 echo 'Dont use white speces or special characters in name or email!';
//                 http_response_code(400);
//             } else {
//               echo 'Invalid data in name or email!';
//             } 
//               echo "SUCCESS";
            
//       }
//     header('location: ../main.php');
//   }


  function new_comment($name, $mail, $comment){
        $name = $_POST['NAME'];
        $mail = $_POST['MAIL'];
        $comment = $_POST['COMMENT'];
        $sqlf = "INSERT INTO comments SET USER='$name', MAIL='$mail', COMMENT='$comment', STATUS_com='0'";
        $result = $conn->query($sqlf);
        header('Location: main.php');
        return $result;
}
?>