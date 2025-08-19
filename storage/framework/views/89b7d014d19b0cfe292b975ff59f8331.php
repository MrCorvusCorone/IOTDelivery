<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
    <meta name="author" content="CodedThemes">

    <!-- [Favicon] icon -->
    <link rel="icon" href="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/images/favicon.svg')); ?>" type="image/x-icon"> <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
    
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/fonts/tabler-icons.min.css')); ?>" >
    
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/fonts/feather.css')); ?>" >
    
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/fonts/fontawesome.css')); ?>" >
    
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fontawesome-free-6.4.0/css/all.min.css')); ?>">

    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/fonts/material.css')); ?>" >
    
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/css/style.css')); ?>" id="main-style-link" >
    <link rel="stylesheet" href="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/css/style-preset.css')); ?>" >

    <!-- [Other] -->
    <?php echo $__env->yieldContent('headLibrary'); ?>
  </head><!-- [Head] end -->

  <!-- [Body] Start -->
  <body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div><!-- [ Pre-loader ] End -->

    <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="/home" class="b-brand text-primary">
                    <!-- ========   Change your logo from here   ============ -->
                    
                    <i class="fa-solid fa-truck me-2"></i>IOTDelivery
                </a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    <!-- [ Dashboard ] start -->
                    <li class="pc-item">
                        <a href="../dashboard/index.html" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
                            <span class="pc-mtext">Dashboard</span>
                        </a>
                    </li><!-- [ Dashboard ] end -->
                    
                    <!-- [ My Profile ] start -->
                    <li class="pc-item pc-caption">
                      <label>My Profile</label>
                      <i class="ti ti-brand-chrome"></i>
                    </li>
                    <li class="pc-item pc-hasmenu">
                      <a href="#!" class="pc-link">
                        <span class="pc-micon"><i class="fa-solid fa-user"></i></span>
                        <span class="pc-mtext">My Profile</span>
                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                      </a>
                      <ul class="pc-submenu">
                          <li class="pc-item"><a class="pc-link" href="#!">View Profile</a></li>
                          <li class="pc-item"><a class="pc-link" href="#!">Edit Profile</a></li>
                      </ul>
                    </li><!-- [ My Profile ] end -->
                    
                    <!-- [ Settings ] start -->
                    <li class="pc-item pc-caption">
                      <label>Settings and Configs</label>
                      <i class="ti ti-brand-chrome"></i>
                    </li>
                    <li class="pc-item pc-hasmenu">
                      <a href="#!" class="pc-link">
                        <span class="pc-micon"><i class="fa-solid fa-users-gear"></i></span>
                        <span class="pc-mtext">Users Settings</span>
                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                      </a>
                      <ul class="pc-submenu">
                          <li class="pc-item"><a class="pc-link" href="<?php echo e(route('userslist')); ?>">Users List</a></li>
                          <?php if(Auth::user()->user_role_id == 1): ?>
                            <li class="pc-item"><a class="pc-link" href="/usersrole">Users Role</a></li>
                          <?php endif; ?>
                      </ul>
                    </li><!-- [ Settings ] end -->
                </ul>
            </div>
        </div>
    </nav><!-- [ Sidebar Menu ] end -->

    <!-- [ Header Topbar ] start -->
    <header class="pc-header">
      <div class="header-wrapper"> 
        <!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
          <ul class="list-unstyled">
            <!-- ======= Menu collapse Icon ===== -->
            <li class="pc-h-item pc-sidebar-collapse">
              <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="pc-h-item pc-sidebar-popup">
              <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
        </div><!-- [Mobile Media Block end] -->
        <div class="ms-auto">
          <ul class="list-unstyled">
            <li class="dropdown pc-h-item">
              <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="ti ti-mail"></i>
              </a>
              <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                <div class="dropdown-header d-flex align-items-center justify-content-between">
                  <h5 class="m-0">Message</h5>
                  <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-x text-danger"></i></a>
                </div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
                  <div class="list-group list-group-flush w-100">
                    <a class="list-group-item list-group-item-action">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/images/user/avatar-2.jpg')); ?>" alt="user-image" class="user-avtar">
                        </div>
                        <div class="flex-grow-1 ms-1">
                          <span class="float-end text-muted">3:00 AM</span>
                          <p class="text-body mb-1">It's <b>Cristina danny's</b> birthday today.</p>
                          <span class="text-muted">2 min ago</span>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item list-group-item-action">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/images/user/avatar-1.jpg')); ?>" alt="user-image" class="user-avtar">
                        </div>
                        <div class="flex-grow-1 ms-1">
                          <span class="float-end text-muted">6:00 PM</span>
                          <p class="text-body mb-1"><b>Aida Burg</b> commented your post.</p>
                          <span class="text-muted">5 August</span>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item list-group-item-action">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/images/user/avatar-3.jpg')); ?>" alt="user-image" class="user-avtar">
                        </div>
                        <div class="flex-grow-1 ms-1">
                          <span class="float-end text-muted">2:45 PM</span>
                          <p class="text-body mb-1"><b>There was a failure to your setup.</b></p>
                          <span class="text-muted">7 hours ago</span>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item list-group-item-action">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/images/user/avatar-4.jpg')); ?>" alt="user-image" class="user-avtar">
                        </div>
                        <div class="flex-grow-1 ms-1">
                          <span class="float-end text-muted">9:10 PM</span>
                          <p class="text-body mb-1"><b>Cristina Danny </b> invited to join <b> Meeting.</b></p>
                          <span class="text-muted">Daily scrum meeting time</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="text-center py-2">
                  <a href="#!" class="link-primary">View all</a>
                </div>
              </div>
            </li>
            <li class="dropdown pc-h-item header-user-profile">
              <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
                <img src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/images/user/avatar-2.jpg')); ?>" alt="user-image" class="user-avtar">
                <span>Stebin Ben</span>
              </a>
              <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                <div class="dropdown-header">
                  <div class="d-flex mb-1">
                    <div class="flex-shrink-0">
                      <img src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/images/user/avatar-2.jpg')); ?>" alt="user-image" class="user-avtar wid-35">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-1">Stebin Ben</h6>
                      <span>UI/UX Designer</span>
                    </div>
                    <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-power text-danger"></i></a>
                  </div>
                </div>
                <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="drp-t1" data-bs-toggle="tab" data-bs-target="#drp-tab-1" type="button" role="tab" aria-controls="drp-tab-1" aria-selected="true">
                      <i class="ti ti-user"></i> Profile
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="drp-t2" data-bs-toggle="tab" data-bs-target="#drp-tab-2" type="button" role="tab" aria-controls="drp-tab-2" aria-selected="false">
                      <i class="ti ti-settings"></i> Setting
                    </button>
                  </li>
                </ul>
                <div class="tab-content" id="mysrpTabContent">
                  <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1" tabindex="0">
                    <a href="#!" class="dropdown-item">
                      <i class="ti ti-edit-circle"></i>
                      <span>Edit Profile</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ti ti-user"></i>
                      <span>View Profile</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ti ti-clipboard-list"></i>
                      <span>Social Profile</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ti ti-wallet"></i>
                      <span>Billing</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ti ti-power"></i>
                      <span>Logout</span>
                    </a>
                  </div>
                  <div class="tab-pane fade" id="drp-tab-2" role="tabpanel" aria-labelledby="drp-t2" tabindex="0">
                    <a href="#!" class="dropdown-item">
                      <i class="ti ti-help"></i>
                      <span>Support</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ti ti-user"></i>
                      <span>Account Settings</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ti ti-lock"></i>
                      <span>Privacy Center</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ti ti-messages"></i>
                      <span>Feedback</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ti ti-list"></i>
                      <span>History</span>
                    </a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </header><!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <?php echo $__env->yieldContent('mainContent'); ?>
    <!-- [ Main Content ] end -->
    
    <!-- [ Footer ] start -->
    <?php echo $__env->yieldContent('footer'); ?>
    <!-- [ Footer ] end -->

    
    <!-- [ JavaScript ] start -->
    <?php echo $__env->yieldContent('javascript'); ?>
    <!-- [ JavaScript ] end -->


    <!-- [Page Specific JS] start -->
    
    
    <!-- [Page Specific JS] end -->

    <!-- Required Js -->
    <script src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/js/plugins/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/js/plugins/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/js/plugins/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/js/fonts/custom-font.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/js/pcoded.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/templates/Mantis-Bootstrap-1.0.0/js/plugins/feather.min.js')); ?>"></script>

    <?php echo $__env->yieldContent('footerLibrary'); ?>

    <script>layout_change('light');</script>
      
    <script>change_box_container('false');</script>
      
    <script>layout_rtl_change('false');</script>
      
    <script>preset_change("preset-1");</script>
      
    <script>font_change("Public-Sans");</script>
  </body><!-- [Body] end -->
</html><?php /**PATH C:\Apache24\htdocs\My_Project\IOTDelivery\resources\views/templates/mantis.blade.php ENDPATH**/ ?>