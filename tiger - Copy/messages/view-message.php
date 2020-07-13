<?php
session_start();
 include "../dashboard_includes/header.php";
 include '../includes/db.php';
$id = $_GET['id'];
$select = "SELECT * FROM massages WHERE id=$id";
$query = mysqli_query($conn,$select);
$assoc=mysqli_fetch_assoc($query);

if ($assoc['status']==0) {
  $update = "UPDATE massages SET status=1 WHERE id=$id";
  $update_result=mysqli_query($conn,$update);
}
?>

<section>
  <div class="container">
    <!-- <div class="row"> -->
      <div class="col-lg-12 ">
        <!-- <div class="card"> -->
          <div class="card-header text-center bg-success text-white ">
            <h4>Individual Message</h4>
          </div>
          <div class="card-body">
              <table  class="table table-bordered table-dark">
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
                <th>MESSAGE</th>
                <td><?= $assoc['massage']; ?></td>
              </tr>


              </table>

          </div>
        <!-- </div> -->
      </div>
    <!-- </div> -->
  </div>
</section>

<?php  include "../dashboard_includes/footer.php"; ?>
