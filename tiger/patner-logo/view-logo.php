<?php
session_start();
 include "../dashboard_includes/header.php";

include '../includes/db.php';

$select = "SELECT * FROM our_patner";
$query = mysqli_query($conn,$select);

// $assoc=mysqli_fetch_assoc($query);
?>


<section>
  <div class="container">

      <div class="col-lg-12 pt-5">
        <!-- <div class="card"> -->
          <div class="card-header text-center bg-success text-white ">
            <h4>All Patner logo</h4>
          </div>
          <div class="card-body">
              <table class="table">
                  <tr>
                    <th>ID</th>

                    <th>LOGO</th>

                  </tr>
                    <?php foreach ($query as  $user) { ?>
                  <tr>
                    <td><?php echo $user['id']; ?></td>

                    <td><img src="../uploads/logo/<?= $user['logo'];  ?>" alt="img" width="80"><td>

                  </tr>
                <?php }; ?>
              </table>
          </div>
        <!-- </div> -->
      </div>
  </div>
</section>


<?php include "../dashboard_includes/footer.php"; ?>
