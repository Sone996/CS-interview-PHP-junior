<?php require '../Components/header.php';?>
<?php require '../Include/auth.php' ?>
<?php require '../DB/connection.php' ?>
<?php
session_start();
if (
    ($_SESSION['ID_admin'] == NULL)
) {
    header('Location: login.php');
    return;
}

// echo $_SESSION['ID_admin'];
?>
<h3>Comments awaiting validation</h3>
<table class="table" id="table_for_comment" style="margin-top: 3em; margin-bottom: 3em">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Comment</th>
      <th scope="col">Approve</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = $result1->fetch_assoc()) {
    if($row['STATUS_com']==0) {
    ?>
    <tr>
      <th scope="row"><?php echo $row["ID_com"];?></th>
      <td><?php echo $row["USER"];?></td>
      <td><?php echo $row["MAIL"];?></td>
      <td>@mdo</td>
      <th scope="col"><input class="button btn btn-primary" type="submit" name="approve" value="Approve"></th>
      <th scope="col"><input class="button btn btn-danger" type="submit" name="delete" value="Delete"></th>
    </tr>
  <?php } } ?>
  </tbody>
</table>
<?php require '../Components/footer.php';?>


<?php 
function delete(){
  $conn = new mysqli('localhost', 'root', '', "shop");
  $id = $_POST['ID_comm'];
  $sqlf = "DELETE FROM comments WHERE ID_com= $id";
  $result = $conn->query($sqlf);
  header('Location: admin.php');
}
function approve(){
  $conn = new mysqli('localhost', 'root', '', "shop");
  $id = $_POST['ID_comm'];
  $sqlf = "UPDATE comments SET STATUS_com='1' WHERE ID_com= $id";
  $result = $conn->query($sqlf);
  header('Location: admin.php');
  return $result;
}
?>


<script>
$(document).ready(function () {
    $('.button').click(function () {
        var clickBtnValue = $(this).val();
        var ajaxurl = 'admin.php',
            data = { 'action': clickBtnValue };
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });
});
</script>