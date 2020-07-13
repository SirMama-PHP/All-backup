<?php
session_start();
include "../dashboard_includes/header.php";
require '../includes/db.php';
$id =  $_GET['id'];
$sql="SELECT * FROM users WHERE id=$id ";
$query=mysqli_query($conn,$sql);
$assoc=mysqli_fetch_assoc($query);
?>
<section>
  <div class="container">
    <!-- <div class="row"> -->
      <div class="col-lg-12">
        <!-- <div class="card"> -->
          <div class="card-header bg-success text-white">
            Update User Information
          </div>
        <!-- </div> -->

        <div class="card-body bg-light">
          <form action="update-user.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
              <input type="hidden" value="<?= $assoc['id'] ?>" class="form-control" id="Name" name="id" placeholder="Full Name" >
              <input type="text" value="<?= $assoc['name'] ?>" class="form-control" id="Name" name="name" placeholder="Full Name" >
            </div>

            <div class="form-group">
              <input type="email"value="<?= $assoc['email'] ?>" class="form-control" id="Email" name="email" placeholder="Enter Email">

              <?php if (isset($_SESSION['duplicate'])) { ?>

                <div class="mt-2 alert alert-warning alert-dismissible fade show" role="alert">
                  Email Address Alrady Exist!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php }  unset($_SESSION['duplicate']);?>
            </div>

            <div class="form-group">
              <input type="file" name="user-photo" >
              <h3>Present Photo</h3>
              <img src="../uploads/users/<?=$assoc['users_photo']; ?>" alt="img" width="200">
            </div>


            <?php if (isset($_SESSION['register'])) { ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <!-- Successfully Register! -->
                <?php echo $_SESSION['register']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php }
            unset($_SESSION['register']); ?>
            <div class="text-center">
              <button type="submit" class="btn btn-success  " >Update</button>
            </div>
          </form>
        </div>

      </div>
    <!-- </div> -->
  </div>
</section>
<script>
function fun() {
  var x = document.getElementById("show");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<?php
include "../dashboard_includes/footer.php";
?>
