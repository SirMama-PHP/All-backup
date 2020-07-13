<?php
session_start();
 include "../dashboard_includes/header.php";

include '../includes/db.php';

$select = "SELECT * FROM clients_quotes";
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
                    <th>Photos</th>
                    <th>Client_dsp </th>
                    <th>Client Name </th>
                    <th>Client Title</th>

                  </tr>
                    <?php foreach ($query as  $client) { ?>
                  <tr>
                    <td><?php echo $client['id']; ?></td>
                      <td>  <img src="../uploads/client/<?= $client['img'];  ?>" alt="images" width="80"></td>
                    <td><?php echo $client['client_dsp']; ?></td>
                      <td><?php echo $client['client_name']; ?></td>
                      <td><?php echo $client['client_title']; ?></td>
                  </tr>
                <?php }; ?>
              </table>
          </div>
        <!-- </div> -->
      </div>
  </div>
</section>


<?php include "../dashboard_includes/footer.php"; ?>
