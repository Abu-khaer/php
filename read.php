<?php
include 'config/db.php';

$query = "SELECT * FROM student ORDER BY id DESC";

$result = mysqli_query($conn, $query);

$data = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<?php include 'layout/header.php'; ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card-body">
      
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SL NO.</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">Mobile</th>
      <th scope="col">GENDER</th>
      <th scope="col">ACTION</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach ($data as $post ):  ?>

    <tr>
      <th scope="row"> <?php echo $post['id']; ?></th>
      <td><?php echo $post['name']; ?></td>
      <td><?php echo $post['email']; ?></td>
      <td><?php echo $post['password']; ?></td>
      <td><?php echo $post['number']; ?></td>
      <td><?php echo $post['gender']; ?></td>
      <td><a href="update.php?id=<?php echo $post['id']; ?>" class ="btn btn-success float-end"  >UPDATE</a></td>
      <td><a href="delete.php?id=<?php echo $post['id']; ?>" class ="btn btn-danger float-end" >DELETE</a></td>
    </tr>

    <?php endforeach  ?>
  </tbody>
</table>
        </div>
    </div>
</div>

<?php include 'layout/footer.php'; ?>