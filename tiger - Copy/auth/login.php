<?php
session_start();

require '../includes/header.php';
?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="card">
          <div class="card-header bg-success text-white">
            Login
          </div>
        </div>

        <div class="card-body bg-light">
          <form action="login-post.php" method="POST">


            <div class="form-group">
              <input type="email" class="form-control" id="Email" name="email" placeholder="Enter Email">
              <?php if (isset($_SESSION['duplicate'])) { ?>
                <div class="mt-2 alert alert-warning alert-dismissible fade show" role="alert">
                  Email Address Alrady Exist!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php }  unset($_SESSION['duplicate']);?>
            </div>
            <div class="form-group" style="position:relative;">
              <input type="password" class="form-control" id="show" name="password" placeholder="Enter Password">

              <button class="btn btn-warning" style="position:absolute;top:0;right:0;" type="button"onclick="fun()" >
                <i class="fa fa-eye" aria-hidden="true"></i>

              </button>

            </div>
            <!-- <div class="form-group">
            <input type="password" class="form-control" id="Password" name="re_password" placeholder="Enter Re-Password">
          </div> -->
          <?php if (isset($_SESSION['login_err'])) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <!-- Successfully Register! -->
              <?php echo $_SESSION['login_err']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php }
          unset($_SESSION['register']); ?>
          <div class="text-center">
            <button type="submit" class="btn btn-success  " >Submit</button>
          </div>
        </form>
      </div>

    </div>
  </div>
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
require '../includes/footer.php';
?>
