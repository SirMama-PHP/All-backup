
            <?php
            session_start();

             include 'dashboard_includes/header.php' ?>

                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Welcome to Dashboard Mr/Mrs <strong><?= $_SESSION['name']; ?></strong></h4>

                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->

                </div> <!-- content -->
      <?php include 'dashboard_includes/footer.php' ?>
