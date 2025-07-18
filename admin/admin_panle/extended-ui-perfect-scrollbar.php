<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Perfect Scrollbar - Extended UI | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

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
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include("menu.php") ;?>


        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
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
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
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
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
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
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Extended UI /</span> Perfect Scrollbar
              </h4>

              <div class="row">
                <!-- Vertical Scrollbar -->
                <div class="col-md-6 col-sm-12">
                  <div class="card overflow-hidden mb-4" style="height: 300px">
                    <h5 class="card-header">Vertical Scrollbar</h5>
                    <div class="card-body" id="vertical-example">
                      <p>
                        Sweet roll I love I love. Tiramisu I love soufflé cake tart sweet roll cotton candy cookie.
                        Macaroon biscuit dessert. Bonbon cake soufflé jelly gummi bears lemon drops. Chocolate bar I
                        love macaroon danish candy pudding. Jelly carrot cake I love tart cake bear claw macaroon candy
                        candy canes. Muffin gingerbread sweet jujubes croissant sweet roll. Topping muffin carrot cake
                        sweet. Toffee chocolate muffin I love croissant. Donut carrot cake ice cream ice cream. Wafer I
                        love pie danish marshmallow cheesecake oat cake pie I love. Icing pie chocolate marzipan jelly
                        ice cream cake.
                      </p>
                      <p>
                        Marzipan oat cake caramels chocolate. Lemon drops cheesecake jelly beans sweet icing pudding
                        croissant. Donut candy canes carrot cake soufflé. Croissant candy wafer pie I love oat cake
                        lemon drops caramels jujubes. I love macaroon halvah liquorice cake. Danish sweet roll pudding
                        cookie sweet roll I love. Jelly cake I love bear claw jujubes dragée gingerbread. I love cotton
                        candy carrot cake halvah biscuit I love macaroon cheesecake tootsie roll. Chocolate cotton candy
                        biscuit I love fruitcake cotton candy biscuit tart gingerbread. Powder oat cake I love.
                        Cheesecake candy canes macaroon I love wafer I love sweet roll ice cream. Toffee cookie macaroon
                        lemon drops tart candy canes. Gummies gummies pie tiramisu I love bear claw cheesecake.
                      </p>
                      <p>
                        Marzipan oat cake caramels chocolate. Lemon drops cheesecake jelly beans sweet icing pudding
                        croissant. Donut candy canes carrot cake soufflé. Croissant candy wafer pie I love oat cake
                        lemon drops caramels jujubes. I love macaroon halvah liquorice cake. Danish sweet roll pudding
                        cookie sweet roll I love. Jelly cake I love bear claw jujubes dragée gingerbread. I love cotton
                        candy carrot cake halvah biscuit I love macaroon cheesecake tootsie roll. Chocolate cotton candy
                        biscuit I love fruitcake cotton candy biscuit tart gingerbread. Powder oat cake I love.
                        Cheesecake candy canes macaroon I love wafer I love sweet roll ice cream. Toffee cookie macaroon
                        lemon drops tart candy canes. Gummies gummies pie tiramisu I love bear claw cheesecake.
                      </p>
                      <p>
                        Sweet roll I love I love. Tiramisu I love soufflé cake tart sweet roll cotton candy cookie.
                        Macaroon biscuit dessert. Bonbon cake soufflé jelly gummi bears lemon drops. Chocolate bar I
                        love macaroon danish candy pudding. Jelly carrot cake I love tart cake bear claw macaroon candy
                        candy canes. Muffin gingerbread sweet jujubes croissant sweet roll. Topping muffin carrot cake
                        sweet. Toffee chocolate muffin I love croissant. Donut carrot cake ice cream ice cream. Wafer I
                        love pie danish marshmallow cheesecake oat cake pie I love. Icing pie chocolate marzipan jelly
                        ice cream cake.
                      </p>
                      <p>
                        Sweet roll I love I love. Tiramisu I love soufflé cake tart sweet roll cotton candy cookie.
                        Macaroon biscuit dessert. Bonbon cake soufflé jelly gummi bears lemon drops. Chocolate bar I
                        love macaroon danish candy pudding. Jelly carrot cake I love tart cake bear claw macaroon candy
                        candy canes. Muffin gingerbread sweet jujubes croissant sweet roll. Topping muffin carrot cake
                        sweet. Toffee chocolate muffin I love croissant. Donut carrot cake ice cream ice cream. Wafer I
                        love pie danish marshmallow cheesecake oat cake pie I love. Icing pie chocolate marzipan jelly
                        ice cream cake.
                      </p>
                      <p>
                        Sweet roll I love I love. Tiramisu I love soufflé cake tart sweet roll cotton candy cookie.
                        Macaroon biscuit dessert. Bonbon cake soufflé jelly gummi bears lemon drops. Chocolate bar I
                        love macaroon danish candy pudding. Jelly carrot cake I love tart cake bear claw macaroon candy
                        candy canes. Muffin gingerbread sweet jujubes croissant sweet roll. Topping muffin carrot cake
                        sweet. Toffee chocolate muffin I love croissant. Donut carrot cake ice cream ice cream. Wafer I
                        love pie danish marshmallow cheesecake oat cake pie I love. Icing pie chocolate marzipan jelly
                        ice cream cake.
                      </p>
                    </div>
                  </div>
                </div>
                <!--/ Vertical Scrollbar -->

                <!-- Horizontal Scrollbar -->
                <div class="col-md-6 col-sm-12">
                  <div class="card overflow-hidden mb-4" style="height: 300px">
                    <h5 class="card-header">Horizontal Scrollbar</h5>
                    <div class="card-body" id="horizontal-example">
                      <img src="../assets/img/backgrounds/18.jpg" alt="scrollbar-image" />
                    </div>
                  </div>
                </div>
                <!--/ Horizontal Scrollbar -->

                <!-- Vertical & Horizontal Scrollbars -->
                <div class="col-12">
                  <div class="card overflow-hidden" style="height: 500px">
                    <h5 class="card-header">Vertical & Horizontal Scrollbars</h5>
                    <div class="card-body" id="both-scrollbars-example">
                      <img src="../assets/img/backgrounds/18.jpg" alt="scrollbar-image" />
                    </div>
                  </div>
                </div>
                <!--/ Vertical & Horizontal Scrollbars -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php include("footer.php") ;?>

            
            <!-- / Footer -->
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
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
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/extended-ui-perfect-scrollbar.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
