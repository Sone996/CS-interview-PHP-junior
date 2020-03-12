<?php require '../Components/head.php';?>
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

echo $_SESSION['ID_admin'];
?>
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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <th scope="col"><button type="button" class="btn btn-success">Approve</button></th>
      <th scope="col"><button type="button" class="btn btn-danger">Delete</button></th>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <th scope="col"><button type="button" class="btn btn-success">Approve</button></th>
      <th scope="col"><button type="button" class="btn btn-danger">Delete</button></th>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <th scope="col"><button type="button" class="btn btn-success">Approve</button></th>
      <th scope="col"><button type="button" class="btn btn-danger">Delete</button></th>
    </tr>
  </tbody>
</table>
<?php require '../Components/footer.php';?>


