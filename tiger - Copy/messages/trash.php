  <?php
  session_start();
   include "../dashboard_includes/header.php";

  include '../includes/db.php';

  $select = "SELECT * FROM massages WHERE status=2";
  $query = mysqli_query($conn,$select);

  // $assoc=mysqli_fetch_assoc($query);
  ?>


  <section>
    <div class="container">

        <div class="col-lg-12 pt-5">
          <!-- <div class="card"> -->
            <div class="card-header text-center bg-success text-white ">
              <h4>Trash Message</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                      <th>ID</th>
                      <th>NAME</th>
                      <th>EMAIL</th>
                      <th>MESSAGE</th>
                      <th>ACTION</th>
                    </tr>
                      <?php foreach ($query as  $message) { ?>
                    <tr class="<?=($message['status']==0)?'bg-warning':''; ?>">
                      <td><?php echo $message['id']; ?></td>
                      <td><?php echo $message['name']; ?></td>
                      <td><?php echo $message['email']; ?></td>
                      <td><?= substr( $message['massage'],0,40).'...more';?></td>
                      <td>
                        <a href="change-status.php?id=<?= $message['id'];?>" class="btn btn-info">Undo</a>
                        <a href="del-message.php?id=<?= $message['id'];?>" class="btn btn-danger">Delete</a>
                      <?php } ?>
                      </td>
                    </tr>

                </table>
            </div>
          <!-- </div> -->
        </div>
    </div>
  </section>

  <?php include "../dashboard_includes/footer.php"; ?>
