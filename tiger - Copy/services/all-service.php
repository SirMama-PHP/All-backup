<?php
session_start();
include '../dashboard_includes/header.php';
include '../includes/db.php';

$select="SELECT * FROM service ";
$query=mysqli_query($conn,$select);


 ?>
<section>
  <div class="container">
    <!-- <di.v class="row"> -->
      <div class="col-lg-12">
          <div class="card col-lg-12">
            <div class="card-header bg-success text-white">
              All Services
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <th>ID</th>
                  <th>Service Icon</th>
                  <th>Service Title</th>
                  <th>Service Description</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
                <?php $serial=1; ?>
                <?php foreach ($query as  $service) { ?>
                <tr>
                  <td><?= $serial++; ?></td>
                  <td><i class="<?= $service['service_icon']?>"></i></td>
                  <td><?= $service['service_title'] ?></td>
                  <td><?= substr($service['service_desp'],0,50).'. . .' ?></td>
                  <td>
                  <button type="button" class="btn <?=($service['status']==1?'btn-success':'btn-secondary');?>">
                 <?php
                 if ($service['status']==1) { ?>
                   <a href="deactive-service.php?id=<?= $service['id']?> " class="text-white">Active</a>
                 <?php } else {?>
                 <a href="active-service.php?id=<?= $service['id']?>" class="text-white">Deactive</a>
                  <?php  } ?>
                  </button>

                  </td>
                  <td>
                    <a class="btn btn-danger" href="#">Delete</a>
                  </td>
                </tr>

              <?php } ?>
              </table>
            </div>
          </div>
      </div>
    <!-- </div> -->
  </div>
</section>
 <?php
include '../dashboard_includes/footer.php';
  ?>
