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
  
  <?php 
  while($row = $result1->fetch_assoc()) {
    if($row['STATUS_com']==0) {
    ?>
    <tr>
      <td scope="row" id="<?php echo $row["ID_com"];?>"><?php echo $row["ID_com"];?></td>
      <td><?php echo $row["USER"];?></td>
      <td><?php echo $row["MAIL"];?></td>
      <td><?php echo $row["COMMENT"];?></td>
      <td scope="col"><input id="del_<?php echo $row["ID_com"];?>" class="approve btn btn-primary" type="submit" name="approve" value="Approve"></td>
      <td scope="col"><input id="del_<?php echo $row["ID_com"];?>" class="delete btn btn-danger" type="submit" name="delete" value="Delete"></td>
    </tr>
  <?php } } ?>
  </tbody>
</table>
<?php require '../Components/footer.php';?>

<script>
//for delete (names are mixed up)
$(document).ready(function () {
    var approved = $('.delete');
    approved.click(function (e) {
      var el = this;
      var id = this.id;
      var splitid = id.split("_");
      var approveid = splitid[1];
       e.preventDefault();
      if (!approveid) return;     
         $.ajax({
            url: "/PHP%20Citrus%20Systems%20Neboj%c5%a1a%20Ili%c4%87/Include/delete.php",
             data: {
               ID_com: approveid,
              },
              type: 'POST',
          })
    });
});

// for approve
$(document).ready(function () {
    var approved = $('.approve');
    approved.click(function (e) {
      var el = this;
      var id = this.id;
      var splitid = id.split("_");
      var approveid = splitid[1];
       e.preventDefault();
      if (!approveid) return;     
         $.ajax({
            url: "/PHP%20Citrus%20Systems%20Neboj%c5%a1a%20Ili%c4%87/Include/approve.php",
             data: {
               ID_com: approveid,
              },
              type: 'POST',
          })
    });
});
</script>
