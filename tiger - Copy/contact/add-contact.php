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
        Add Contact
      </div>
      <!-- </div> -->

      <div class="card-body bg-light">
        <form action="contact-post.php" method="POST">

          <div class="form-group">
            <input type="text" class="form-control"  name="contact_name" placeholder="Enter Contact name">
          </div>

          <div class="form-group">
            <input type="text" class="form-control"  name="contact_title" placeholder="Contact Title">
          </div>

          <div class="form-group">
            <input type="text" class="form-control"  name="address" placeholder="Enter Address">
          </div>

          <div class="form-group">
            <input type="text" class="form-control"  name="phone" placeholder="Enter Phone">
          </div>

          <div class="form-group">
            <input type="text" class="form-control"  name="email" placeholder="Enter Email">
          </div>

          <div class="form-group" >
            <textarea class="form-control" name="contact_desp" placeholder="Contact Discription" ></textarea>
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
            <button type="submit" class="btn btn-success" >Add Contact</button>
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
