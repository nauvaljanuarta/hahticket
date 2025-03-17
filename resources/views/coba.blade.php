<<<<<<< HEAD
<!doctype html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Demo : Without menu - Layouts | sneat - Bootstrap Dashboard PRO</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
      <div class="layout-container">
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search bx-md"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none ps-1 ps-sm-2"
                    placeholder="Search..."
                    aria-label="Search..." />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-4">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">John Doe</h6>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user bx-md me-3"></i><span>My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"> <i class="bx bx-cog bx-md me-3"></i><span>Settings</span> </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card bx-md me-3"></i
                          ><span class="flex-grow-1 align-middle">Billing Plan</span>
                          <span class="flex-shrink-0 badge rounded-pill bg-danger">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">
                        <i class="bx bx-power-off bx-md me-3"></i><span>Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Layout Demo -->
              <div class="layout-demo-wrapper">
                <div class="layout-demo-placeholder">
                  <img
                    src="../assets/img/layouts/layout-without-menu-light.png"
                    class="img-fluid"
                    alt="Layout without menu"
                    data-app-light-img="layouts/layout-without-menu-light.png"
                    data-app-dark-img="layouts/layout-without-menu-dark.png" />
                </div>
                <div class="layout-demo-info">
                  <h4>Layout without Menu (Navigation)</h4>
                  <button class="btn btn-primary" type="button" onclick="history.back()">Go Back</button>
                </div>
              </div>
              <!--/ Layout Demo -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                  <div class="text-body">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by
                    <a href="https://themeselection.com" target="_blank" class="footer-link">ThemeSelection</a>
                  </div>
                  <div class="d-none d-lg-inline-block">
                    <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                    <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                    <a
                      href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a
                      href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                      target="_blank"
                      class="footer-link"
                      >Support</a
                    >
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
      <a
        href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
=======
<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Favicon icon-->
<link
  rel="shortcut icon"
  type="image/png"
  href="../assets/images/logos/favicon.png"
/>

<!-- Core Css -->
<link rel="stylesheet" href="../assets/css/styles.css" />

  <title>Spike Bootstrap Admin</title>
  <!-- jvectormap  -->
  <link rel="stylesheet" href="../assets/libs/jvectormap/jquery-jvectormap.css">
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="../assets/images/logos/loader.svg" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    <!-- Sidebar Start -->
    <aside class="left-sidebar with-vertical">
      <!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->
<div class="brand-logo d-flex align-items-center justify-content-between">
  <a href="../dark/index.html" class="text-nowrap logo-img">
    <img src="../assets/images/logos/logo-light.svg" class="dark-logo" alt="Logo-Dark" />
    <img src="../assets/images/logos/logo-dark.svg" class="light-logo" alt="Logo-light" />
  </a>
  <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
    <i class="ti ti-x"></i>
  </a>
</div>

<div class="scroll-sidebar" data-simplebar>
  <!-- Sidebar navigation-->
  <nav class="sidebar-nav">
    <ul id="sidebarnav" class="mb-0">

      <!-- ============================= -->
      <!-- Home -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">Home</span>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link primary-hover-bg" href="../dark/index.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-primary-subtle rounded-1">
            <iconify-icon icon="solar:screencast-2-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Dashboard</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link success-hover-bg" href="../dark/index2.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-success-subtle rounded-1">
            <iconify-icon icon="solar:chart-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Dashboard 2</span>
        </a>
      </li>

      <!-- ============================= -->
      <!-- Apps -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">Apps</span>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow success-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-success-subtle rounded-1">
            <iconify-icon icon="solar:smart-speaker-minimalistic-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Ecommerce</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/eco-shop.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Shop One</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/eco-shop2.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Shop Two</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/eco-shop-detail.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Details One</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/eco-shop-detail2.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Details Two</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/eco-product-list.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">List</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/eco-checkout.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Checkout</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link has-arrow warning-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-warning-subtle rounded-1">
            <iconify-icon icon="solar:pie-chart-3-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Blog</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/blog-posts.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Posts</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/blog-detail.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Details</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link has-arrow danger-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-danger-subtle rounded-1">
            <iconify-icon icon="solar:user-circle-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">User Profile</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/page-user-profile.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Profile One</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/page-user-profile2.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Profile Two</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link indigo-hover-bg" href="../dark/app-email.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
            <iconify-icon icon="solar:mailbox-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Email</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link info-hover-bg" href="../dark/app-calendar.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-info-subtle rounded-1">
            <iconify-icon icon="solar:calendar-add-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Calendar</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link success-hover-bg" href="../dark/app-kanban.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-success-subtle rounded-1">
            <iconify-icon icon="solar:window-frame-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">kanban</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link primary-hover-bg" href="../dark/app-chat.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-primary-subtle rounded-1">
            <iconify-icon icon="solar:chat-round-unread-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Chat</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link secondary-hover-bg" href="../dark/app-notes.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
            <iconify-icon icon="solar:notification-unread-lines-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Notes</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link success-hover-bg" href="../dark/app-contact.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-success-subtle rounded-1">
            <iconify-icon icon="solar:phone-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Contact Table</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link warning-hover-bg" href="../dark/app-contact2.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-warning-subtle rounded-1">
            <iconify-icon icon="solar:list-check-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Contact List</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link danger-hover-bg" href="../dark/app-invoice.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-danger-subtle rounded-1">
            <iconify-icon icon="solar:file-text-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Invoice</span>
        </a>
      </li>


      <!-- ============================= -->
      <!-- Pages -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">Pages</span>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link indigo-hover-bg" href="../dark/page-pricing.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
            <iconify-icon icon="solar:dollar-minimalistic-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Pricing</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link info-hover-bg" href="../dark/page-faq.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-info-subtle rounded-1">
            <iconify-icon icon="solar:question-circle-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">FAQ</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link primary-hover-bg" href="../dark/page-account-settings.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-primary-subtle rounded-1">
            <iconify-icon icon="solar:user-circle-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Account Setting</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link danger-hover-bg" href="../landingpage/index.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-danger-subtle rounded-1">
            <iconify-icon icon="solar:window-frame-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Landing Page</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow secondary-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
            <iconify-icon icon="solar:widget-4-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Widgets</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/widgets-cards.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Cards</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/widgets-banners.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Banner</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/widgets-charts.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Charts</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/widgets-feeds.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Feed Widgets</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/widgets-apps.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Apps Widgets</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/widgets-data.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Data Widgets</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- ============================= -->
      <!-- SchoolPages -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">SchoolPages</span>
      </li>

      <!-- =================== -->
      <!-- Teachers -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow success-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-success-subtle rounded-1">
            <iconify-icon icon="solar:lightbulb-bolt-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Teachers</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/all-teacher.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">All Teachers</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/teacher-details.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu"> Teachers Details</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- =================== -->
      <!-- Exam -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow warning-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-warning-subtle rounded-1">
            <iconify-icon icon="solar:file-text-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Exam</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/exam-schedule.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Exam Schedule</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/exam-result.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu"> Exam Result</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/exam-result-details.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu"> Exam Result Details</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- =================== -->
      <!-- Students -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow danger-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-danger-subtle rounded-1">
            <iconify-icon icon="solar:square-academic-cap-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Students</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/all-student.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">All Students</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/student-details.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu"> Students Details</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- =================== -->
      <!-- Classes -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link indigo-hover-bg my-3" href="../dark/classes.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
            <iconify-icon icon="solar:planet-3-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Classes</span>
        </a>
      </li>

      <!-- =================== -->
      <!-- Attendance -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link info-hover-bg" href="../dark/attendance.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-info-subtle rounded-1">
            <iconify-icon icon="solar:file-check-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Attendance</span>
        </a>
      </li>

      <!-- ============================= -->
      <!-- UI -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">UI</span>
      </li>

      <!-- =================== -->
      <!-- UI Elements -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow primary-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-primary-subtle rounded-1">
            <iconify-icon icon="solar:cpu-bolt-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">UI Elements</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/ui-accordian.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Accordian</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-badge.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Badge</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-buttons.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Buttons</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-dropdowns.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Dropdowns</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-modals.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Modals</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-tab.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Tab</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-tooltip-popover.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Tooltip & Popover</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-notification.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Notification</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-progressbar.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Progressbar</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-pagination.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Pagination</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-typography.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Typography</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-bootstrap-ui.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Bootstrap UI</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-breadcrumb.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Breadcrumb</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-offcanvas.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Offcanvas</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-lists.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Lists</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-grid.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Grid</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-carousel.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Carousel</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-scrollspy.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Scrollspy</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-spinner.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Spinner</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/ui-link.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Link</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- =================== -->
      <!-- Cards -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow secondary-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
            <iconify-icon icon="solar:document-text-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Cards</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/ui-cards.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Basic Cards</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-card-customs.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Custom Cards</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-card-weather.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Weather Cards</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-card-draggable.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Draggable Cards</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- =================== -->
      <!-- Components -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow success-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-success-subtle rounded-1">
            <iconify-icon icon="solar:command-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Components</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/component-sweetalert.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Sweet Alert</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/component-nestable.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Nestable</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/component-noui-slider.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Noui slider</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/component-rating.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Rating</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/component-toastr.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Toastr</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- ============================= -->
      <!-- Forms -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">Forms</span>
      </li>

      <!-- =================== -->
      <!-- Form Elements -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow secondary-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
            <iconify-icon icon="solar:book-2-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Form Elements</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/form-inputs.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Forms Input</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-input-groups.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Input Groups</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-input-grid.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Input Grid</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-checkbox-radio.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Checkbox & Radios</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-bootstrap-touchspin.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Bootstrap Touchspin</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-bootstrap-switch.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Bootstrap Switch</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-select2.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Select2</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-dual-listbox.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Dual Listbox</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- =================== -->
      <!-- Form Input -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow success-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-success-subtle rounded-1">
            <iconify-icon icon="solar:ruler-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Form Input</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/form-basic.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Basic Form</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-horizontal.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Form Horizontal</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-actions.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Form Actions</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-row-separator.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Row Separator</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-bordered.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Form Bordered</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-detail.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Form Detail</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/form-striped-row.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Striped Rows</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/form-floating-input.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Form Floating Input</span>
            </a>
          </li>
        </ul>
      </li>


      <!-- =================== -->
      <!-- Form Addons -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow primary-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-primary-subtle rounded-1">
            <iconify-icon icon="solar:qr-code-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Form Addons</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/form-paginator.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Paginator</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/form-img-cropper.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Image Cropper</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/form-dropzone.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Dropzone</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/form-mask.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Form Mask</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/form-typeahead.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Form Typehead</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- =================== -->
      <!-- Form Validation -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow indigo-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
            <iconify-icon icon="solar:danger-circle-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Form Validation</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/form-bootstrap-validation.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Bootstrap Validation</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/form-custom-validation.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Custom Validation</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- =================== -->
      <!-- Form Pickers -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow success-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-success-subtle rounded-1">
            <iconify-icon icon="solar:document-add-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Form Pickers</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/form-picker-colorpicker.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Colorpicker</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/form-picker-datetimepicker.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Datetimepicker</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/form-picker-bootstrap-rangepicker.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Bootstrap Rangepicker</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/form-picker-bootstrap-datepicker.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Bootstrap Datepicker</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/form-picker-material-datepicker.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Material Datepicker</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- =================== -->
      <!-- Form Editor -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow indigo-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
            <iconify-icon icon="solar:dna-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Form Editor</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/form-editor-ckeditor.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Ck Editor</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/form-editor-quill.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Quill Editor</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/form-editor-summernote.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Summernote Editor</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/form-editor-tinymce.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Tinymce Editor</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- =================== -->
      <!-- Form Wizard -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link warning-hover-bg" href="../dark/form-wizard.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-warning-subtle rounded-1">
            <iconify-icon icon="solar:password-minimalistic-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Form Wizard</span>
        </a>
      </li>

      <!-- =================== -->
      <!-- Form Repeater -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link primary-hover-bg" href="../dark/form-repeater.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-primary-subtle rounded-1">
            <iconify-icon icon="solar:star-circle-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Form Repeater</span>
        </a>
      </li>

      <!-- ============================= -->
      <!-- Tables -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">Tables</span>
      </li>

      <!-- =================== -->
      <!-- Bootstrap Table -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow indigo-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
            <iconify-icon icon="solar:sidebar-minimalistic-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Bootstrap Table</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/table-basic.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Basic Table</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/table-dark-basic.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Dark Basic Table</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/table-sizing.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Sizing Table</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/table-layout-coloured.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Coloured Table</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- =================== -->
      <!-- Datatable -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow info-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-info-subtle rounded-1">
            <iconify-icon icon="solar:tablet-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Datatables</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/table-datatable-basic.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Basic Initialisation</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/table-datatable-api.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">API</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/table-datatable-advanced.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Advanced Initialisation</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- ============================= -->
      <!-- Charts -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">Charts</span>
      </li>

      <!-- =================== -->
      <!-- Apex Chart -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow primary-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-primary-subtle rounded-1">
            <iconify-icon icon="solar:dropper-minimalistic-2-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Apex Charts</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/chart-apex-line.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Line Chart</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/chart-apex-area.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Area Chart</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/chart-apex-bar.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Bar Chart</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/chart-apex-pie.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Pie Chart</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/chart-apex-radial.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Radial Chart</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/chart-apex-radar.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Radar Chart</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- ============================= -->
      <!-- Sample Pages -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">Sample Pages</span>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link has-arrow danger-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-danger-subtle rounded-1">
            <iconify-icon icon="solar:file-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Sample Pages</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/pages-animation.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Animation</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/pages-search-result.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Search Result</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/pages-gallery.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Gallery</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/pages-treeview.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Treeview</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/pages-block-ui.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Block-Ui</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/pages-session-timeout.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Session Timeout</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- ============================= -->
      <!-- Icons -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">Icons</span>
      </li>

      <!-- =================== -->
      <!-- Tabler Icon -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link secondary-hover-bg" href="../dark/icon-tabler.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
            <iconify-icon icon="solar:archive-broken" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Tabler Icon</span>
        </a>
      </li>

      <!-- =================== -->
      <!-- Solar Icon -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link primary-hover-bg" href="../dark/icon-solar.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-primary-subtle rounded-1">
            <iconify-icon icon="solar:sticker-smile-circle-2-linear" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Solar Icon</span>
        </a>
      </li>


      <!-- ============================= -->
      <!-- Auth -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">Auth</span>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link success-hover-bg" href="../dark/authentication-error.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-success-subtle rounded-1">
            <iconify-icon icon="solar:danger-circle-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Error</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow warning-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-warning-subtle rounded-1">
            <iconify-icon icon="solar:login-2-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Login</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/authentication-login.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Side Login</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/authentication-login2.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Boxed Login</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow danger-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-danger-subtle rounded-1">
            <iconify-icon icon="solar:user-plus-broken" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Register</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/authentication-register.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Side Register</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/authentication-register2.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Boxed Register</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow indigo-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
            <iconify-icon icon="solar:refresh-bold-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Forgot Password</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/authentication-forgot-password.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Side Forgot Password</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/authentication-forgot-password2.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Boxed Forgot Password</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow info-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-info-subtle rounded-1">
            <iconify-icon icon="solar:magnifer-zoom-in-linear" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Two Steps</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/authentication-two-steps.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Side Two Steps</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/authentication-two-steps2.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Boxed Two Steps</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link primary-hover-bg" href="../dark/authentication-maintenance.html"
          aria-expanded="false">
          <span class="aside-icon p-2 bg-primary-subtle rounded-1">
            <iconify-icon icon="solar:settings-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Maintenance</span>
        </a>
      </li>

      <!-- ============================= -->
      <!-- Documentation -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">Documentation</span>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link success-hover-bg" href="../docs/index.html" aria-expanded="false">
          <span class="aside-icon p-2 bg-success-subtle rounded-1">
            <iconify-icon icon="solar:file-text-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Getting Started</span>
        </a>
      </li>

      <!-- ============================= -->
      <!-- OTHER -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
        <span class="hide-menu">Other</span>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow secondary-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
            <iconify-icon icon="solar:layers-minimalistic-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Menu Level</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Level 1</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Level 1.1</span>
            </a>
            <ul aria-expanded="false" class="collapse two-level">
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <span class="sidebar-icon"></span>
                  <span class="hide-menu">Level 2</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="sidebar-icon"></span>
                  <span class="hide-menu">Level 2.1</span>
                </a>
                <ul aria-expanded="false" class="collapse three-level">
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Level 3</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Level 3.1</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link success-hover-bg opacity-50" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-success-subtle rounded-1">
            <iconify-icon icon="solar:forbidden-circle-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">Disabled</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link warning-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-warning-subtle rounded-1">
            <iconify-icon icon="solar:star-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <div class="lh-base hide-menu">
            <span class="hide-menu ps-1 d-flex">SubCaption</span>
            <span class="hide-menu ps-1 d-flex fs-2">This is the sutitle</span>
          </div>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link danger-hover-bg justify-content-between" href="#" aria-expanded="false">
          <div class="d-flex align-items-center">
            <span class="aside-icon p-2 bg-danger-subtle rounded-1">
              <iconify-icon icon="solar:shield-check-line-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu ps-1">Chip</span>
          </div>
          <div class="hide-menu">
            <span
              class="badge rounded-circle bg-danger d-flex align-items-center justify-content-center round-20 p-0 me-7">9</span>
          </div>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link indigo-hover-bg justify-content-between" href="#" aria-expanded="false">
          <div class="d-flex align-items-center">
            <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
              <iconify-icon icon="solar:smile-circle-line-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu ps-1">Outlined</span>
          </div>
          <div class="hide-menu">
            <span class="hide-menu badge rounded-pill border border-indigo text-indigo fs-2 me-7">Outline</span>
          </div>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link sidebar-link info-hover-bg" href="#" aria-expanded="false">
          <span class="aside-icon p-2 bg-info-subtle rounded-1">
            <iconify-icon icon="solar:star-line-duotone" class="fs-6"></iconify-icon>
          </span>
          <span class="hide-menu ps-1">External Link</span>
        </a>
      </li>
    </ul>

  </nav>
  <!-- End Sidebar navigation -->
</div>

<div class=" fixed-profile mx-3 mt-3">
  <div class="card bg-primary-subtle mb-0 shadow-none">
    <div class="card-body p-4">
      <div class="d-flex align-items-center justify-content-between gap-3">
        <div class="d-flex align-items-center gap-3">
          <img src="../assets/images/profile/user-1.jpg" width="45" height="45" class="img-fluid rounded-circle" alt="" />
          <div>
            <h5 class="mb-1">Mike</h5>
            <p class="mb-0">Admin</p>
          </div>
        </div>
        <a href="../dark/authentication-login.html" class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
          data-bs-title="Logout">
          <iconify-icon icon="solar:logout-line-duotone" class="fs-8"></iconify-icon>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->
    </aside>
    <!--  Sidebar End -->
    <div class="page-wrapper">

      <aside class="left-sidebar with-horizontal">
        <!-- Sidebar scroll-->
<div>
  <!-- Sidebar navigation-->
  <nav class="sidebar-nav scroll-sidebar container-fluid">
    <ul id="sidebarnav">
      <!-- ============================= -->
      <!-- Home -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Home</span>
      </li>
      <!-- =================== -->
      <!-- Dashboard -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow primary-hover-bg" href="#" aria-expanded="false">
          <iconify-icon icon="solar:atom-line-duotone" class="fs-6 aside-icon"></iconify-icon>
          <span class="hide-menu ps-1">Dashboard</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/index.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Dashboard</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/index2.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Dashboard 2</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- ============================= -->
      <!-- Apps -->
      <!-- ============================= -->
      <li class="sidebar-item">
        <a class="sidebar-link two-column has-arrow indigo-hover-bg" href="#" aria-expanded="false">
          <iconify-icon icon="solar:archive-broken" class="fs-6 aside-icon"></iconify-icon>
          <span class="hide-menu ps-1">Apps</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/app-calendar.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Calendar</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/app-kanban.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Kanban</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/app-chat.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Chat</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="../dark/app-email.html" aria-expanded="false">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Email</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/app-contact.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Contact Table</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/app-contact2.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Contact List</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/app-notes.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Notes</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/app-invoice.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Invoice</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/page-user-profile.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">User Profile</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/blog-posts.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Posts</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/blog-detail.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Detail</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/eco-shop.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Shop</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/eco-shop-detail.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Shop Detail</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/eco-product-list.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">List</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/eco-checkout.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu">Checkout</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- ============================= -->
      <!-- PAGES -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">PAGES</span>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link two-column has-arrow primary-hover-bg" href="#" aria-expanded="false">
          <iconify-icon icon="solar:file-text-line-duotone" class="fs-6 aside-icon"></iconify-icon>
          <span class="hide-menu ps-1">Pages</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <!-- Teachers -->
          <li class="sidebar-item">
            <a href="../dark/all-teacher.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">All Teachers</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/teacher-details.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate"> Teachers Details</span>
            </a>
          </li>
          <!-- Exams -->
          <li class="sidebar-item">
            <a href="../dark/exam-schedule.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Exam Schedule</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/exam-result.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate"> Exam Result</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/exam-result-details.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate"> Exam Result Details</span>
            </a>
          </li>
          <!-- students -->
          <li class="sidebar-item">
            <a href="../dark/all-student.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">All Students</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/student-details.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate"> Students Details</span>
            </a>
          </li>
          <!-- classes -->
          <li class="sidebar-item">
            <a href="../dark/classes.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate"> Classes</span>
            </a>
          </li>
          <!-- attendance -->
          <li class="sidebar-item">
            <a href="../dark/attendance.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate"> Attendance</span>
            </a>
          </li>
          <!-- icons -->
          <li class="sidebar-item">
            <a href="../dark/icon-tabler.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate"> Tabler Icon</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/page-faq.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">FAQ</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/page-account-settings.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Account Setting</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/page-pricing.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Pricing</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/page-user-profile2.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Profile One</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/page-user-profile.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Profile Two</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../landingpage/index.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Landing Page</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- ============================= -->
      <!-- UI -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">UI</span>
      </li>
      <!-- =================== -->
      <!-- UI Elements -->
      <!-- =================== -->
      <li class="sidebar-item mega-dropdown">
        <a class="sidebar-link has-arrow warning-hover-bg" href="#" aria-expanded="false">
          <iconify-icon icon="solar:cpu-bolt-line-duotone" class="fs-6 aside-icon"></iconify-icon>
          <span class="hide-menu ps-1">UI</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/ui-accordian.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Accordian</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-badge.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Badge</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-buttons.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Buttons</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-dropdowns.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Dropdowns</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-modals.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Modals</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-tab.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Tab</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-tooltip-popover.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Tooltip & Popover</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-notification.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Notification</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-progressbar.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Progressbar</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-pagination.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Pagination</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-typography.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Typography</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-bootstrap-ui.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Bootstrap UI</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-breadcrumb.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Breadcrumb</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-offcanvas.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Offcanvas</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-lists.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Lists</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-grid.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Grid</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-carousel.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Carousel</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-scrollspy.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Scrollspy</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/ui-spinner.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Spinner</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/ui-link.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Link</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- ============================= -->
      <!-- Forms -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Forms</span>
      </li>
      <!-- =================== -->
      <!-- Forms -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link two-column has-arrow success-hover-bg" href="#" aria-expanded="false">
          <iconify-icon icon="solar:book-2-line-duotone" class="fs-6 aside-icon"></iconify-icon>
          <span class="hide-menu ps-1">Forms</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <!-- form elements -->
          <li class="sidebar-item">
            <a href="../dark/form-inputs.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Forms Input</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-input-groups.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Input Groups</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-input-grid.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Input Grid</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-checkbox-radio.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Checkbox & Radios</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-bootstrap-touchspin.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Bootstrap Touchspin</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-bootstrap-switch.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Bootstrap Switch</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-select2.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Select2</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-dual-listbox.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Dual Listbox</span>
            </a>
          </li>
          <!-- form inputs -->
          <li class="sidebar-item">
            <a href="../dark/form-basic.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Basic Form</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-horizontal.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Form Horizontal</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-actions.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Form Actions</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-row-separator.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Row Separator</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-bordered.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Form Bordered</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/form-detail.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Form Detail</span>
            </a>
          </li>

          <!-- form wizard -->
          <li class="sidebar-item">
            <a href="../dark/form-wizard.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Form Wizard</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="../dark/form-editor-quill.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Quill Editor</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- ============================= -->
      <!-- Tables -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Tables</span>
      </li>
      <!-- =================== -->
      <!-- Bootstrap Table -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow warning-hover-bg" href="#" aria-expanded="false">
          <iconify-icon icon="solar:bedside-table-2-line-duotone" class="fs-6 aside-icon"></iconify-icon>
          <span class="hide-menu ps-1">Tables</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/table-basic.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Basic Table</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/table-dark-basic.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Dark Basic Table</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/table-sizing.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Sizing Table</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/table-layout-coloured.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Coloured Table Layout</span>
            </a>
          </li>
          <!-- datatable -->
          <li class="sidebar-item">
            <a href="../dark/table-datatable-basic.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Basic Initialisation</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/table-datatable-api.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">API</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/table-datatable-advanced.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Advanced Initialisation</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- ============================= -->
      <!-- Auth -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Auth</span>
      </li>
      <!-- =================== -->
      <!-- Auth -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow info-hover-bg" href="#" aria-expanded="false">
          <iconify-icon icon="solar:lock-keyhole-line-duotone" class="fs-6 aside-icon"></iconify-icon>
          <span class="hide-menu ps-1">Auth</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/authentication-error.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Error</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/authentication-login.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Side Login</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/authentication-login2.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Boxed Login</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/authentication-register.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Side Register</span>
            </a>
          </li>
          <!-- datatable -->
          <li class="sidebar-item">
            <a href="../dark/authentication-register2.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Boxed Register</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/authentication-forgot-password.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Side Forgot Password</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/authentication-forgot-password2.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Boxed Forgot Password</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/authentication-two-steps.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Side Two Steps</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/authentication-two-steps2.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Boxed Two Steps</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/authentication-maintenance.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Maintenance</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- ============================= -->
      <!-- Charts -->
      <!-- ============================= -->
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Charts</span>
      </li>
      <!-- =================== -->
      <!-- Apex Chart -->
      <!-- =================== -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow indigo-hover-bg" href="#" aria-expanded="false">
          <iconify-icon icon="solar:archive-broken" class="fs-6 aside-icon"></iconify-icon>
          <span class="hide-menu ps-1">Icon</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../dark/icon-tabler.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Tabler Icon</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="../dark/icon-solar.html" class="sidebar-link">
              <span class="sidebar-icon"></span>
              <span class="hide-menu text-truncate">Solar Icon</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- multi level -->
      <li class="sidebar-item">
        <a class="sidebar-link has-arrow success-hover-bg" href="#" aria-expanded="false">
          <iconify-icon icon="solar:layers-line-duotone" class="fs-6 aside-icon"></iconify-icon>
          <span class="hide-menu ps-1">Multi DD</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
          <li class="sidebar-item">
            <a href="../docs/index.html" class="sidebar-link">
              <i class="ti ti-circle"></i>
              <span class="hide-menu">Documentation</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <i class="ti ti-circle"></i>
              <span class="hide-menu">Page 1</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link has-arrow">
              <i class="ti ti-circle"></i>
              <span class="hide-menu">Page 2</span>
            </a>
            <ul aria-expanded="false" class="collapse second-level">
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <i class="ti ti-circle"></i>
                  <span class="hide-menu">Page 2.1</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <i class="ti ti-circle"></i>
                  <span class="hide-menu">Page 2.2</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <i class="ti ti-circle"></i>
                  <span class="hide-menu">Page 2.3</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <i class="ti ti-circle"></i>
              <span class="hide-menu">Page 3</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
</div>
      </aside>

      <div class="body-wrapper">
        <div class="container-fluid">
          <!--  Header Start -->
          <header class="topbar sticky-top">
            <div class="with-vertical"><!-- ---------------------------------- -->
<!-- Start Vertical Layout Header -->
<!-- ---------------------------------- -->
<nav class="navbar navbar-expand-lg p-0">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
        <div class="nav-icon-hover-bg rounded-circle ">
          <iconify-icon icon="solar:list-bold-duotone" class="fs-7 text-dark"></iconify-icon>
        </div>
      </a>
    </li>
  </ul>

  <ul class="navbar-nav quick-links d-none d-lg-flex">
    <!-- ------------------------------- -->
    <!-- start apps Dropdown -->
    <!-- ------------------------------- -->
    <li class="nav-item dropdown hover-dd d-none d-lg-block me-2">
      <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
        Apps<span class="mt-1"><i class="ti ti-chevron-down fs-3"></i></span>
      </a>
      <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
        <div class="row">
  <div class="col-8">
    <div class=" ps-7 pt-7">
      <div class="border-bottom">
        <div class="row">
          <div class="col-6">
            <div class="position-relative">
              <a href="../dark/app-chat.html"
                class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                <div class="bg-light-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img src="../assets/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid" width="24" height="24">
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold bg-hover-primary">Chat Application</h6>
                  <span class="fs-2 d-block text-dark">New messages arrived</span>
                </div>
              </a>
              <a href="../dark/app-invoice.html"
                class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                <div class="bg-light-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img src="../assets/images/svgs/icon-dd-invoice.svg" alt="" class="img-fluid" width="24" height="24">
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold bg-hover-primary">Invoice App</h6>
                  <span class="fs-2 d-block text-dark">Get latest invoice</span>
                </div>
              </a>
              <a href="../dark/app-contact2.html"
                class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                <div class="bg-light-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img src="../assets/images/svgs/icon-dd-mobile.svg" alt="" class="img-fluid" width="24" height="24">
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold bg-hover-primary">Contact Application</h6>
                  <span class="fs-2 d-block text-dark">2 Unsaved Contacts</span>
                </div>
              </a>
              <a href="../dark/app-email.html"
                class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                <div class="bg-light-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img src="../assets/images/svgs/icon-dd-message-box.svg" alt="" class="img-fluid" width="24"
                    height="24">
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold bg-hover-primary">Email App</h6>
                  <span class="fs-2 d-block text-dark">Get new emails</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-6">
            <div class="position-relative">
              <a href="../dark/page-user-profile.html"
                class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                <div class="bg-light-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img src="../assets/images/svgs/icon-dd-cart.svg" alt="" class="img-fluid" width="24" height="24">
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold bg-hover-primary">User Profile</h6>
                  <span class="fs-2 d-block text-dark">learn more information</span>
                </div>
              </a>
              <a href="../dark/app-calendar.html"
                class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                <div class="bg-light-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img src="../assets/images/svgs/icon-dd-date.svg" alt="" class="img-fluid" width="24" height="24">
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold bg-hover-primary">Calendar App</h6>
                  <span class="fs-2 d-block text-dark">Get dates</span>
                </div>
              </a>
              <a href="../dark/app-contact.html"
                class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                <div class="bg-light-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img src="../assets/images/svgs/icon-dd-lifebuoy.svg" alt="" class="img-fluid" width="24" height="24">
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold bg-hover-primary">Contact List Table</h6>
                  <span class="fs-2 d-block text-dark">Add new contact</span>
                </div>
              </a>
              <a href="../dark/app-notes.html"
                class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                <div class="bg-light-subtle rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img src="../assets/images/svgs/icon-dd-application.svg" alt="" class="img-fluid" width="24"
                    height="24">
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold bg-hover-primary">Notes Application</h6>
                  <span class="fs-2 d-block text-dark">To-do and Daily tasks</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center py-3">
        <div class="col-8">
          <a class="fw-semibold text-dark d-flex align-items-center lh-1 text-decoration-none" href="#"><iconify-icon
              icon="solar:question-circle-line-duotone" class="fs-6 me-2"></iconify-icon>Frequently Asked Questions</a>
        </div>
        <div class="col-4">
          <div class="d-flex justify-content-end pe-4">
            <button class="btn btn-primary">Check</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-4 ms-n4">
    <div class="position-relative p-6 border-start h-100">
      <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
      <ul class="">
        <li class="mb-3">
          <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none"
            href="../dark/page-pricing.html">Pricing Page</a>
        </li>
        <li class="mb-3">
          <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none"
            href="../dark/authentication-login.html">Authentication Design</a>
        </li>
        <li class="mb-3">
          <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none"
            href="../dark/authentication-register.html">Register Now</a>
        </li>
        <li class="mb-3">
          <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none"
            href="../dark/authentication-error.html">404 Error Page</a>
        </li>
        <li class="mb-3">
          <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none"
            href="../dark/app-notes.html">Notes App</a>
        </li>
        <li class="mb-3">
          <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none"
            href="../dark/page-user-profile.html">User Application</a>
        </li>
        <li class="mb-3">
          <a class="fw-semibold text-dark bg-hover-primary text-decoration-none text-decoration-none text-decoration-none text-decoration-none"
            href="../dark/page-account-settings.html">Account Settings</a>
        </li>
      </ul>
    </div>
  </div>
</div>
      </div>
    </li>
    <!-- ------------------------------- -->
    <!-- end apps Dropdown -->
    <!-- ------------------------------- -->
    <li class="nav-item dropdown-hover d-none d-lg-block me-2">
      <a class="nav-link" href="../dark/app-chat.html">Chat</a>
    </li>
    <li class="nav-item dropdown-hover d-none d-lg-block me-2">
      <a class="nav-link" href="../dark/app-calendar.html">Calendar</a>
    </li>
    <li class="nav-item dropdown-hover d-none d-lg-block">
      <a class="nav-link" href="../dark/app-email.html">Email</a>
    </li>
  </ul>

  <div class="d-block d-lg-none">
    <img src="../assets/images/logos/logo-light.svg" class="dark-logo" alt="Logo-Dark" />
    <img src="../assets/images/logos/logo-dark.svg" class="light-logo" alt="Logo-light" />
  </div>


  <a class="navbar-toggler nav-icon-hover p-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse"
    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="p-2">
      <i class="ti ti-dots fs-7"></i>
    </span>
  </a>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <div class="d-flex align-items-center justify-content-between">
      <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
        aria-controls="offcanvasWithBothOptions">
        <div class="nav-icon-hover-bg rounded-circle ">
          <i class="ti ti-align-justified fs-7"></i>
        </div>
      </a>
      <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
        <li class="nav-item dropdown d-block d-lg-none">
          <a class="nav-link position-relative" href="javascript:void(0)" id="drop3" data-bs-toggle="dropdown"
            aria-expanded="false">
            <iconify-icon icon="solar:magnifer-linear" class="fs-7 text-dark"></iconify-icon>
          </a>
          <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop3">
            <!--  Search Bar -->

<div class="modal-header border-bottom p-3">
  <input type="search" class="form-control fs-3" placeholder="Try to searching ..." />
  <span data-bs-dismiss="modal" class="lh-1 cursor-pointer">
    <i class="ti ti-x fs-5 ms-3"></i>
  </span>
</div>
<div class="message-body p-3" data-simplebar="">
  <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
  <ul class="list mb-0 py-2">
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Modern</span>
        <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Dashboard</span>
        <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Contacts</span>
        <span class="fs-3 text-muted d-block">/apps/contacts</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Posts</span>
        <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Detail</span>
        <span
          class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Shop</span>
        <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Modern</span>
        <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Dashboard</span>
        <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Contacts</span>
        <span class="fs-3 text-muted d-block">/apps/contacts</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Posts</span>
        <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Detail</span>
        <span
          class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Shop</span>
        <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
      </a>
    </li>
  </ul>
</div>
          </div>
        </li>
        <!-- ------------------------------- -->
        <!-- start language Dropdown -->
        <!-- ------------------------------- -->
        <li class="nav-item dropdown d-none d-lg-block">
          <a class="nav-link position-relative" href="javascript:void(0)" id="drop3" data-bs-toggle="dropdown"
            aria-expanded="false">
            <form class="nav-link position-relative">
              <input type="text" class="form-control rounded-3 py-2 ps-5 text-dark" placeholder="Try to searching ...">
              <iconify-icon icon="solar:magnifer-linear"
                class="text-dark position-absolute top-50 start-0 translate-middle-y text-dark ms-3"></iconify-icon>
            </form>
          </a>
          <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop3">
            <!--  Search Bar -->

<div class="modal-header border-bottom p-3">
  <input type="search" class="form-control fs-3" placeholder="Try to searching ..." />
  <span data-bs-dismiss="modal" class="lh-1 cursor-pointer">
    <i class="ti ti-x fs-5 ms-3"></i>
  </span>
</div>
<div class="message-body p-3" data-simplebar="">
  <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
  <ul class="list mb-0 py-2">
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Modern</span>
        <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Dashboard</span>
        <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Contacts</span>
        <span class="fs-3 text-muted d-block">/apps/contacts</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Posts</span>
        <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Detail</span>
        <span
          class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Shop</span>
        <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Modern</span>
        <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Dashboard</span>
        <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Contacts</span>
        <span class="fs-3 text-muted d-block">/apps/contacts</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Posts</span>
        <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Detail</span>
        <span
          class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Shop</span>
        <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
      </a>
    </li>
  </ul>
</div>
          </div>
        </li>
        <!-- ------------------------------- -->
        <!-- end language Dropdown -->
        <!-- ------------------------------- -->

        <li class="nav-item">
          <a class="nav-link nav-icon-hover moon dark-layout" href="javascript:void(0)">
            <iconify-icon icon="solar:moon-line-duotone" class="moon fs-7"></iconify-icon>
          </a>
          <a class="nav-link nav-icon-hover sun light-layout" href="javascript:void(0)">
            <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-7"></iconify-icon>
          </a>
        </li>

        <!-- ------------------------------- -->
        <!-- start Messages cart Dropdown -->
        <!-- ------------------------------- -->
        <li class="nav-item dropdown">
          <a class="nav-link position-relative nav-icon-hover" href="javascript:void(0)" id="drop3"
            data-bs-toggle="dropdown" aria-expanded="false">
            <div class="nav-icon-hover-bg rounded-circle ">
              <iconify-icon icon="solar:chat-dots-line-duotone" class="fs-7 text-dark"></iconify-icon>
            </div>
            <div class="pulse">
              <span class="heartbit border-warning"></span>
              <span class="point text-bg-warning"></span>
            </div>
          </a>
          <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop3">
            <!--  Messages -->
<div class="d-flex align-items-center py-3 px-7">
  <h3 class="mb-0 fs-5">Messages</h3>
  <span class="badge bg-info ms-3">5 new</span>
</div>

<div class="message-body" data-simplebar>
  <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-2.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-100 d-inline-block v-middle ps-3">
      <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0 fs-3 fw-normal">
          Roman Joined the Team!
        </h5>
        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
      </div>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Congratulate him</span>
    </div>
  </a>

  <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-3.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-100 d-inline-block v-middle ps-3">
      <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0 fs-3 fw-normal">
          New message received
        </h5>
        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
      </div>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Salma sent you new
        message</span>
    </div>
  </a>

  <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-4.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-100 d-inline-block v-middle ps-3">
      <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0 fs-3 fw-normal">
          New Payment received
        </h5>
        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
      </div>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Check your
        earnings</span>
    </div>
  </a>

  <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-5.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-100 d-inline-block v-middle ps-3">
      <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0 fs-3 fw-normal">
          New message received
        </h5>
        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
      </div>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Salma sent you new
        message</span>
    </div>
  </a>

  <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-6.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-100 d-inline-block v-middle ps-3">
      <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0 fs-3 fw-normal">
          Roman Joined the Team!
        </h5>
        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
      </div>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Congratulate him</span>
    </div>
  </a>
</div>

<div class="py-6 px-7 mb-1">
  <button class="btn btn-primary w-100">
    See All Messages
  </button>
</div>
          </div>
        </li>
        <!-- ------------------------------- -->
        <!-- end Messages cart Dropdown -->
        <!-- ------------------------------- -->

        <!-- ------------------------------- -->
        <!-- start notification Dropdown -->
        <!-- ------------------------------- -->
        <li class="nav-item dropdown">
          <a class="nav-link position-relative nav-icon-hover" href="javascript:void(0)" id="drop2"
            data-bs-toggle="dropdown" aria-expanded="false">
            <div class="nav-icon-hover-bg rounded-circle ">
              <iconify-icon icon="solar:bell-bing-line-duotone" class="fs-7 text-dark"></iconify-icon>
            </div>
            <div class="pulse">
              <span class="heartbit border-success"></span>
              <span class="point text-bg-success"></span>
            </div>
          </a>
          <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
            <div class="d-flex align-items-center px-7 py-3">
  <h3 class="mb-0 fs-5">Notifications</h3>
  <span class="badge bg-warning ms-3">5 new</span>
</div>

<div class="message-body" data-simplebar>
  <a href="javascript:void(0)" class="dropdown-item px-2 d-flex align-items-center px-7 py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-2.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-75 d-inline-block v-middle ps-3">
      <h5 class="mb-0 fs-3 fw-normal">
        Roman Joined the Team!
      </h5>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Congratulate him</span>
    </div>
  </a>

  <a href="javascript:void(0)" class="dropdown-item px-2 d-flex align-items-center px-7 py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-3.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-75 d-inline-block v-middle ps-3">
      <h5 class="mb-0 mt-1 fs-3 fw-normal">
        New message received
      </h5>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Salma sent you new
        message</span>
    </div>
  </a>

  <a href="javascript:void(0)" class="dropdown-item px-2 d-flex align-items-center px-7 py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-4.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-75 d-inline-block v-middle ps-3">
      <h5 class="mb-0 mt-1 fs-3 fw-normal">
        New Payment received
      </h5>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Check your
        earnings</span>
    </div>
  </a>

  <a href="javascript:void(0)" class="dropdown-item px-2 d-flex align-items-center px-7 py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-5.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-75 d-inline-block v-middle ps-3">
      <h5 class="mb-0 fs-3 fw-normal">
        New message received
      </h5>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Salma sent you new
        message</span>
    </div>
  </a>

  <a href="javascript:void(0)" class="dropdown-item px-2 d-flex align-items-center px-7 py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-6.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-75 d-inline-block v-middle ps-3">
      <h5 class="mb-0 fs-3 fw-normal">
        Roman Joined the Team!
      </h5>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Congratulate him</span>
    </div>
  </a>
</div>

<div class="py-6 px-7 mb-1">
  <button class="btn btn-primary w-100">
    See All Notifications
  </button>
</div>
          </div>
        </li>
        <!-- ------------------------------- -->
        <!-- end notification Dropdown -->
        <!-- ------------------------------- -->

        <!-- ------------------------------- -->
        <!-- start profile Dropdown -->
        <!-- ------------------------------- -->
        <li class="nav-item dropdown">
          <a class="nav-link position-relative ms-6" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
            aria-expanded="false">
            <div class="d-flex align-items-center flex-shrink-0">
              <div class="user-profile me-sm-3 me-2">
                <img src="../assets/images/profile/user-1.jpg" width="45" class="rounded-circle" alt="">
              </div>
              <span class="d-sm-none d-block"><iconify-icon
                  icon="solar:alt-arrow-down-line-duotone"></iconify-icon></span>

              <div class="d-none d-sm-block">
                <h6 class="fw-bold fs-4 mb-1 profile-name">
                  Mike Nielsen
                </h6>
                <p class="fs-3 lh-base mb-0 profile-subtext">
                  Admin
                </p>
              </div>
            </div>
          </a>
          <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
            <div class="profile-dropdown position-relative" data-simplebar>
  <div class="d-flex align-items-center justify-content-between pt-3 px-7">
    <h3 class="mb-0 fs-5">User Profile</h3>
    <button type="button" class="border-0 bg-transparent" aria-label="Close">
      <iconify-icon icon="solar:close-circle-line-duotone" class="fs-7 text-muted"></iconify-icon>
    </button>
  </div>

  <div class="d-flex align-items-center mx-7 py-9 border-bottom">
    <img src="../assets/images/profile/user-1.jpg" alt="user" width="90" class="rounded-circle" />
    <div class="ms-4">
      <h4 class="mb-0 fs-5 fw-normal">Mike Nielsen</h4>
      <span class="text-muted">super admin</span>
      <p class="text-muted mb-0 mt-1 d-flex align-items-center">
        <iconify-icon icon="solar:mailbox-line-duotone" class="fs-4 me-1"></iconify-icon>
        info@spike.com
      </p>
    </div>
  </div>

  <div class="message-body">
    <a href="../dark/page-user-profile.html" class="dropdown-item px-7 d-flex align-items-center py-6">
      <span class="btn px-3 py-2 bg-info-subtle rounded-1 text-info shadow-none">
        <iconify-icon icon="solar:wallet-2-line-duotone" class="fs-7"></iconify-icon>
      </span>
      <div class="w-75 d-inline-block v-middle ps-3 ms-1">
        <h5 class="mb-0 mt-1 fs-4 fw-normal">
          My Profile
        </h5>
        <span class="fs-3 text-nowrap d-block fw-normal mt-1 text-muted">Account Settings</span>
      </div>
    </a>

    <a href="../dark/app-email.html" class="dropdown-item px-7 d-flex align-items-center py-6">
      <span class="btn px-3 py-2 bg-success-subtle rounded-1 text-success shadow-none">
        <iconify-icon icon="solar:shield-minimalistic-line-duotone" class="fs-7"></iconify-icon>
      </span>
      <div class="w-75 d-inline-block v-middle ps-3 ms-1">
        <h5 class="mb-0 mt-1 fs-4 fw-normal">My Inbox</h5>
        <span class="fs-3 text-nowrap d-block fw-normal mt-1 text-muted">Messages & Emails</span>
      </div>
    </a>

    <a href="../dark/app-notes.html" class="dropdown-item px-7 d-flex align-items-center py-6">
      <span class="btn px-3 py-2 bg-danger-subtle rounded-1 text-danger shadow-none">
        <iconify-icon icon="solar:card-2-line-duotone" class="fs-7"></iconify-icon>
      </span>
      <div class="w-75 d-inline-block v-middle ps-3 ms-1">
        <h5 class="mb-0 mt-1 fs-4 fw-normal">My Task</h5>
        <span class="fs-3 text-nowrap d-block fw-normal mt-1 text-muted">To-do and Daily
          Tasks</span>
      </div>
    </a>
  </div>

  <div class="py-6 px-7 mb-1">
    <a href="../dark/authentication-login.html" class="btn btn-primary w-100">Log Out</a>
  </div>
</div>
          </div>
        </li>
        <!-- ------------------------------- -->
        <!-- end profile Dropdown -->
        <!-- ------------------------------- -->
      </ul>
    </div>
  </div>
</nav>
<!-- ---------------------------------- -->
<!-- End Vertical Layout Header -->
<!-- ---------------------------------- -->

<!-- ------------------------------- -->
<!-- apps Dropdown in Small screen -->
<!-- ------------------------------- -->
<!--  Mobilenavbar -->
<div class="offcanvas offcanvas-start dropdown-menu-nav-offcanvas" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
  aria-labelledby="offcanvasWithBothOptionsLabel">
  <nav class="sidebar-nav scroll-sidebar">
    <div class="offcanvas-header justify-content-between">
      <img src="../assets/images/logos/favicon.png" alt="" class="img-fluid" />
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body h-n80" data-simplebar>
      <ul id="sidebarnav">
        <li class="sidebar-item">
          <a class="sidebar-link gap-2 has-arrow" href="javascript:void(0)" aria-expanded="false">
            <iconify-icon icon="solar:list-bold-duotone" class="fs-7 text-dark"></iconify-icon>
            <span class="hide-menu">Apps</span>
          </a>
          <ul aria-expanded="false" class="collapse first-level my-3">
            <li class="sidebar-item py-2">
              <a href="#" class="d-flex align-items-center">
                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img src="../assets/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid" width="24" height="24" />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                  <span class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="#" class="d-flex align-items-center">
                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img src="../assets/images/svgs/icon-dd-invoice.svg" alt="" class="img-fluid" width="24" height="24" />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                  <span class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="#" class="d-flex align-items-center">
                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img src="../assets/images/svgs/icon-dd-mobile.svg" alt="" class="img-fluid" width="24" height="24" />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                  <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="#" class="d-flex align-items-center">
                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img src="../assets/images/svgs/icon-dd-message-box.svg" alt="" class="img-fluid" width="24"
                    height="24" />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Email App</h6>
                  <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="#" class="d-flex align-items-center">
                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img src="../assets/images/svgs/icon-dd-cart.svg" alt="" class="img-fluid" width="24" height="24" />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                  <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="#" class="d-flex align-items-center">
                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img src="../assets/images/svgs/icon-dd-date.svg" alt="" class="img-fluid" width="24" height="24" />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                  <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="#" class="d-flex align-items-center">
                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img src="../assets/images/svgs/icon-dd-lifebuoy.svg" alt="" class="img-fluid" width="24"
                    height="24" />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                  <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="#" class="d-flex align-items-center">
                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img src="../assets/images/svgs/icon-dd-application.svg" alt="" class="img-fluid" width="24"
                    height="24" />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                  <span class="fs-2 d-block fw-normal text-muted">To-do and Daily tasks</span>
                </div>
              </a>
            </li>
            <ul class="px-8 mt-6 mb-4">
              <li class="sidebar-item mb-3">
                <h5 class="fs-5 fw-semibold">Quick Links</h5>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="#">Pricing Page</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="#">Authentication Design</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="#">Register Now</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="#">404 Error Page</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="#">Notes App</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="#">User Application</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="#">Account Settings</a>
              </li>
            </ul>
          </ul>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link gap-2" href="#" aria-expanded="false">
            <iconify-icon icon="solar:chat-round-unread-line-duotone" class="fs-6 text-dark"></iconify-icon>
            <span class="hide-menu">Chat</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link gap-2" href="#" aria-expanded="false">
            <iconify-icon icon="solar:calendar-add-line-duotone" class="fs-6 text-dark"></iconify-icon>
            <span class="hide-menu">Calendar</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link gap-2" href="#" aria-expanded="false">
            <iconify-icon icon="solar:mailbox-line-duotone" class="fs-6 text-dark"></iconify-icon>
            <span class="hide-menu">Email</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div></div>
            <div class="app-header with-horizontal">
              <nav class="navbar navbar-expand-xl container-fluid p-0">
  <ul class="navbar-nav">
    <li class="nav-item d-none d-xl-block">
      <a href="index.html" class="text-nowrap nav-link">
        <img src="../assets/images/logos/logo-light.svg" class="dark-logo" width="180" alt="" />
        <img src="../assets/images/logos/logo-dark.svg" class="light-logo" width="180" alt="" />
      </a>
    </li>
  </ul>
  <a class="navbar-toggler nav-icon-hover p-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse"
    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="p-2">
      <i class="ti ti-dots fs-7"></i>
    </span>
  </a>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <div class="d-flex align-items-center justify-content-between">
      <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
        aria-controls="offcanvasWithBothOptions">
        <div class="nav-icon-hover-bg rounded-circle ">
          <i class="ti ti-align-justified fs-7"></i>
        </div>
      </a>
      <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
        <li class="nav-item dropdown d-block d-lg-none">
          <a class="nav-link position-relative" href="javascript:void(0)" id="drop3" data-bs-toggle="dropdown"
            aria-expanded="false">
            <iconify-icon icon="solar:magnifer-linear" class="fs-7 text-dark"></iconify-icon>
          </a>
          <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop3">
            <!--  Search Bar -->

<div class="modal-header border-bottom p-3">
  <input type="search" class="form-control fs-3" placeholder="Try to searching ..." />
  <span data-bs-dismiss="modal" class="lh-1 cursor-pointer">
    <i class="ti ti-x fs-5 ms-3"></i>
  </span>
</div>
<div class="message-body p-3" data-simplebar="">
  <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
  <ul class="list mb-0 py-2">
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Modern</span>
        <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Dashboard</span>
        <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Contacts</span>
        <span class="fs-3 text-muted d-block">/apps/contacts</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Posts</span>
        <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Detail</span>
        <span
          class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Shop</span>
        <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Modern</span>
        <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Dashboard</span>
        <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Contacts</span>
        <span class="fs-3 text-muted d-block">/apps/contacts</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Posts</span>
        <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Detail</span>
        <span
          class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Shop</span>
        <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
      </a>
    </li>
  </ul>
</div>
          </div>
        </li>
        <!-- ------------------------------- -->
        <!-- start language Dropdown -->
        <!-- ------------------------------- -->
        <li class="nav-item dropdown d-none d-lg-block">
          <a class="nav-link position-relative" href="javascript:void(0)" id="drop3" data-bs-toggle="dropdown"
            aria-expanded="false">
            <form class="nav-link position-relative">
              <input type="text" class="form-control rounded-3 py-2 ps-5 text-dark" placeholder="Try to searching ...">
              <iconify-icon icon="solar:magnifer-linear"
                class="text-dark position-absolute top-50 start-0 translate-middle-y text-dark ms-3"></iconify-icon>
            </form>
          </a>
          <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop3">
            <!--  Search Bar -->

<div class="modal-header border-bottom p-3">
  <input type="search" class="form-control fs-3" placeholder="Try to searching ..." />
  <span data-bs-dismiss="modal" class="lh-1 cursor-pointer">
    <i class="ti ti-x fs-5 ms-3"></i>
  </span>
</div>
<div class="message-body p-3" data-simplebar="">
  <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
  <ul class="list mb-0 py-2">
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Modern</span>
        <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Dashboard</span>
        <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Contacts</span>
        <span class="fs-3 text-muted d-block">/apps/contacts</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Posts</span>
        <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Detail</span>
        <span
          class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Shop</span>
        <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Modern</span>
        <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Dashboard</span>
        <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Contacts</span>
        <span class="fs-3 text-muted d-block">/apps/contacts</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Posts</span>
        <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Detail</span>
        <span
          class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
      </a>
    </li>
    <li class="p-1 mb-1 bg-hover-light-black">
      <a href="#">
        <span class="fs-3 text-dark fw-normal d-block">Shop</span>
        <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
      </a>
    </li>
  </ul>
</div>
          </div>
        </li>
        <!-- ------------------------------- -->
        <!-- end language Dropdown -->
        <!-- ------------------------------- -->

        <li class="nav-item">
          <a class="nav-link nav-icon-hover moon dark-layout" href="javascript:void(0)">
            <iconify-icon icon="solar:moon-line-duotone" class="moon fs-7"></iconify-icon>
          </a>
          <a class="nav-link nav-icon-hover sun light-layout" href="javascript:void(0)">
            <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-7"></iconify-icon>
          </a>
        </li>

        <!-- ------------------------------- -->
        <!-- start Messages cart Dropdown -->
        <!-- ------------------------------- -->
        <li class="nav-item dropdown">
          <a class="nav-link position-relative nav-icon-hover" href="javascript:void(0)" id="drop3"
            data-bs-toggle="dropdown" aria-expanded="false">
            <div class="nav-icon-hover-bg rounded-circle ">
              <iconify-icon icon="solar:chat-dots-line-duotone" class="fs-7 text-dark"></iconify-icon>
            </div>
            <div class="pulse">
              <span class="heartbit border-warning"></span>
              <span class="point text-bg-warning"></span>
            </div>
          </a>
          <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop3">
            <!--  Messages -->
<div class="d-flex align-items-center py-3 px-7">
  <h3 class="mb-0 fs-5">Messages</h3>
  <span class="badge bg-info ms-3">5 new</span>
</div>

<div class="message-body" data-simplebar>
  <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-2.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-100 d-inline-block v-middle ps-3">
      <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0 fs-3 fw-normal">
          Roman Joined the Team!
        </h5>
        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
      </div>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Congratulate him</span>
    </div>
  </a>

  <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-3.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-100 d-inline-block v-middle ps-3">
      <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0 fs-3 fw-normal">
          New message received
        </h5>
        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
      </div>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Salma sent you new
        message</span>
    </div>
  </a>

  <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-4.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-100 d-inline-block v-middle ps-3">
      <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0 fs-3 fw-normal">
          New Payment received
        </h5>
        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
      </div>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Check your
        earnings</span>
    </div>
  </a>

  <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-5.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-100 d-inline-block v-middle ps-3">
      <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0 fs-3 fw-normal">
          New message received
        </h5>
        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
      </div>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Salma sent you new
        message</span>
    </div>
  </a>

  <a href="javascript:void(0)" class="dropdown-item px-7 d-flex align-items-center py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-6.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-100 d-inline-block v-middle ps-3">
      <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0 fs-3 fw-normal">
          Roman Joined the Team!
        </h5>
        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
      </div>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Congratulate him</span>
    </div>
  </a>
</div>

<div class="py-6 px-7 mb-1">
  <button class="btn btn-primary w-100">
    See All Messages
  </button>
</div>
          </div>
        </li>
        <!-- ------------------------------- -->
        <!-- end Messages cart Dropdown -->
        <!-- ------------------------------- -->

        <!-- ------------------------------- -->
        <!-- start notification Dropdown -->
        <!-- ------------------------------- -->
        <li class="nav-item dropdown">
          <a class="nav-link position-relative nav-icon-hover" href="javascript:void(0)" id="drop2"
            data-bs-toggle="dropdown" aria-expanded="false">
            <div class="nav-icon-hover-bg rounded-circle ">
              <iconify-icon icon="solar:bell-bing-line-duotone" class="fs-7 text-dark"></iconify-icon>
            </div>
            <div class="pulse">
              <span class="heartbit border-success"></span>
              <span class="point text-bg-success"></span>
            </div>
          </a>
          <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
            <div class="d-flex align-items-center px-7 py-3">
  <h3 class="mb-0 fs-5">Notifications</h3>
  <span class="badge bg-warning ms-3">5 new</span>
</div>

<div class="message-body" data-simplebar>
  <a href="javascript:void(0)" class="dropdown-item px-2 d-flex align-items-center px-7 py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-2.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-75 d-inline-block v-middle ps-3">
      <h5 class="mb-0 fs-3 fw-normal">
        Roman Joined the Team!
      </h5>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Congratulate him</span>
    </div>
  </a>

  <a href="javascript:void(0)" class="dropdown-item px-2 d-flex align-items-center px-7 py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-3.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-75 d-inline-block v-middle ps-3">
      <h5 class="mb-0 mt-1 fs-3 fw-normal">
        New message received
      </h5>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Salma sent you new
        message</span>
    </div>
  </a>

  <a href="javascript:void(0)" class="dropdown-item px-2 d-flex align-items-center px-7 py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-4.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-75 d-inline-block v-middle ps-3">
      <h5 class="mb-0 mt-1 fs-3 fw-normal">
        New Payment received
      </h5>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Check your
        earnings</span>
    </div>
  </a>

  <a href="javascript:void(0)" class="dropdown-item px-2 d-flex align-items-center px-7 py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-5.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-75 d-inline-block v-middle ps-3">
      <h5 class="mb-0 fs-3 fw-normal">
        New message received
      </h5>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Salma sent you new
        message</span>
    </div>
  </a>

  <a href="javascript:void(0)" class="dropdown-item px-2 d-flex align-items-center px-7 py-6">
    <span class="flex-shrink-0">
      <img src="../assets/images/profile/user-6.jpg" alt="user" width="45" class="rounded-circle" />
    </span>
    <div class="w-75 d-inline-block v-middle ps-3">
      <h5 class="mb-0 fs-3 fw-normal">
        Roman Joined the Team!
      </h5>
      <span class="fs-2 text-nowrap d-block fw-normal mt-1 text-muted">Congratulate him</span>
    </div>
  </a>
</div>

<div class="py-6 px-7 mb-1">
  <button class="btn btn-primary w-100">
    See All Notifications
  </button>
</div>
          </div>
        </li>
        <!-- ------------------------------- -->
        <!-- end notification Dropdown -->
        <!-- ------------------------------- -->

        <!-- ------------------------------- -->
        <!-- start profile Dropdown -->
        <!-- ------------------------------- -->
        <li class="nav-item dropdown">
          <a class="nav-link position-relative ms-6" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
            aria-expanded="false">
            <div class="d-flex align-items-center flex-shrink-0">
              <div class="user-profile me-sm-3 me-2">
                <img src="../assets/images/profile/user-1.jpg" width="45" class="rounded-circle" alt="">
              </div>
              <span class="d-sm-none d-block"><iconify-icon
                  icon="solar:alt-arrow-down-line-duotone"></iconify-icon></span>

              <div class="d-none d-sm-block">
                <h6 class="fw-bold fs-4 mb-1 profile-name">
                  Mike Nielsen
                </h6>
                <p class="fs-3 lh-base mb-0 profile-subtext">
                  Admin
                </p>
              </div>
            </div>
          </a>
          <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
            <div class="profile-dropdown position-relative" data-simplebar>
  <div class="d-flex align-items-center justify-content-between pt-3 px-7">
    <h3 class="mb-0 fs-5">User Profile</h3>
    <button type="button" class="border-0 bg-transparent" aria-label="Close">
      <iconify-icon icon="solar:close-circle-line-duotone" class="fs-7 text-muted"></iconify-icon>
    </button>
  </div>

  <div class="d-flex align-items-center mx-7 py-9 border-bottom">
    <img src="../assets/images/profile/user-1.jpg" alt="user" width="90" class="rounded-circle" />
    <div class="ms-4">
      <h4 class="mb-0 fs-5 fw-normal">Mike Nielsen</h4>
      <span class="text-muted">super admin</span>
      <p class="text-muted mb-0 mt-1 d-flex align-items-center">
        <iconify-icon icon="solar:mailbox-line-duotone" class="fs-4 me-1"></iconify-icon>
        info@spike.com
      </p>
    </div>
  </div>

  <div class="message-body">
    <a href="../dark/page-user-profile.html" class="dropdown-item px-7 d-flex align-items-center py-6">
      <span class="btn px-3 py-2 bg-info-subtle rounded-1 text-info shadow-none">
        <iconify-icon icon="solar:wallet-2-line-duotone" class="fs-7"></iconify-icon>
      </span>
      <div class="w-75 d-inline-block v-middle ps-3 ms-1">
        <h5 class="mb-0 mt-1 fs-4 fw-normal">
          My Profile
        </h5>
        <span class="fs-3 text-nowrap d-block fw-normal mt-1 text-muted">Account Settings</span>
      </div>
    </a>

    <a href="../dark/app-email.html" class="dropdown-item px-7 d-flex align-items-center py-6">
      <span class="btn px-3 py-2 bg-success-subtle rounded-1 text-success shadow-none">
        <iconify-icon icon="solar:shield-minimalistic-line-duotone" class="fs-7"></iconify-icon>
      </span>
      <div class="w-75 d-inline-block v-middle ps-3 ms-1">
        <h5 class="mb-0 mt-1 fs-4 fw-normal">My Inbox</h5>
        <span class="fs-3 text-nowrap d-block fw-normal mt-1 text-muted">Messages & Emails</span>
      </div>
    </a>

    <a href="../dark/app-notes.html" class="dropdown-item px-7 d-flex align-items-center py-6">
      <span class="btn px-3 py-2 bg-danger-subtle rounded-1 text-danger shadow-none">
        <iconify-icon icon="solar:card-2-line-duotone" class="fs-7"></iconify-icon>
      </span>
      <div class="w-75 d-inline-block v-middle ps-3 ms-1">
        <h5 class="mb-0 mt-1 fs-4 fw-normal">My Task</h5>
        <span class="fs-3 text-nowrap d-block fw-normal mt-1 text-muted">To-do and Daily
          Tasks</span>
      </div>
    </a>
  </div>

  <div class="py-6 px-7 mb-1">
    <a href="../dark/authentication-login.html" class="btn btn-primary w-100">Log Out</a>
  </div>
</div>
          </div>
        </li>
        <!-- ------------------------------- -->
        <!-- end profile Dropdown -->
        <!-- ------------------------------- -->
      </ul>
    </div>
  </div>
</nav>
            </div>
          </header>
          <!--  Header End -->
          <div class="row">
            <div class="col-lg-6 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body border-bottom position-relative">
                  <h5 class="card-title fs-6 mb-1">Congratulations Jonathan</h5>
                  <p class="mb-0">You have done 38% more sales</p>
                  <div class="mt-6">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex align-items-center mb-9">
                        <div
                          class="bg-success-subtle p-6 me-3 rounded-circle d-flex align-items-center justify-content-center">
                          <iconify-icon icon="solar:cart-5-line-duotone" class="fs-7 text-success"></iconify-icon>
                        </div>
                        <div>
                          <h6 class="mb-1 fs-4">64 new orders</h6>
                          <p class="mb-0">Processing</p>
                        </div>
                      </li>
                      <li class="d-flex align-items-center mb-9">
                        <div
                          class="bg-warning-subtle p-6 me-3 rounded-circle d-flex align-items-center justify-content-center">
                          <iconify-icon icon="solar:pause-line-duotone" class="fs-6 text-warning"></iconify-icon>
                        </div>
                        <div>
                          <h6 class="mb-1 fs-4">4 orders</h6>
                          <p class="mb-0">On hold</p>
                        </div>
                      </li>
                      <li class="d-flex align-items-center">
                        <div
                          class="bg-indigo-subtle p-6 me-3 rounded-circle d-flex align-items-center justify-content-center">
                          <iconify-icon icon="solar:bicycling-round-bold-duotone"
                            class="fs-7 text-indigo"></iconify-icon>
                        </div>
                        <div>
                          <h6 class="mb-1 fs-4">12 orders</h6>
                          <p class="mb-0">Delivered</p>
                        </div>
                      </li>
                    </ul>
                    <div class="man-working-on-laptop">
                      <img src="../assets/images/backgrounds/man-working-on-laptop.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-body pb-2">
                  <div class="d-flex align-items-baseline justify-content-between">
                    <div>
                      <h5 class="card-title fs-6 mb-1">Total Orders</h5>
                      <p class="mb-0">Weekly order updates</p>
                    </div>
                    <select class="form-select fw-bold w-auto shadow-none">
                      <option value="1">This Week</option>
                      <option value="2">April 2023</option>
                      <option value="3">May 2023</option>
                      <option value="4">June 2023</option>
                    </select>
                  </div>
                  <div id="netsells"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch">
              <div class="row">
                <div class="col-sm-6 d-flex align-items-stretch">
                  <div class="card w-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="card-title mb-1">Payments</h5>
                          <p class="mb-0">Last 7 days</p>
                        </div>
                        <div>
                          <h5 class="card-title mb-1 text-end">12,389</h5>
                          <span
                            class="badge rounded-pill bg-warning-subtle text-warning border-warning border text-end">-3.8%</span>
                        </div>
                      </div>
                      <div id="total-orders" class="total-orders-chart my-1"></div>
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center">
                          <i class="ti ti-circle text-primary fs-4 me-2"></i>
                          <p class="mb-0">Paypal</p>
                        </div>
                        <p class="mb-0">52%</p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                          <i class="ti ti-circle text-light fs-4 me-2"></i>
                          <p class="mb-0">Credit Card</p>
                        </div>
                        <p class="mb-0">48%</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 d-flex align-items-stretch">
                  <div class="card w-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="card-title mb-1">Products</h5>
                          <p class="mb-0">Last 7 days</p>
                        </div>
                        <div>
                          <h5 class="card-title mb-1 text-end">432</h5>
                          <span
                            class="badge rounded-pill bg-success-subtle text-success border-success border text-end">+26.5%</span>
                        </div>
                      </div>
                      <div id="products" class="my-8"></div>
                      <p class="mb-0 text-center">$18k Profit more than last month</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 d-flex align-items-stretch">
                  <div class="card w-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="card-title mb-1">Latest Deal</h5>
                          <p class="mb-0">Last 7 days</p>
                        </div>
                        <div>
                          <span
                            class="badge rounded-pill bg-success-subtle text-success border-success border text-end">86.5%</span>
                        </div>
                      </div>
                      <div class="my-6 py-4">
                        <div class="d-flex align-items-center justify-content-between">
                          <h5 class="mb-0">$98,500</h5>
                          <h6 class="mb-0">$1,22,900</h6>
                        </div>
                        <div class="progress bg-light-subtle w-100 my-2">
                          <div class="progress-bar text-bg-primary" role="progressbar" aria-label="Example 8px high"
                            style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mb-0">Coupons used: 18/22</p>
                      </div>
                      <h6 class="mb-7">Recent Purchasers</h6>
                      <ul class="hstack mb-0">
                        <li class="ms-n2">
                          <a href="javascript:void(0)" class="">
                            <img src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle border border-2 border-white" width="40" height="40" alt="">
                          </a>
                        </li>
                        <li class="ms-n2">
                          <a href="javascript:void(0)" class="">
                            <img src="../assets/images/profile/user-3.jpg"
                              class="rounded-circle border border-2 border-white" width="40" height="40" alt="">
                          </a>
                        </li>
                        <li class="ms-n2">
                          <a href="javascript:void(0)" class="">
                            <img src="../assets/images/profile/user-4.jpg"
                              class="rounded-circle border border-2 border-white" width="40" height="40" alt="">
                          </a>
                        </li>
                        <li class="ms-n2">
                          <a href="javascript:void(0)" class="">
                            <img src="../assets/images/profile/user-5.jpg"
                              class="rounded-circle border border-2 border-white" width="40" height="40" alt="">
                          </a>
                        </li>
                        <li class="ms-n2">
                          <a href="javascript:void(0)"
                            class="bg-primary-subtle rounded-circle border border-2 border-white d-flex align-items-center justify-content-center round-40">
                            +8
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 d-flex align-items-stretch">
                  <div class="card w-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="card-title mb-1">Customers</h5>
                          <p class="mb-0">Last 7 days</p>
                        </div>
                        <div>
                          <h5 class="card-title mb-1 text-end">6,380</h5>
                          <span
                            class="badge rounded-pill bg-success-subtle text-success border-success border text-end">+26.5%</span>
                        </div>
                      </div>
                      <div id="customers" class="my-5"></div>
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <p class="mb-0">April 07 - April 14</p>
                        <p class="mb-0">6,380</p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between">
                        <p class="mb-0">Last Week</p>
                        <p class="mb-0">4,298</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="table-responsive overflow-x-auto products-tabel">
                    <table class="table text-nowrap customize-table mb-0 align-middle">
                      <thead class="text-dark fs-4">
                        <tr>
                          <th>Products</th>
                          <th>Payment</th>
                          <th>Status</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="ps-0">
                            <div class="d-flex align-items-center product text-truncate">
                              <img src="../assets/images/products/product-5.png" class="img-fluid flex-shrink-0"
                                width="60" height="60">
                              <div class="ms-3 product-title">
                                <h6 class="fs-4 mb-0 text-truncate-2">iPhone 13 pro max-Pacific Blue-128GB storage</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <h5 class="mb-0 fs-4">$180 <span class="text-muted">/499</span></h5>
                            <p class="text-muted mb-2">Partially paid</p>
                            <div class="progress bg-light-subtle w-100 h-4">
                              <div class="progress-bar text-bg-warning" role="progressbar" aria-label="Example 4px high"
                                style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <span
                              class="badge rounded-pill bg-indigo-subtle text-indigo border-indigo border">Confirmed</span>
                          </td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical fs-5"></i>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-plus"></i>Add</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-edit"></i>Edit</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-trash"></i>Delete</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="ps-0">
                            <div class="d-flex align-items-center product text-truncate">
                              <img src="../assets/images/products/product-6.png" class="img-fluid flex-shrink-0"
                                width="60" height="60">
                              <div class="ms-3 product-title">
                                <h6 class="fs-4 mb-0 text-truncate-2">Apple MacBook Pro 13 inch-M1-8/256GB-space</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <h5 class="mb-0 fs-4">$120 <span class="text-muted">/499</span></h5>
                            <p class="text-muted mb-2">Full paid</p>
                            <div class="progress bg-light-subtle w-100 h-4">
                              <div class="progress-bar text-bg-success" role="progressbar" aria-label="Example 4px high"
                                style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <span
                              class="badge rounded-pill bg-success-subtle text-success border-success border">Confirmed</span>
                          </td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical fs-5"></i>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-plus"></i>Add</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-edit"></i>Edit</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-trash"></i>Delete</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="ps-0">
                            <div class="d-flex align-items-center product text-truncate">
                              <img src="../assets/images/products/product-7.png" class="img-fluid flex-shrink-0"
                                width="60" height="60">
                              <div class="ms-3 product-title">
                                <h6 class="fs-4 mb-0 text-truncate-2">PlayStation 5 DualSense Wireless Controller</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <h5 class="mb-0 fs-4">$120 <span class="text-muted">/499</span></h5>
                            <p class="text-muted mb-2">Cancelled</p>
                            <div class="progress bg-light-subtle w-100 h-4">
                              <div class="progress-bar text-bg-danger" role="progressbar" aria-label="Example 4px high"
                                style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <span
                              class="badge rounded-pill bg-danger-subtle text-danger border-danger border">Cancelled</span>
                          </td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical fs-5"></i>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-plus"></i>Add</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-edit"></i>Edit</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-trash"></i>Delete</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="ps-0">
                            <div class="d-flex align-items-center product text-truncate">
                              <img src="../assets/images/products/product-8.png" class="img-fluid flex-shrink-0"
                                width="60" height="60">
                              <div class="ms-3 product-title">
                                <h6 class="fs-4 mb-0 text-truncate-2">Amazon Basics Mesh, Mid-Back, Swivel Office De...
                                </h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <h5 class="mb-0 fs-4">$120 <span class="text-muted">/499</span></h5>
                            <p class="text-muted mb-2">Partially paid</p>
                            <div class="progress bg-light-subtle w-100 h-4">
                              <div class="progress-bar text-bg-warning" role="progressbar" aria-label="Example 4px high"
                                style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <span
                              class="badge rounded-pill bg-indigo-subtle text-indigo border-indigo border">Confirmed</span>
                          </td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical fs-5"></i>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-plus"></i>Add</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-edit"></i>Edit</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-trash"></i>Delete</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="ps-0 border-bottom-0">
                            <div class="d-flex align-items-center product text-truncate">
                              <img src="../assets/images/products/product-9.png" class="img-fluid flex-shrink-0"
                                width="60" height="60">
                              <div class="ms-3 product-title">
                                <h6 class="fs-4 mb-0 text-truncate-2">Sony X85J 75 Inch Sony 4K Ultra HD LED Smart G...
                                </h6>
                              </div>
                            </div>
                          </td>
                          <td class="border-bottom-0">
                            <h5 class="mb-0 fs-4">$120 <span class="text-muted">/499</span></h5>
                            <p class="text-muted mb-2">Full paid</p>
                            <div class="progress bg-light-subtle w-100 h-4">
                              <div class="progress-bar text-bg-success" role="progressbar" aria-label="Example 4px high"
                                style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="border-bottom-0">
                            <span
                              class="badge rounded-pill bg-success-subtle text-success border-success border">Confirmed</span>
                          </td>
                          <td class="border-bottom-0">
                            <div class="dropdown dropstart">
                              <a href="#" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical fs-5"></i>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-plus"></i>Add</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-edit"></i>Edit</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-trash"></i>Delete</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h5 class="card-title">Visit From USA</h5>
                  <div id="usa" class="h-270"></div>
                  <div class="mt-4">
                    <div class="hstack gap-4 mb-4">
                      <h6 class="mb-0 flex-shrink-0 w25">LA</h6>
                      <div class="progress bg-light-subtle mt-1 w-100 h-5">
                        <div class="progress-bar text-bg-info" role="progressbar" style="width: 28%" aria-valuenow="28"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h6 class="mb-0 flex-shrink-0 w35">28%</h6>
                    </div>
                    <div class="hstack gap-4 mb-4">
                      <h6 class="mb-0 flex-shrink-0 w25">NY</h6>
                      <div class="progress bg-light-subtle mt-1 w-100 h-5">
                        <div class="progress-bar text-bg-primary" role="progressbar" style="width: 21%"
                          aria-valuenow="21" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h6 class="mb-0 flex-shrink-0 w35">21%</h6>
                    </div>
                    <div class="hstack gap-4 mb-4">
                      <h6 class="mb-0 flex-shrink-0 w25">KA</h6>
                      <div class="progress bg-light-subtle mt-1 w-100 h-5">
                        <div class="progress-bar text-bg-danger" role="progressbar" style="width: 18%"
                          aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h6 class="mb-0 flex-shrink-0 w35">18%</h6>
                    </div>
                    <div class="hstack gap-4">
                      <h6 class="mb-0 flex-shrink-0 w25">AZ</h6>
                      <div class="progress bg-light-subtle mt-1 w-100 h-5">
                        <div class="progress-bar text-bg-indigo" role="progressbar" style="width: 12%"
                          aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h6 class="mb-0 flex-shrink-0 w35">12%</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card mb-0">
                <div class="card-body">
                  <div class="d-md-flex justify-content-between mb-9">
                    <div class="mb-9 mb-md-0">
                      <h5 class="card-title">Latest reviews</h5>
                      <p class="card-subtitle mb-0">Reviewd received across all channels</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <form class="position-relative me-3 w-100">
                        <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                          placeholder="Search">
                        <i
                          class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                      </form>
                      <div class="dropdown">
                        <a href="#" class="btn border shadow-none px-3" id="dropdownMenuButton"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ti ti-dots-vertical fs-5"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                          <li>
                            <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                class="fs-4 ti ti-plus"></i>Add</a>
                          </li>
                          <li>
                            <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                class="fs-4 ti ti-edit"></i>Edit</a>
                          </li>
                          <li>
                            <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                class="fs-4 ti ti-trash"></i>Delete</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive overflow-x-auto latest-reviews-table">
                    <table class="table mb-0 align-middle text-nowrap">
                      <thead class="text-dark fs-4">
                        <tr>
                          <th class="ps-0">
                            #
                          </th>
                          <th>Products</th>
                          <th>Customer</th>
                          <th>Reviews</th>
                          <th>Status</th>
                          <th>Time</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="ps-0">
                            <div class="form-check mb-0 flex-shrink-0">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center product text-truncate">
                              <img src="../assets/images/products/product-5.png" class="img-fluid flex-shrink-0"
                                width="60" height="60">
                              <div class="ms-3 product-title">
                                <h6 class="fs-4 mb-0 text-truncate-2">iPhone 13 pro max-Pacific Blue-128GB storage</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center text-truncate">
                              <img src="../assets/images/profile/user-2.jpg" alt=""
                                class="img-fluid rounded-circle flex-shrink-0" width="32" height="32">
                              <div class="ms-7">
                                <h5 class="mb-1 fs-4">Arlene McCoy</h5>
                                <h6 class="mb-0 fw-light">macoy@arlene.com</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="product-reviews">
                              <ul class="list-unstyled d-flex align-items-center mb-0">
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                      class="text-warning"></iconify-icon></a></li>
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                      class="text-warning"></iconify-icon></a></li>
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                      class="text-warning"></iconify-icon></a></li>
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                      icon="solar:star-bold-duotone" class="text-warning"></iconify-icon></a></li>
                                <li><a class="" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone"
                                      class="text-warning"></iconify-icon></a>
                                </li>
                              </ul>
                              <p class="text-dark mb-0 fw-normal text-truncate-2">
                                This theme is great. Clean and easy to
                                understand. Perfect for those who don't have<br>
                                time to... <a href="#">See more</a>
                              </p>
                            </div>
                          </td>
                          <td>
                            <span
                              class="badge rounded-pill bg-success-subtle text-success border-success border">Confirmed</span>
                          </td>
                          <td>
                            <p class="mb-0">Nov 8</p>
                          </td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical fs-5"></i>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-plus"></i>Add</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-edit"></i>Edit</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-trash"></i>Delete</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="ps-0">
                            <div class="form-check mb-0 flex-shrink-0">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center product text-truncate">
                              <img src="../assets/images/products/product-6.png" class="img-fluid flex-shrink-0"
                                width="60" height="60">
                              <div class="ms-3 product-title">
                                <h6 class="fs-4 mb-0 text-truncate-2">Apple MacBook Pro 13 inch-M1-8/256GB-space</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center text-truncate">
                              <img src="../assets/images/profile/user-3.jpg" alt=""
                                class="img-fluid rounded-circle flex-shrink-0" width="32" height="32">
                              <div class="ms-7">
                                <h5 class="mb-1 fs-4">Jerome Bell</h5>
                                <h6 class="mb-0 fw-light">belljerome@yahoo.com</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="product-reviews">
                              <ul class="list-unstyled d-flex align-items-center mb-0">
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                      class="text-warning"></iconify-icon></a></li>
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                      class="text-warning"></iconify-icon></a></li>
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                      class="text-warning"></iconify-icon></a></li>
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                      class="text-warning"></iconify-icon></a></li>
                                <li><a class="" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone"
                                      class="text-warning"></iconify-icon></a>
                                </li>
                              </ul>
                              <p class="text-dark mb-0 fw-normal text-truncate-2">
                                It's a Mac, after all. Once you've gone Mac,there's no going back. My first Mac
                                lastedover nine years.
                              </p>
                            </div>
                          </td>
                          <td>
                            <span
                              class="badge rounded-pill bg-warning-subtle text-warning border-warning border">Pending</span>
                          </td>
                          <td>
                            <p class="mb-0">Nov 8</p>
                          </td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical fs-5"></i>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-plus"></i>Add</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-edit"></i>Edit</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-trash"></i>Delete</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="ps-0">
                            <div class="form-check mb-0 flex-shrink-0">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center product text-truncate">
                              <img src="../assets/images/products/product-7.png" class="img-fluid flex-shrink-0"
                                width="60" height="60">
                              <div class="ms-3 product-title">
                                <h6 class="fs-4 mb-0 text-truncate-2">PlayStation 5 DualSense Wireless Controller</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center text-truncate">
                              <img src="../assets/images/profile/user-4.jpg" alt=""
                                class="img-fluid rounded-circle flex-shrink-0" width="32" height="32">
                              <div class="ms-7">
                                <h5 class="mb-1 fs-4">Jacob Jones</h5>
                                <h6 class="mb-0 fw-light">jones009@hotmail.com</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="product-reviews">
                              <ul class="list-unstyled d-flex align-items-center mb-0">
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                      class="text-warning"></iconify-icon></a></li>
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                      class="text-warning"></iconify-icon></a></li>
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                      class="text-warning"></iconify-icon></a></li>
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                      icon="solar:star-bold-duotone" class="text-warning"></iconify-icon></a></li>
                                <li><a class="" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone"
                                      class="text-warning"></iconify-icon></a>
                                </li>
                              </ul>
                              <p class="text-dark mb-0 fw-normal text-truncate-2">
                                The best experience we could hope for.Customer service team is amazing and thequality
                                of their products... <a href="#">See more</a>
                              </p>
                            </div>
                          </td>
                          <td>
                            <span
                              class="badge rounded-pill bg-warning-subtle text-warning border-warning border">Pending</span>
                          </td>
                          <td>
                            <p class="mb-0">Nov 8</p>
                          </td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical fs-5"></i>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-plus"></i>Add</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-edit"></i>Edit</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-trash"></i>Delete</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="ps-0">
                            <div class="form-check mb-0 flex-shrink-0">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center product text-truncate">
                              <img src="../assets/images/products/product-8.png" class="img-fluid flex-shrink-0"
                                width="60" height="60">
                              <div class="ms-3 product-title">
                                <h6 class="fs-4 mb-0 text-truncate-2">Amazon Basics Mesh, Mid-Back, Swivel Office De...
                                </h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center text-truncate">
                              <img src="../assets/images/profile/user-5.jpg" alt=""
                                class="img-fluid rounded-circle flex-shrink-0" width="32" height="32">
                              <div class="ms-7">
                                <h5 class="mb-1 fs-4">Annette Black</h5>
                                <h6 class="mb-0 fw-light">blackanne@yahoo.com</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="product-reviews">
                              <ul class="list-unstyled d-flex align-items-center mb-0">
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                      class="text-warning"></iconify-icon></a></li>
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                      class="text-warning"></iconify-icon></a></li>
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                      class="text-warning"></iconify-icon></a></li>
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                      icon="solar:star-bold-duotone" class="text-warning"></iconify-icon></a></li>
                                <li><a class="" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone"
                                      class="text-warning"></iconify-icon></a>
                                </li>
                              </ul>
                              <p class="text-dark mb-0 fw-normal text-truncate-2">
                                The controller is quite comfy for me. Despiteits increased size, the controller still
                                fits well <br>in my hands.
                              </p>
                            </div>
                          </td>
                          <td>
                            <span
                              class="badge rounded-pill bg-success-subtle text-success border-success border">Confirmed</span>
                          </td>
                          <td>
                            <p class="mb-0">Nov 8</p>
                          </td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical fs-5"></i>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-plus"></i>Add</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-edit"></i>Edit</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-trash"></i>Delete</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="ps-0">
                            <div class="form-check mb-0 flex-shrink-0">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center product text-truncate">
                              <img src="../assets/images/products/product-9.png" class="img-fluid flex-shrink-0"
                                width="60" height="60">
                              <div class="ms-3 product-title">
                                <h6 class="fs-4 mb-0 text-truncate-2">Sony X85J 75 Inch Sony 4K Ultra HD LED Smart G...
                                </h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center text-truncate">
                              <img src="../assets/images/profile/user-6.jpg" alt=""
                                class="img-fluid rounded-circle flex-shrink-0" width="32" height="32">
                              <div class="ms-7">
                                <h5 class="mb-1 fs-4">Albert Flores</h5>
                                <h6 class="mb-0 fw-light">albertflo9@gmail.com</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="product-reviews">
                              <ul class="list-unstyled d-flex align-items-center mb-0">
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                      class="text-warning"></iconify-icon></a></li>
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                      class="text-warning"></iconify-icon></a></li>
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                      class="text-warning"></iconify-icon></a></li>
                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                      icon="solar:star-bold-duotone" class="text-warning"></iconify-icon></a></li>
                                <li><a class="" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone"
                                      class="text-warning"></iconify-icon></a>
                                </li>
                              </ul>
                              <p class="text-dark mb-0 fw-normal text-truncate-2">
                                This theme is great. Perfect for those whodon't have time to start everything from
                                <br>scratch.
                              </p>
                            </div>
                          </td>
                          <td>
                            <span
                              class="badge rounded-pill bg-warning-subtle text-warning border-warning border">Pending</span>
                          </td>
                          <td>
                            <p class="mb-0">Nov 8</p>
                          </td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#" class="text-muted " id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical fs-5"></i>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-plus"></i>Add</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-edit"></i>Edit</a>
                                </li>
                                <li>
                                  <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                      class="fs-4 ti ti-trash"></i>Delete</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mt-10">
                    <p class="mb-0 fw-normal">1-6 of 32</p>
                    <nav aria-label="Page navigation example">
                      <ul class="pagination mb-0 align-items-center">
                        <li class="page-item"><a
                            class="page-link border-0 d-flex align-items-center text-muted fw-normal"
                            href="#"><iconify-icon icon="solar:alt-arrow-left-line-duotone"
                              class="fs-5"></iconify-icon>Previous</a></li>
                        <li class="page-item"><a class="page-link border-0 d-flex align-items-center fw-normal"
                            href="#">Next<iconify-icon icon="solar:alt-arrow-right-line-duotone"
                              class="fs-5"></iconify-icon></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
  function handleColorTheme(e) {
    $("html").attr("data-color-theme", e);
    $(e).prop("checked", !0);
  }
</script>
<button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  <i class="icon ti ti-settings fs-7"></i>
</button>

<div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample"
  aria-labelledby="offcanvasExampleLabel">
  <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
    <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
      Settings
    </h4>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body h-n80" data-simplebar>
    <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

    <div class="d-flex flex-row gap-3 customizer-box" role="group">
      <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary" for="light-layout"><i
          class="icon ti ti-brightness-up fs-7 me-2"></i>Light</label>

      <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary" for="dark-layout"><i class="icon ti ti-moon fs-7 me-2"></i>Dark</label>
    </div>

    <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
    <div class="d-flex flex-row gap-3 customizer-box" role="group">
      <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary" for="ltr-layout"><i
          class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR</label>

      <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary" for="rtl-layout"><i
          class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL</label>
    </div>

    <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

    <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
      <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme"
        autocomplete="off" />
      <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Blue_Theme')"
        for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME">
        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
          <i class="ti ti-check text-white d-flex icon fs-5"></i>
        </div>
      </label>

      <input type="radio" class="btn-check" name="color-theme-layout"  id="Aqua_Theme"
        autocomplete="off" />
      <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Aqua_Theme')"
        for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME">
        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
          <i class="ti ti-check text-white d-flex icon fs-5"></i>
        </div>
      </label>

      <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Purple_Theme')"
        for="Purple_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME">
        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
          <i class="ti ti-check text-white d-flex icon fs-5"></i>
        </div>
      </label>

      <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Green_Theme')"
        for="green-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME">
        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
          <i class="ti ti-check text-white d-flex icon fs-5"></i>
        </div>
      </label>

      <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Cyan_Theme')"
        for="cyan-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME">
        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
          <i class="ti ti-check text-white d-flex icon fs-5"></i>
        </div>
      </label>

      <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Orange_Theme')"
        for="orange-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
          <i class="ti ti-check text-white d-flex icon fs-5"></i>
        </div>
      </label>
    </div>

    <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
    <div class="d-flex flex-row gap-3 customizer-box" role="group">
      <div>
        <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary" for="vertical-layout"><i
            class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical</label>
      </div>
      <div>
        <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary" for="horizontal-layout"><i
            class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal</label>
      </div>
    </div>

    <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

    <div class="d-flex flex-row gap-3 customizer-box" role="group">
      <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary" for="boxed-layout"><i
          class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed</label>

      <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary" for="full-layout"><i
          class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full</label>
    </div>

    <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
    <div class="d-flex flex-row gap-3 customizer-box" role="group">
      <a href="javascript:void(0)" class="fullsidebar">
        <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary" for="full-sidebar"><i
            class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full</label>
      </a>
      <div>
        <input type="radio" class="btn-check " name="sidebar-type" id="mini-sidebar" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary" for="mini-sidebar"><i
            class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse</label>
      </div>
    </div>

    <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

    <div class="d-flex flex-row gap-3 customizer-box" role="group">
      <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary" for="card-with-border"><i
          class="icon ti ti-border-outer fs-7 me-2"></i>Border</label>

      <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary" for="card-without-border"><i
          class="icon ti ti-border-none fs-7 me-2"></i>Shadow</label>
    </div>
  </div>
</div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
  </div>
  <script src="../assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="../assets/js/theme/app.dark.init.js"></script>
<script src="../assets/js/theme/theme.js"></script>
<script src="../assets/js/theme/app.min.js"></script>
<script src="../assets/js/theme/sidebarmenu.js"></script>
<script src="../assets/js/theme/feather.min.js"></script>

<!-- solar icons -->
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="../assets/libs/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/js/extra-libs/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
  <script src="../assets/js/dashboards/dashboard.js"></script>
</body>

>>>>>>> 53b758506da8af071e34755d3580a2e7dd1a92ab
</html>
