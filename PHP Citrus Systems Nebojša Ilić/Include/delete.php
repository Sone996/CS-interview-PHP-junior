<?php 
function delete(){
  $conn = new mysqli('localhost', 'root', '', "shop");
  $id = $_POST['ID_com'];
  $sqld = "DELETE FROM comments WHERE ID_com= $id";
  $Execute = mysqli_query($conn, $sqld);
}
delete();
?>