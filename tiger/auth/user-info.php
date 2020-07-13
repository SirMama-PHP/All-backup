<?php
session_start();
 include "../dashboard_includes/header.php";
 include '../includes/db.php';
$id = $_GET['id'];
$select = "SELECT * FROM users WHERE id=$id";
$query = mysqli_query($conn,$select);

$assoc=mysqli_fetch_assoc($query);
?>

<section>
  <div class="container">
    <!-- <div class="row"> -->
      <div class="col-lg-12 ">
        <!-- <div class="card"> -->
          <div class="card-header text-center bg-success text-white ">
            <h4>User Information</h4>
          </div>
          <div class="card-body">
              <table class="table">
              <tr>
                <th>ID</th>
                <td><?=  $assoc['id']; ?></td>
              </tr>
              <tr>
                <th>NAME</th>
                <td><?= $assoc['name']; ?></th>
              </tr>
              <tr>
                <th>EMAIL</th>
                <td><?= $assoc['email']; ?></td>
              </tr>
              <tr>
                <th>PASSWORD</th>
                <td><?= $assoc['password']; ?></td>
              </tr>
              <tr>
                <th>User Photo</th>
                <td><?= $assoc['users_photo']; ?></td>
                <td>  <img src="../uploads/users/<?= $assoc['users_photo'];  ?>" alt="img" width="150"></td>
              </tr>

              </table>

          </div>
        <!-- </div> -->
      </div>
    <!-- </div> -->
  </div>
</section>

<?php  include "../dashboard_includes/footer.php"; ?>
