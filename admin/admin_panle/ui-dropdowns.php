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

    <title>Dropdowns - UI elements | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Dropdowns</h4>

              <div class="card mb-4" id="btn-dropdown-demo">
                <h5 class="card-header">Dropdowns</h5>

                <!-- Basic Dropdowns -->
                <div class="card-body">
                  <small class="text-light fw-semibold">Basic</small>
                  <div class="demo-inline-spacing">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-primary dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Primary
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-secondary dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Secondary
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-success dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Success
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-danger dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Danger
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-warning dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Warning
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-info dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Info
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Basic Dropdowns -->

                <hr class="m-0" />

                <!-- Outline Dropdowns -->
                <div class="card-body">
                  <small class="text-light fw-semibold">Outline</small>
                  <div class="demo-inline-spacing">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-outline-primary dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Primary
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-outline-secondary dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Secondary
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-outline-success dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Success
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-outline-danger dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Danger
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-outline-warning dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Warning
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-outline-info dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Info
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Basic Dropdowns -->
                <hr class="m-0" />
                <!-- Split Dropdowns -->
                <div class="card-body">
                  <small class="text-light fw-semibold">Split</small>
                  <div class="demo-inline-spacing">
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Primary</button>
                      <button
                        type="button"
                        class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <span class="visually-hidden">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button type="button" class="btn btn-secondary">Secondary</button>
                      <button
                        type="button"
                        class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <span class="visually-hidden">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button type="button" class="btn btn-success">Success</button>
                      <button
                        type="button"
                        class="btn btn-success dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <span class="visually-hidden">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button type="button" class="btn btn-danger">Danger</button>
                      <button
                        type="button"
                        class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <span class="visually-hidden">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button type="button" class="btn btn-warning">Warning</button>
                      <button
                        type="button"
                        class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <span class="visually-hidden">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button type="button" class="btn btn-info">Info</button>
                      <button
                        type="button"
                        class="btn btn-info dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <span class="visually-hidden">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Split Dropdowns -->

                <hr class="m-0" />

                <div class="card-body">
                  <div class="row gy-3">
                    <!-- Hidden Arrow Dropdowns -->
                    <div class="col-lg-3 col-sm-6 col-12">
                      <small class="text-light fw-semibold">Hidden arrow</small>
                      <div class="demo-inline-spacing">
                        <div class="btn-group">
                          <button
                            type="button"
                            class="btn btn-primary dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            Hidden arrow
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                            <li>
                              <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--/ Hidden Arrow Dropdowns -->
                    <!-- Dropdown with icon -->
                    <div class="col-lg-3 col-sm-6 col-12">
                      <small class="text-light fw-semibold">With Icon</small>
                      <div class="demo-inline-spacing">
                        <div class="btn-group" id="dropdown-icon-demo">
                          <button
                            type="button"
                            class="btn btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            <i class="bx bx-menu"></i> With Icon
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                ><i class="bx bx-chevron-right scaleX-n1-rtl"></i>Action</a
                              >
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                ><i class="bx bx-chevron-right scaleX-n1-rtl"></i>Another action</a
                              >
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                ><i class="bx bx-chevron-right scaleX-n1-rtl"></i>Something else here</a
                              >
                            </li>
                            <li>
                              <hr class="dropdown-divider" />
                            </li>
                            <li>
                              <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                ><i class="bx bx-chevron-right scaleX-n1-rtl"></i>Separated link</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--/ Dropdown with icon -->
                    <!-- Icon Dropdown -->
                    <div class="col-lg-3 col-sm-6 col-12">
                      <small class="text-light fw-semibold">Icon Dropdown</small>
                      <div class="demo-inline-spacing">
                        <div class="btn-group">
                          <button
                            type="button"
                            class="btn btn-primary btn-icon rounded-pill dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                            <li>
                              <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--/ Icon Dropdown -->
                  </div>
                </div>
              </div>

              <!-- Dropdown Variations -->
              <div class="card" id="dropdown-variation-demo">
                <h5 class="card-header">Dropdown Variations</h5>

                <!-- Dropdown Menu Alignment -->
                <div class="card-body">
                  <small class="text-light fw-semibold">Menu Alignment</small>
                  <div class="demo-inline-spacing">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-primary dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        End-aligned dropdown menu
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><button class="dropdown-item" type="button">Action</button></li>
                        <li><button class="dropdown-item" type="button">Another action</button></li>
                        <li><button class="dropdown-item" type="button">Something else here</button></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-primary dropdown-toggle"
                        data-bs-toggle="dropdown"
                        data-bs-display="static"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        Start-aligned but end-aligned when lg screen
                      </button>
                      <ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end">
                        <li><button class="dropdown-item" type="button">Action</button></li>
                        <li><button class="dropdown-item" type="button">Another action</button></li>
                        <li><button class="dropdown-item" type="button">Something else here</button></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-primary dropdown-toggle"
                        data-bs-toggle="dropdown"
                        data-bs-display="static"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        End-aligned but start-aligned when lg screen
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                        <li><button class="dropdown-item" type="button">Action</button></li>
                        <li><button class="dropdown-item" type="button">Another action</button></li>
                        <li><button class="dropdown-item" type="button">Something else here</button></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Dropdown Menu Alignment -->

                <hr class="m-0" />
                <!-- Dropdown Sizes -->

                <div class="card-body">
                  <small class="text-light fw-semibold">Sizes</small>
                  <div class="demo-inline-spacing">
                    <div class="btn-group">
                      <button
                        class="btn btn-primary btn-xl dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Extra large button
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button
                        class="btn btn-primary btn-lg dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Large button
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button
                        class="btn btn-primary btn-sm dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Small button
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button
                        class="btn btn-primary btn-xs dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Extra small button
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Dropdown Sizes -->

                <hr class="m-0" />
                <div class="card-body">
                  <div class="row gy-3">
                    <!-- Dropdown Directions -->
                    <div class="col-xl-6">
                      <small class="text-light fw-semibold">Directions</small>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="demo-inline-spacing">
                            <div class="btn-group">
                              <button
                                class="btn btn-primary dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                              >
                                Dropdown
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                <li>
                                  <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="demo-inline-spacing">
                            <div class="btn-group dropup">
                              <button
                                type="button"
                                class="btn btn-primary dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                Dropup
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                <li>
                                  <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="demo-inline-spacing">
                            <div class="btn-group dropend">
                              <button
                                type="button"
                                class="btn btn-primary dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                Dropend
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                <li>
                                  <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="demo-inline-spacing">
                            <div class="btn-group dropstart">
                              <button
                                class="btn btn-primary dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                              >
                                Dropstart
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                <li>
                                  <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--/ Dropdown Directions -->
                    <!-- Dropdown menu content -->
                    <div class="col-xl-6">
                      <small class="text-light fw-semibold">Menu Content</small>
                      <div class="demo-inline-spacing">
                        <div class="btn-group">
                          <button
                            type="button"
                            class="btn btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            Dropdown Header
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <h6 class="dropdown-header text-uppercase">Dropdown header</h6>
                            </li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                          </ul>
                        </div>
                        <div class="btn-group">
                          <button
                            type="button"
                            class="btn btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            Divider
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                            <li>
                              <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                          </ul>
                        </div>
                        <div class="btn-group">
                          <button
                            type="button"
                            class="btn btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            Text
                          </button>
                          <div class="dropdown-menu">
                            <div class="px-3 py-2 text-muted">
                              <p>Some example text that's free-flowing within the dropdown menu.</p>
                              <p class="mb-0">And this is more example text.</p>
                            </div>
                          </div>
                        </div>
                        <div class="btn-group">
                          <button
                            type="button"
                            class="btn btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            Forms
                          </button>
                          <div class="dropdown-menu dropdown-menu-end w-px-300">
                            <form class="p-4" onsubmit="return false">
                              <div class="mb-3">
                                <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                                <input
                                  type="email"
                                  class="form-control"
                                  id="exampleDropdownFormEmail1"
                                  placeholder="email@example.com"
                                />
                              </div>
                              <div class="mb-3">
                                <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                                <input
                                  type="password"
                                  class="form-control"
                                  id="exampleDropdownFormPassword1"
                                  placeholder="Password"
                                />
                              </div>
                              <div class="mb-3">
                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="dropdownCheck" />
                                  <label class="form-check-label" for="dropdownCheck"> Remember me </label>
                                </div>
                              </div>
                              <button type="button" class="btn btn-primary">Sign in</button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">New around here? Sign up</a>
                            <a class="dropdown-item" href="javascript:void(0)">Forgot password?</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--/ Dropdown menu content -->
                  </div>
                </div>

                <hr class="m-0" />
                <div class="card-body">
                  <div class="row gy-3">
                    <!-- Dropdown options -->
                    <div class="col-xl-6">
                      <small class="text-light fw-semibold"
                        >Options : Use <code>data-bs-offset</code> or <code>data-bs-reference</code> to change the
                        location of the dropdown.</small
                      >
                      <div class="demo-inline-spacing">
                        <div class="btn-group me-1">
                          <button
                            type="button"
                            class="btn btn-primary dropdown-toggle"
                            id="dropdownMenuOffset"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            data-bs-offset="10,20"
                          >
                            Offset
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                            <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                          </ul>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary">Reference</button>
                          <button
                            type="button"
                            class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                            id="dropdownMenuReference"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            data-bs-reference="parent"
                          >
                            <span class="visually-hidden">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                            <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                            <li>
                              <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--/ Dropdown options -->
                    <!-- Auto close behavior -->
                    <div class="col-xl-6">
                      <small class="text-light fw-semibold">Auto close behavior</small>
                      <div class="demo-inline-spacing">
                        <div class="btn-group">
                          <button
                            class="btn btn-primary dropdown-toggle"
                            type="button"
                            id="defaultDropdown"
                            data-bs-toggle="dropdown"
                            data-bs-auto-close="true"
                            aria-expanded="false"
                          >
                            Default
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                            <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                          </ul>
                        </div>
                        <div class="btn-group">
                          <button
                            class="btn btn-primary dropdown-toggle"
                            type="button"
                            id="dropdownMenuClickableOutside"
                            data-bs-toggle="dropdown"
                            data-bs-auto-close="inside"
                            aria-expanded="false"
                          >
                            Clickable outside
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                            <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                          </ul>
                        </div>
                        <div class="btn-group">
                          <button
                            class="btn btn-primary dropdown-toggle"
                            type="button"
                            id="dropdownMenuClickableInside"
                            data-bs-toggle="dropdown"
                            data-bs-auto-close="outside"
                            aria-expanded="false"
                          >
                            Clickable inside
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                            <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                          </ul>
                        </div>
                        <div class="btn-group">
                          <button
                            class="btn btn-primary dropdown-toggle"
                            type="button"
                            id="dropdownMenuClickable"
                            data-bs-toggle="dropdown"
                            data-bs-auto-close="false"
                            aria-expanded="false"
                          >
                            Manual close
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickable">
                            <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--/ Auto close behavior -->
                  </div>
                </div>
              </div>
              <!--/ Dropdown Variations -->
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

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
