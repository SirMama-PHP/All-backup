<?php
session_start();
include "../dashboard_includes/header.php";

include '../includes/db.php';

$select = "SELECT * FROM portfolio";
$query = mysqli_query($conn,$select);


// $assoc=mysqli_fetch_assoc($query);
?>


<section>
  <div class="container">

    <div class="col-lg-12 pt-5">
      <!-- <div class="card"> -->
      <div class="card-header text-center bg-success text-white ">
        <h4>All Portfolio</h4>
      </div>
      <div class="card-body">
        <table class="table">
          <tr>
            <th>ID</th>
            <th>Photos</th>
            <th>Portfolio Cetagory</th>
            <th>Portfolio Name </th>
            <th>ACTION </th>

          </tr>
          <?php foreach ($query as  $portfolio) { ?>
            <tr>
              <td><?php echo $portfolio['id']; ?></td>
              <td>  <img src="../uploads/portfolio/<?= $portfolio['portfolio_img'];  ?>" alt="images" width="80"></td>
              <td><?php echo $portfolio['portfolio_cetagory']; ?></td>
              <td><?php echo $portfolio['portfolio_name']; ?></td>
              <td><a href="del-portfolio.php?id=<?= $portfolio['id'];  ?>" class="btn btn-danger">Delete</a></td>
            </tr>
          <?php }; ?>
        </table>
      </div>
      <!-- </div> -->
    </div>
  </div>
</section>


<?php include "../dashboard_includes/footer.php"; ?>
