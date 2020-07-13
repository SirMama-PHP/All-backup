  <?php
  session_start();
   include "../dashboard_includes/header.php";

  include '../includes/db.php';

  $select = "SELECT * FROM about";
  $query = mysqli_query($conn,$select);

  // $assoc=mysqli_fetch_assoc($query);
  ?>


  <section>
    <div class="container">

        <div class="col-lg-12 pt-5">
          <!-- <div class="card"> -->
            <div class="card-header text-center bg-success text-white ">
              <h4>All About</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                      <th>ID</th>
                      <th>Ed. Des.</th>
                      <th>Year</th>
                      <th>Ed. Title</th>
                      <th>Ed. Percentage </th>
                      <th>photo</th>

                    </tr>
                      <?php foreach ($query as  $user) { ?>
                    <tr>
                      <td><?php echo $user['id']; ?></td>
                      <td><?php echo substr($user['about_dsp'],0,20).'...more' ?></td>
                      <td><?php echo $user['ed_year']; ?></td>
                      <td><?php echo $user['ed_title']; ?></td>
                      <td><?php echo $user['ed_percentage']; ?></td>
                      <td><img src="../uploads/about/<?= $user['about_photo'];  ?>" alt="img" width="80"><td>

                    </tr>
                  <?php }; ?>
                </table>
            </div>
          <!-- </div> -->
        </div>
    </div>
  </section>


  <?php include "../dashboard_includes/footer.php"; ?>
