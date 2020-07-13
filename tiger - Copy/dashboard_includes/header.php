  <?php
  include '../includes/db.php';
   ?>
  <!doctype html>
  <html lang="en">

  <!-- Mirrored from coderthemes.com/highdmin/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:51:24 GMT -->
  <head>
          <meta charset="utf-8" />
          <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
          <meta content="Coderthemes" name="author" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />

          <!-- App favicon -->
          <link rel="shortcut icon" href="/tiger/dashboard_asset/images/favicon.ico">

          <!-- App css -->
          <link href="/tiger/dashboard_asset/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
          <link href="/tiger/dashboard_asset/css/icons.css" rel="stylesheet" type="text/css" />
          <link href="/tiger/dashboard_asset/css/metismenu.min.css" rel="stylesheet" type="text/css" />
          <link href="/tiger/dashboard_asset/css/style.css" rel="stylesheet" type="text/css" />
          <script src="/tiger/dashboard_asset/js/modernizr.min.js"></script>
          <link rel="stylesheet" href="/tiger/css/fontawesome-all.min.css">

      </head>


      <body>

          <!-- Begin page -->
          <div id="wrapper">

              <!-- ========== Left Sidebar Start ========== -->
              <div class="left side-menu">

                  <div class="slimscroll-menu" id="remove-scroll">

                      <!-- LOGO -->
                      <div class="topbar-left">
                          <a href="index.html" class="logo">
                              <span>
                                  <img src="/tiger/dashboard_asset/images/logo.png" alt="" height="22">
                              </span>
                              <i>
                                  <img src="/tiger/dashboard_asset/images/logo_sm.png" alt="" height="28">
                              </i>
                          </a>
                      </div>

                      <!-- User box -->
                      <div class="user-box">
                          <div class="user-img">
                              <img src="/tiger/uploads/users/<?= $_SESSION['users_photo']?>" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                          </div>
                          <h5><a href="#"><?= $_SESSION['name']; ?> </a> </h5>
                          <p class="text-muted"><?= $_SESSION['email']; ?> </p>
                          <p>
                            <?php
                            if($_SESSION['role']==1){
                              echo "Admin";
                            }
                            elseif ($_SESSION['role']==2) {
                              echo "Modarator";
                            }
                            elseif ($_SESSION['role']==3) {
                              echo "Editor";
                            }
                            else {
                              echo "Not pawer";
                            }
                             ?>
                          </p>
                      </div>

                      <!--- Sidemenu -->
                      <div id="sidebar-menu">

                          <ul class="metismenu" id="side-menu">

                              <!--<li class="menu-title">Navigation</li>-->

                              <li>
                                  <a href="index.html">
                                      <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right">7</span> <span> Dashboard </span>
                                  </a>
                              </li>

                              <li>
                                  <a href="javascript: void(0);"><i class="fi-layers"></i> <span>Users </span> <span class="menu-arrow"></span></a>
                                  <ul class="nav-second-level" aria-expanded="false">
                                      <li><a href="/tiger/auth/register.php">Add New User</a></li>
                                      <li><a href="/tiger/auth/all-users.php">View Users</a></li>

                                  </ul>
                              </li>
                              <li>
                                  <a href="javascript: void(0);"><i class="fa fa-handshake-o"></i><span> Service </span> <span class="menu-arrow"></span></a>
                                  <ul class="nav-second-level" aria-expanded="false">
                                      <li><a href="/tiger/services/add-service.php">Add Service</a></li>
                                      <li><a href="/tiger/services/all-service.php">View Service</a></li>
                                  </ul>
                              </li>

                              <li>
                                  <a href="javascript: void(0);"><i class="fi-mail"></i><span> Messages </span> <span class="menu-arrow"></span></a>
                                  <ul class="nav-second-level" aria-expanded="false">
                                      <li><a href="/tiger/messages/all-messages.php">All Message</a></li>
                                      <li><a href="/tiger/messages/trash.php">Trash</a></li>

                                  </ul>
                              </li>
                              <li>
                                  <a href="javascript: void(0);"><i class="fi-box"></i><span>Banner</span> <span class="menu-arrow"></span></a>
                                  <ul class="nav-second-level" aria-expanded="false">
                                      <li><a href="/tiger/banner/add-banner.php">Add Banner</a></li>
                                      <li><a href="/tiger/banner/all-banner.php">View Banner</a></li>
                                  </ul>
                              </li>

                              <li>
                                  <a href="javascript: void(0);"><i class="fi-paper"></i> <span>Contact </span> <span class="menu-arrow"></span></a>
                                  <ul class="nav-second-level" aria-expanded="false">
                                      <li><a href="/tiger/contact/add-contact.php">Add Contact</a></li>
                                      <li><a href="/tiger/contact/all-contact.php">View Contact</a></li>
                                  </ul>
                              </li>

                              <li>
                                  <a href="javascript: void(0);"><i class="fi-location-2"></i> <span> Maps </span> <span class="menu-arrow"></span></a>
                                  <ul class="nav-second-level" aria-expanded="false">
                                      <li><a href="maps-google.html">Google Maps</a></li>
                                      <li><a href="maps-vector.html">Vector Maps</a></li>
                                      <li><a href="maps-mapael.html">Mapael Maps</a></li>
                                  </ul>
                              </li>

                              <li>
                                  <a href="javascript: void(0);"><i class="fi-paper-stack"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                                  <ul class="nav-second-level" aria-expanded="false">
                                      <li><a href="page-starter.html">Starter Page</a></li>
                                      <li><a href="page-login.html">Login</a></li>
                                      <li><a href="page-register.html">Register</a></li>
                                      <li><a href="page-logout.html">Logout</a></li>
                                      <li><a href="page-recoverpw.html">Recover Password</a></li>
                                      <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                      <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                      <li><a href="page-404.html">Error 404</a></li>
                                      <li><a href="page-404-alt.html">Error 404-alt</a></li>
                                      <li><a href="page-500.html">Error 500</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                      <!-- Sidebar -->
                      <div class="clearfix"></div>
                  </div>
                  <!-- Sidebar -left -->
              </div>


              <!-- Left Sidebar End -->



              <!-- ============================================================== -->
              <!-- Start right Content here -->
              <!-- ============================================================== -->

              <div class="content-page">
                  <!-- Top Bar Start -->
                  <div class="topbar">
                      <nav class="navbar-custom">
                          <ul class="list-unstyled topbar-right-menu float-right mb-0">
                              <li class="hide-phone app-search">
                                  <form>
                                      <input type="text" placeholder="Search..." class="form-control">
                                      <button type="submit"><i class="fa fa-search"></i></button>
                                  </form>
                              </li>
                              <li class="dropdown notification-list">
                                  <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                     aria-haspopup="false" aria-expanded="false">
                                      <i class="fi-bell noti-icon"></i>
                                      <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                      <!-- item-->
                                      <div class="dropdown-item noti-title">
                                          <h5 class="m-0"><span class="float-right"><a href="#" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                                      </div>

                                      <div class="slimscroll" style="max-height: 230px;">
                                          <!-- item-->
                                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                                              <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                              <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                          </a>

                                          <!-- item-->
                                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                                              <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                              <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                          </a>

                                          <!-- item-->
                                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                                              <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                              <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                          </a>

                                          <!-- item-->
                                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                                              <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                              <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                          </a>

                                          <!-- item-->
                                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                                              <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                              <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                          </a>

                                          <!-- item-->
                                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                                              <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                              <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                          </a>
                                      </div>
                                      <!-- All-->
                                      <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                          View all <i class="fi-arrow-right"></i>
                                      </a>
                                  </div>
                              </li>
                              <li class="dropdown notification-list">
                                  <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                     aria-haspopup="false" aria-expanded="false">
                                      <i class="fi-speech-bubble noti-icon"></i>
                                      <?php
                                      $totle_unread = "SELECT COUNT(*) as total FROM massages WHERE status=0";
                                      $query = mysqli_query($conn,$totle_unread);
                                      $assoc = mysqli_fetch_assoc($query);
                                      ?>
                                      <span class="badge badge-custom badge-pill noti-icon-badge"><?= $assoc['total']; ?></span>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">


                                      <!-- item-->
                                      <div class="dropdown-item noti-title">
                                          <h5 class="m-0"><span class="float-right"><a href="#" class="text-dark"><small>Clear All</small></a> </span>Chat</h5>
                                      </div>

                                      <div class="slimscroll" style="max-height: 230px;">

                                        <?php
                                        $totle_unread2 = "SELECT * FROM massages WHERE status=0";
                                        $query2 = mysqli_query($conn,$totle_unread2);
                                         ?>
                                          <!-- item-->
                                          <?php foreach ($query2 as $unread_msg) { ?>
                                          <a href="#" class="dropdown-item notify-item">
                                              <p class="notify-details"><?= $unread_msg['name']?></p>
                                              <p class="text-muted font-13 mb-0 user-msg"><?=substr($unread_msg['massage'],0,15);  ?></p>
                                          </a>
                                        <?php }; ?>

                                      </div>
                                      <!-- All-->
                                      <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                          View all <i class="fi-arrow-right"></i>
                                      </a>
                                  </div>
                              </li>
                              <li class="dropdown notification-list">
                                  <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                     aria-haspopup="false" aria-expanded="false">
                                      <img src="/tiger/uploads/users/<?= $_SESSION['users_photo']?>" alt="user" class="rounded-circle"> <span class="ml-1"><?= $_SESSION['name']?> <i class="mdi mdi-chevron-down"></i></span>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                      <!-- item-->
                                      <div class="dropdown-item noti-title">
                                          <h6 class="text-overflow m-0">Welcome !</h6>
                                      </div>
                                      <!-- item-->
                                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                                          <i class="fi-head"></i> <span>My Account</span>
                                      </a>
                                      <!-- item-->
                                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                                          <i class="fi-cog"></i> <span>Settings</span>
                                      </a>
                                      <!-- item-->
                                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                                          <i class="fi-help"></i> <span>Support</span>
                                      </a>
                                      <!-- item-->
                                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                                          <i class="fi-lock"></i> <span>Lock Screen</span>
                                      </a>
                                      <!-- item-->
                                      <a href="/tiger/auth/logout.php" class="dropdown-item notify-item">
                                          <i class="fi-power"></i> <span>Logout</span>
                                      </a>
                                  </div>
                              </li>
                          </ul>

                          <ul class="list-inline menu-left mb-0">
                              <li class="float-left">
                                  <button class="button-menu-mobile open-left disable-btn">
                                      <i class="dripicons-menu"></i>
                                  </button>
                              </li>
                              <li>
                                  <div class="page-title-box">
                                      <h4 class="page-title">Dashboard </h4>
                                      <ol class="breadcrumb">
                                          <li class="breadcrumb-item active">Welcome to <?= $_SESSION['name']?> admin panel !</li>
                                      </ol>
                                  </div>
                              </li>
                          </ul>
                      </nav>
                  </div>
                  <!-- Top Bar End -->
