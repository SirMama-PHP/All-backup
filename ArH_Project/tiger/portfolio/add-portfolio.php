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
      <h4> Add Portfolio</h4>
      </div>
      <!-- </div> -->

      <div class="card-body bg-light">
        <form action="portfolio-post.php" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <input type="text" name="portfolio_cetagory" class="form-control" placeholder="Portfolio Cetagory">
          </div>
          <div class="form-group">
            <input type="text" name="portfolio_name" class="form-control" placeholder="Portfolio Name">
          </div>


          <div class="form-group">
            <input type="file" name="portfolio_img" class="form-control">
          </div>

          <?php if (isset($_SESSION['portfolio'])) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <!-- Successfully Register! -->
              <?php echo $_SESSION['portfolio']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php }
          unset($_SESSION['portfolio']); ?>

          <div class="text-center">
            <button type="submit" class="btn btn-success" >Add Portfolio</button>
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
