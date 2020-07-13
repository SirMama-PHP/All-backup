<?php
session_start();
include "../dashboard_includes/header.php";
require '../includes/db.php';
?>
<section>
  <div class="container">
    <!-- <div class="row"> -->
    <div class="col-lg-10 m-auto pt-5">
      <!-- <div  class="card"> -->
      <div class="card-header bg-success text-white">
        Add Your Patner Logo
      </div>
      <!-- </div> -->

      <div class="card-body bg-light">
        <form action="logo-post.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <input type="file" name="logo" class="form-control">
          </div>

          <?php if (isset($_SESSION['logo'])) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <!-- Successfully Register! -->
              <?php echo $_SESSION['logo']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php }
          unset($_SESSION['logo']); ?>

          <div class="text-center">
            <button type="submit" class="btn btn-success" >Add logo</button>
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
