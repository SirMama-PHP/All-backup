  <?php
  session_start();
   include "../dashboard_includes/header.php";

  include '../includes/db.php';

  $select = "SELECT * FROM users";
  $query = mysqli_query($conn,$select);

  // $assoc=mysqli_fetch_assoc($query);
  ?>

  <?php if ($_SESSION['role']!=0) {?>
  <section>
    <div class="container">

        <div class="col-lg-12 pt-5">
          <!-- <div class="card"> -->
            <div class="card-header text-center bg-success text-white ">
              <h4>All Users Information</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                      <th>ID</th>
                      <th>NAME</th>
                      <th>EMAIL</th>
                      <th>PASSWORD</th>
                      <th>Photo</th>
                      <th>ROLE</th>
                      <th>ACTION</th>
                    </tr>
                      <?php foreach ($query as  $user) { ?>
                    <tr>
                      <td><?php echo $user['id']; ?></td>
                      <td><?php echo $user['name']; ?></td>
                      <td><?php echo $user['email']; ?></td>
                      <td>*****</td>
                      <td>
                        <img src="../uploads/users/<?= $user['users_photo'];  ?>" alt="img" width="80">
                      </td>
                      <td><?php
                      if($user['role']==1){
                        echo "Admin";
                      }
                      elseif ($user['role']==2) {
                        echo "Modarator";
                      }
                      elseif ($user['role']==3) {
                        echo "Editor";
                      }
                      else {
                        echo "Not power";
                      }

                       ?></td>
                      <td>
                        <a href="user-info.php?id=<?= $user['id'];  ?>" class="btn btn-info">View</a>
                            <?php if ($_SESSION['role']!=3 && $_SESSION['role']!=0 ) { ?>
                        <a href="edit-user.php?id=<?= $user['id'];  ?>" class="btn btn-warning">Edit</a>
                            <?php } ?>
                        <?php if ($_SESSION['role']==1) { ?>
                        <a href="delete-user.php?id=<?= $user['id'];  ?>" class="btn btn-danger">Delete</a>
                      <?php } ?>
                      </td>
                    </tr>
                  <?php }; ?>
                </table>
            </div>
          <!-- </div> -->
        </div>
    </div>
  </section>
  <?php }
  else {
    echo "<h1>Vai tumar parmition ni</h1>";
  } ?>

  <?php include "../dashboard_includes/footer.php"; ?>
