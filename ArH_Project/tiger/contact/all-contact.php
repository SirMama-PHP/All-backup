<?php
session_start();
include '../dashboard_includes/header.php';
include '../includes/db.php';

$select="SELECT * FROM contact ";
$query=mysqli_query($conn,$select);


 ?>
<section>
  <div class="container">
    <!-- <di.v class="row"> -->
      <div class="col-lg-12">
          <div class="card col-lg-12">
            <div class="card-header bg-success text-white">
              All Contact
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <th>ID</th>
                  <th>Contact Name</th>
                  <th>Contact Title</th>
                  <th>Contact Desp.</th>
                  <th>Adress</th>
                  <th>Phone</th>
                  <th>Email</th>
                </tr>
                <?php $serial=1; ?>
                <?php foreach ($query as  $contact) { ?>
                <tr>
                  <td><?= $serial++; ?></td>
                  <td><?= $contact['contact_name'] ?></td>
                  <td><?= $contact['contact_title'] ?></td>
                  <td><?= substr($contact['contact_desp'],0,50).'. . .' ?></td>
                    <td><?= $contact['address'] ?></td>
                    <td><?= $contact['phone'] ?></td>
                    <td><?= $contact['email'] ?></td>

                  <td>
                    <a class="btn btn-danger" href="del-contact.php?id=<?= $contact['id']?>">Delete</a>
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
