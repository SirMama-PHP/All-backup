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
      <h4>  Happy Clients Comment</h4>
      </div>
      <!-- </div> -->

      <div class="card-body bg-light">
        <form action="client-post.php" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <input type="text" name="client_dsp" class="form-control" placeholder="Client Description">
          </div>
          <div class="form-group">
            <input type="text" name="client_name" class="form-control" placeholder="Client Name">
          </div>
          <div class="form-group">
            <input type="text" name="client_title" class="form-control" placeholder="Client Designation">
          </div>

          <div class="form-group">
            <input type="file" name="img" class="form-control">
          </div>

          <?php if (isset($_SESSION['client'])) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <!-- Successfully Register! -->
              <?php echo $_SESSION['client']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php }
          unset($_SESSION['client']); ?>

          <div class="text-center">
            <button type="submit" class="btn btn-success" >Add Clients</button>
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
