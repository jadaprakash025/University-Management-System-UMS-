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

    <title>Buttons - UI elements | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

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
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">UI elements /</span>
                Buttons
              </h4>

              <div class="row">
                <!-- Basic Buttons -->

                <div class="col-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Basic Buttons</h5>
                    <div class="card-body">
                      <small class="text-light fw-semibold">Default</small>
                      <div class="demo-inline-spacing">
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-dark">Dark</button>
                      </div>
                    </div>
                    <hr class="m-0" />
                    <div class="card-body">
                      <small class="text-light fw-semibold">Rounded</small>
                      <div class="demo-inline-spacing">
                        <button type="button" class="btn rounded-pill btn-primary">Primary</button>
                        <button type="button" class="btn rounded-pill btn-secondary">Secondary</button>
                        <button type="button" class="btn rounded-pill btn-success">Success</button>
                        <button type="button" class="btn rounded-pill btn-danger">Danger</button>
                        <button type="button" class="btn rounded-pill btn-warning">Warning</button>
                        <button type="button" class="btn rounded-pill btn-info">Info</button>
                        <button type="button" class="btn rounded-pill btn-dark">Dark</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Outline Buttons -->

                <div class="col-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Outline Buttons</h5>
                    <div class="card-body">
                      <small class="text-light fw-semibold">Default</small>
                      <div class="demo-inline-spacing">
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                        <button type="button" class="btn btn-outline-success">Success</button>
                        <button type="button" class="btn btn-outline-danger">Danger</button>
                        <button type="button" class="btn btn-outline-warning">Warning</button>
                        <button type="button" class="btn btn-outline-info">Info</button>
                        <button type="button" class="btn btn-outline-dark">Dark</button>
                      </div>
                    </div>
                    <hr class="m-0" />
                    <div class="card-body">
                      <small class="text-light fw-semibold">Rounded</small>
                      <div class="demo-inline-spacing">
                        <button type="button" class="btn rounded-pill btn-outline-primary">Primary</button>
                        <button type="button" class="btn rounded-pill btn-outline-secondary">Secondary</button>
                        <button type="button" class="btn rounded-pill btn-outline-success">Success</button>
                        <button type="button" class="btn rounded-pill btn-outline-danger">Danger</button>
                        <button type="button" class="btn rounded-pill btn-outline-warning">Warning</button>
                        <button type="button" class="btn rounded-pill btn-outline-info">Info</button>
                        <button type="button" class="btn rounded-pill btn-outline-dark">Dark</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Buttons with Icons -->

                <div class="col-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Buttons with Icons</h5>
                    <div class="card-body">
                      <div class="row gy-3">
                        <div class="col-md-6">
                          <small class="text-light fw-semibold">Basic</small>
                          <div class="demo-inline-spacing">
                            <button type="button" class="btn btn-primary">
                              <span class="tf-icons bx bx-pie-chart-alt"></span>&nbsp; Primary
                            </button>
                            <button type="button" class="btn btn-secondary">
                              <span class="tf-icons bx bx-bell"></span>&nbsp; Secondary
                            </button>
                          </div>
                          <div class="demo-inline-spacing">
                            <button type="button" class="btn rounded-pill btn-primary">
                              <span class="tf-icons bx bx-pie-chart-alt"></span>&nbsp; Primary
                            </button>
                            <button type="button" class="btn rounded-pill btn-secondary">
                              <span class="tf-icons bx bx-bell"></span>&nbsp; Secondary
                            </button>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <small class="text-light fw-semibold">Outline</small>
                          <div class="demo-inline-spacing">
                            <button type="button" class="btn btn-outline-primary">
                              <span class="tf-icons bx bx-pie-chart-alt"></span>&nbsp; Primary
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <span class="tf-icons bx bx-bell"></span>&nbsp; Secondary
                            </button>
                          </div>
                          <div class="demo-inline-spacing">
                            <button type="button" class="btn rounded-pill btn-outline-primary">
                              <span class="tf-icons bx bx-pie-chart-alt"></span>&nbsp; Primary
                            </button>
                            <button type="button" class="btn rounded-pill btn-outline-secondary">
                              <span class="tf-icons bx bx-bell"></span>&nbsp; Secondary
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="m-0" />
                    <div class="card-body">
                      <div class="row gy-3">
                        <div class="col-md-6">
                          <small class="text-light fw-semibold">Basic</small>
                          <div class="demo-inline-spacing">
                            <button type="button" class="btn btn-icon btn-primary">
                              <span class="tf-icons bx bx-pie-chart-alt"></span>
                            </button>
                            <button type="button" class="btn btn-icon btn-secondary">
                              <span class="tf-icons bx bx-bell"></span>
                            </button>
                            <button type="button" class="btn rounded-pill btn-icon btn-primary">
                              <span class="tf-icons bx bx-pie-chart-alt"></span>
                            </button>
                            <button type="button" class="btn rounded-pill btn-icon btn-secondary">
                              <span class="tf-icons bx bx-bell"></span>
                            </button>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <small class="text-light fw-semibold">Outline</small>
                          <div class="demo-inline-spacing">
                            <button type="button" class="btn btn-icon btn-outline-primary">
                              <span class="tf-icons bx bx-pie-chart-alt"></span>
                            </button>
                            <button type="button" class="btn btn-icon btn-outline-secondary">
                              <span class="tf-icons bx bx-bell"></span>
                            </button>
                            <button type="button" class="btn rounded-pill btn-icon btn-outline-primary">
                              <span class="tf-icons bx bx-pie-chart-alt"></span>
                            </button>
                            <button type="button" class="btn rounded-pill btn-icon btn-outline-secondary">
                              <span class="tf-icons bx bx-bell"></span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Button Options -->
                <div class="col-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Button Options</h5>
                    <div class="card-body">
                      <small class="text-light fw-semibold">Sizes</small>
                      <div class="demo-inline-spacing">
                        <button type="button" class="btn btn-xl btn-primary">Button xl</button>
                        <button type="button" class="btn btn-lg btn-primary">Button lg</button>
                        <button type="button" class="btn btn-primary">Button</button>
                        <button type="button" class="btn btn-sm btn-primary">Button sm</button>
                        <button type="button" class="btn btn-xs btn-primary">Button xs</button>
                      </div>
                    </div>
                    <hr class="m-0" />
                    <div class="card-body">
                      <small class="text-light fw-semibold">Buttons State</small>
                      <div class="demo-inline-spacing">
                        <button type="button" class="btn btn-primary">Normal</button>
                        <button type="button" class="btn btn-primary active">Active</button>
                        <button type="button" class="btn btn-primary" disabled>Disabled</button>
                      </div>
                    </div>
                    <hr class="m-0" />
                    <div class="card-body">
                      <small class="text-light fw-semibold">Block level buttons</small>
                      <div class="row mt-3">
                        <div class="d-grid gap-2 col-lg-6 mx-auto">
                          <button class="btn btn-primary btn-lg" type="button">Button</button>
                          <button class="btn btn-secondary btn-lg" type="button">Button</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Button Plugin -->
                <div class="col-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Button Plugin</h5>
                    <div class="card-body">
                      <div class="row gy-3">
                        <div class="col-xl-3">
                          <div class="text-light small fw-semibold">Toggle states</div>
                          <div class="demo-vertical-spacing">
                            <button
                              type="button"
                              class="btn btn-primary d-block"
                              data-bs-toggle="button"
                              autocomplete="off"
                            >
                              Toggle button
                            </button>
                            <button
                              type="button"
                              class="btn btn-primary active d-block"
                              data-bs-toggle="button"
                              autocomplete="off"
                              aria-pressed="true"
                            >
                              Active toggle button
                            </button>
                            <button
                              type="button"
                              class="btn btn-primary d-block"
                              disabled
                              data-bs-toggle="button"
                              autocomplete="off"
                            >
                              Disabled toggle button
                            </button>
                          </div>
                        </div>
                        <div class="col-xl-3">
                          <div class="text-light small fw-semibold">Checkbox toggle buttons</div>
                          <div class="demo-vertical-spacing">
                            <div class="d-block">
                              <input type="checkbox" class="btn-check" id="btn-check" autocomplete="off" />
                              <label class="btn btn-primary" for="btn-check">Single toggle</label>
                            </div>
                            <div class="d-block">
                              <input type="checkbox" class="btn-check" id="btn-check-2" checked autocomplete="off" />
                              <label class="btn btn-primary" for="btn-check-2">Checked</label>
                            </div>
                            <div class="d-block">
                              <input type="checkbox" class="btn-check" id="btn-check-3" checked autocomplete="off" />
                              <label class="btn btn-primary" for="btn-check-3">Checked</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="text-light small fw-semibold">Checkbox and radio</div>
                          <div class="demo-vertical-spacing">
                            <!-- Checkbox -->
                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                              <input type="checkbox" class="btn-check" id="btncheck1" checked autocomplete="off" />
                              <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1 (pre-checked)</label>
                              <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" />
                              <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>
                              <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off" />
                              <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
                            </div>
                            <br />
                            <!-- Radio -->
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                              <input
                                type="radio"
                                class="btn-check"
                                name="btnradio"
                                id="btnradio1"
                                checked
                                autocomplete="off"
                              />
                              <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>
                              <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" />
                              <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>
                              <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" />
                              <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Button Group -->
                <div class="col-12">
                  <div class="card">
                    <h5 class="card-header">Button Group</h5>
                    <div class="card-body">
                      <div class="row g-4">
                        <div class="col-md-6">
                          <small class="text-light fw-semibold">Basic</small>
                          <div class="mt-3">
                            <div class="btn-group" role="group" aria-label="Basic example">
                              <button type="button" class="btn btn-secondary">Left</button>
                              <button type="button" class="btn btn-secondary">Middle</button>
                              <button type="button" class="btn btn-secondary">Right</button>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <small class="text-light fw-semibold">Outline</small>
                          <div class="mt-3">
                            <div class="btn-group" role="group" aria-label="Basic example">
                              <button type="button" class="btn btn-outline-secondary">Left</button>
                              <button type="button" class="btn btn-outline-secondary">Middle</button>
                              <button type="button" class="btn btn-outline-secondary">Right</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="m-0" />
                    <div class="card-body">
                      <div class="row">
                        <div class="col-xl-6 mb-xl-0 mb-3">
                          <small class="text-light fw-semibold">Button Toolbar</small>
                          <div
                            class="btn-toolbar demo-inline-spacing"
                            role="toolbar"
                            aria-label="Toolbar with button groups"
                          >
                            <div class="btn-group" role="group" aria-label="First group">
                              <button type="button" class="btn btn-outline-secondary">
                                <i class="tf-icons bx bx-bell"></i>
                              </button>
                              <button type="button" class="btn btn-outline-secondary">
                                <i class="tf-icons bx bx-task"></i>
                              </button>
                              <button type="button" class="btn btn-outline-secondary">
                                <i class="tf-icons bx bx-check-shield"></i>
                              </button>
                              <button type="button" class="btn btn-outline-secondary">
                                <i class="tf-icons bx bx-comment-dots"></i>
                              </button>
                            </div>
                            <div class="btn-group" role="group" aria-label="Second group">
                              <button type="button" class="btn btn-outline-secondary">
                                <i class="tf-icons bx bx-bold"></i>
                              </button>
                              <button type="button" class="btn btn-outline-secondary">
                                <i class="tf-icons bx bx-italic"></i>
                              </button>
                              <button type="button" class="btn btn-outline-secondary">
                                <i class="tf-icons bx bx-underline"></i>
                              </button>
                            </div>
                            <div class="btn-group" role="group" aria-label="Third group">
                              <button type="button" class="btn btn-outline-secondary">
                                <i class="tf-icons bx bx-volume-full"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6">
                          <small class="text-light fw-semibold">Button Nesting</small>
                          <div class="mt-3">
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                              <button type="button" class="btn btn-outline-secondary">
                                <i class="tf-icons bx bx-car"></i>
                              </button>
                              <button type="button" class="btn btn-outline-secondary">
                                <i class="tf-icons bx bx-rocket"></i>
                              </button>
                              <button type="button" class="btn btn-outline-secondary">
                                <i class="tf-icons bx bx-bulb"></i>
                              </button>
                              <div class="btn-group" role="group">
                                <button
                                  id="btnGroupDrop1"
                                  type="button"
                                  class="btn btn-outline-secondary dropdown-toggle"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                  <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
