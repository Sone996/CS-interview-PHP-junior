<?php 
function approve(){
  $conn = new mysqli('localhost', 'root', '', "shop");
  $id = $_POST['ID_com'];
  $sqla = "UPDATE comments SET STATUS_com='1' WHERE ID_com= $id";
  $Execute = mysqli_query($conn, $sqla);
}
approve();
?>