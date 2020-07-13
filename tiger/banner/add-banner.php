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
        Add banner
      </div>
      <!-- </div> -->

      <div class="card-body bg-light">
        <form action="banner-post.php" method="POST">

          <div class="form-group">
            <input type="text" class="form-control"  name="banner_title" placeholder="Banner Title">
          </div>

          <div class="form-group">
            <input type="text" class="form-control"  name="banner_name" placeholder="Enter Banner name">
          </div>

          <div class="form-group" >
            <textarea class="form-control" name="banner_dsp" placeholder="Banner Discription" ></textarea>
          </div>

          <div class="form-group">
            <input type="text" class="form-control"  name="banner_icon" placeholder="Enter Banner icon">
          </div>

          <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <!-- Successfully Register! -->
              <?php echo $_SESSION['success']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php }
          unset($_SESSION['success']); ?>

          <div class="text-center">
            <button type="submit" class="btn btn-success" >Add Banner</button>
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
