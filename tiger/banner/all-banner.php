<?php
session_start();
include '../dashboard_includes/header.php';
include '../includes/db.php';

$select="SELECT * FROM banner ";
$query=mysqli_query($conn,$select);


 ?>
<section>
  <div class="container">
    <!-- <di.v class="row"> -->
      <div class="col-lg-12">
          <div class="card col-lg-12">
            <div class="card-header bg-success text-white">
              All Banner
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <th>ID</th>
                  <th>Banner Icon</th>
                  <th>Banner Title</th>
                  <th>Banner Name</th>
                  <th>Banner Description</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
                <?php $serial=1; ?>
                <?php foreach ($query as  $banner) { ?>
                <tr>
                  <td><?= $serial++; ?></td>
                  <td><i class="<?= $banner['banner_icon']?>"></i></td>
                  <td><?= $banner['banner_title'] ?></td>
                  <td><?= $banner['banner_name'] ?></td>
                  <td><?= substr($banner['banner_dsp'],0,50).'. . .' ?></td>
                  <td>
                  <button type="button" class="btn <?=($banner['status']==1?'btn-success':'btn-secondary');?>">
                 <?php
                 if ($banner['status']==1) { ?>
                   <a href="deactive-banner.php?id=<?= $banner['id']?> " class="text-white">Active</a>
                 <?php } else {?>
                 <a href="active-banner.php?id=<?= $banner['id']?>" class="text-white">Deactive</a>
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
