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
        Add Service
      </div>
      <!-- </div> -->

      <div class="card-body bg-light">
        <form action="service-post.php" method="POST">

          <div class="form-group">
            <input type="text" class="form-control"  name="service-icon" placeholder="Service icon class">
          </div>

          <div class="form-group">
            <input type="text" class="form-control"  name="service-title" placeholder="Enter Srervice Title">
          </div>

          <div class="form-group" >
            <textarea class="form-control" name="service-desp" placeholder="Service Discription" ></textarea>
          </div>
          <div class="form-group">
            <select class="form-control" name="status">
              <option  value="0">Deactive</option>
              <option value="1">Active</option>
            </select>
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
            <button type="submit" class="btn btn-success" >Add Service</button>
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
