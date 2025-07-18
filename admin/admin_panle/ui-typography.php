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

    <title>Typography - UI elements | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

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
              <h4 class="fw-bold py-3 mb-4">Typography</h4>

              <div class="row">
                <!-- Headings -->
                <div class="col-lg">
                  <div class="card mb-4">
                    <h5 class="card-header">Headings</h5>
                    <table class="table table-borderless">
                      <tbody>
                        <tr>
                          <td class="align-middle"><small class="text-light fw-semibold">Heading 1</small></td>
                          <td class="py-3">
                            <h1 class="mb-0">Bootstrap heading</h1>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle"><small class="text-light fw-semibold">Heading 2</small></td>
                          <td class="py-3">
                            <h2 class="mb-0">Bootstrap heading</h2>
                          </td>
                        </tr>
                        <tr>
                          <td><small class="text-light fw-semibold">Heading 3</small></td>
                          <td class="py-3">
                            <h3 class="mb-0">Bootstrap heading</h3>
                          </td>
                        </tr>
                        <tr>
                          <td><small class="text-light fw-semibold">Heading 4</small></td>
                          <td class="py-3">
                            <h4 class="mb-0">Bootstrap heading</h4>
                          </td>
                        </tr>
                        <tr>
                          <td><small class="text-light fw-semibold">Heading 5</small></td>
                          <td class="py-3">
                            <h5 class="mb-0">Bootstrap heading</h5>
                          </td>
                        </tr>
                        <tr>
                          <td><small class="text-light fw-semibold">Heading 6</small></td>
                          <td class="py-3">
                            <h6 class="mb-0">Bootstrap heading</h6>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- Customizing headings -->
                <div class="col-lg">
                  <div class="card mb-4">
                    <h5 class="card-header">Customizing Headings <small class="text-muted ms-1">Default</small></h5>
                    <table class="table table-borderless">
                      <tbody>
                        <tr>
                          <td class="align-middle"><small class="text-light fw-semibold">Heading 1</small></td>
                          <td class="py-3">
                            <h1 class="mb-0">Bootstrap <small class="text-muted">heading</small></h1>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle"><small class="text-light fw-semibold">Heading 2</small></td>
                          <td class="py-3">
                            <h2 class="mb-0">Bootstrap <small class="text-muted">heading</small></h2>
                          </td>
                        </tr>
                        <tr>
                          <td><small class="text-light fw-semibold">Heading 3</small></td>
                          <td class="py-3">
                            <h3 class="mb-0">Bootstrap <small class="text-muted">heading</small></h3>
                          </td>
                        </tr>
                        <tr>
                          <td><small class="text-light fw-semibold">Heading 4</small></td>
                          <td class="py-3">
                            <h4 class="mb-0">Bootstrap <small class="text-muted">heading</small></h4>
                          </td>
                        </tr>
                        <tr>
                          <td><small class="text-light fw-semibold">Heading 5</small></td>
                          <td class="py-3">
                            <h5 class="mb-0">Bootstrap <small class="text-muted">heading</small></h5>
                          </td>
                        </tr>
                        <tr>
                          <td><small class="text-light fw-semibold">Heading 6</small></td>
                          <td class="py-3">
                            <h6 class="mb-0">Bootstrap <small class="text-muted">heading</small></h6>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- Display headings -->
                <div class="col-lg">
                  <div class="card mb-4">
                    <h5 class="card-header">Display headings</h5>
                    <table class="table table-borderless">
                      <tbody>
                        <tr>
                          <td class="align-middle"><small class="text-light fw-semibold">Display 1</small></td>
                          <td class="py-3">
                            <h1 class="display-1 mb-0">Display 1</h1>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle"><small class="text-light fw-semibold">Display 2</small></td>
                          <td class="py-3">
                            <h1 class="display-2 mb-0">Display 2</h1>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle"><small class="text-light fw-semibold">Display 3</small></td>
                          <td class="py-3">
                            <h1 class="display-3 mb-0">Display 3</h1>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle"><small class="text-light fw-semibold">Display 4</small></td>
                          <td class="py-3">
                            <h1 class="display-4 mb-0">Display 4</h1>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle"><small class="text-light fw-semibold">Display 5</small></td>
                          <td class="py-3">
                            <h1 class="display-5 mb-0">Display 5</h1>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle"><small class="text-light fw-semibold">Display 6</small></td>
                          <td class="py-3">
                            <h1 class="display-6 mb-0">Display 6</h1>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- Paragraph -->
                <div class="col-lg">
                  <div class="card mb-4">
                    <h5 class="card-header">Paragraph</h5>
                    <table class="table table-borderless">
                      <tbody>
                        <tr>
                          <td class="align-middle"><small class="text-light fw-semibold">Paragraph</small></td>
                          <td class="py-3">
                            <p class="mb-0">
                              Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est
                              non commodo luctus. Duis mollis, est non commodo luctus.Duis mollis, est non commodo
                              luctus.
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle"><small class="text-light fw-semibold">Lead Text</small></td>
                          <td class="py-4">
                            <p class="lead mb-0">
                              Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est
                              non commodo luctus.Duis mollis, est non commodo luctus.
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle"><small class="text-light fw-semibold">Muted text</small></td>
                          <td class="py-3">
                            <p class="text-muted mb-0">
                              Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est
                              non commodo luctus.
                            </p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- Inline text elements -->
                <div class="col">
                  <div class="card mb-4">
                    <h5 class="card-header">Inline Text Elements</h5>
                    <div class="card-body">
                      <table class="table table-borderless">
                        <tbody>
                          <tr>
                            <td class="align-middle"><small class="text-light fw-semibold">Text Highlight</small></td>
                            <td class="py-3">
                              <p class="mb-0">You can use the mark tag to <mark>highlight</mark> text.</p>
                            </td>
                          </tr>
                          <tr>
                            <td class="align-middle"><small class="text-light fw-semibold">Deleted Text</small></td>
                            <td class="py-3">
                              <p class="mb-0"><del>This line of text is meant to be treated as deleted text.</del></p>
                            </td>
                          </tr>
                          <tr>
                            <td><small class="text-light fw-semibold">No Longer Correct</small></td>
                            <td class="py-3">
                              <p class="mb-0"><s>This line of text is meant to be treated as no longer accurate.</s></p>
                            </td>
                          </tr>
                          <tr>
                            <td><small class="text-light fw-semibold">Addition</small></td>
                            <td class="py-3">
                              <p class="mb-0">
                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                              </p>
                            </td>
                          </tr>
                          <tr>
                            <td><small class="text-light fw-semibold">Underlined</small></td>
                            <td class="py-3">
                              <p class="mb-0"><u>This line of text will render as underlined</u></p>
                            </td>
                          </tr>
                          <tr>
                            <td><small class="text-light fw-semibold">Fine Print</small></td>
                            <td class="py-3">
                              <p class="mb-0"><small>This line of text is meant to be treated as fine print.</small></p>
                            </td>
                          </tr>
                          <tr>
                            <td><small class="text-light fw-semibold">Bold Text</small></td>
                            <td class="py-3">
                              <p class="mb-0"><strong>This line rendered as bold text.</strong></p>
                            </td>
                          </tr>
                          <tr>
                            <td><small class="text-light fw-semibold">Italicized Text</small></td>
                            <td class="py-3">
                              <p class="mb-0"><em>This line rendered as italicized text.</em></p>
                            </td>
                          </tr>
                          <tr>
                            <td><small class="text-light fw-semibold">Abbreviations</small></td>
                            <td>
                              <p><abbr title="attribute">attr</abbr></p>
                              <p class="mb-0"><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- Blockquote -->
                <div class="col-lg">
                  <div class="card mb-4 mb-lg-0">
                    <h5 class="card-header">Blockquote</h5>
                    <div class="card-body">
                      <blockquote class="blockquote mt-3">
                        <p class="mb-0">A well-known quote, contained in a blockquote element.</p>
                      </blockquote>
                    </div>
                    <hr class="m-0" />
                    <div class="card-body">
                      <small class="text-light fw-semibold">Naming a source</small>
                      <figure class="mt-2">
                        <blockquote class="blockquote">
                          <p class="mb-0">A well-known quote, contained in a blockquote element.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                          Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption>
                      </figure>
                    </div>
                    <hr class="m-0" />
                    <div class="card-body">
                      <small class="text-light fw-semibold">Align Center</small>
                      <figure class="text-center mt-2">
                        <blockquote class="blockquote">
                          <p class="mb-0">A well-known quote, contained in a blockquote element.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                          Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption>
                      </figure>
                    </div>
                    <hr class="m-0" />
                    <div class="card-body">
                      <small class="text-light fw-semibold">Align Right</small>
                      <figure class="text-end mt-2">
                        <blockquote class="blockquote">
                          <p class="mb-0">A well-known quote, contained in a blockquote element.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                          Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption>
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="col-lg">
                  <div class="card">
                    <h5 class="card-header">Lists</h5>
                    <div class="card-body">
                      <small class="text-light fw-semibold">Unstyled</small>
                      <ul class="list-unstyled mt-2">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>
                          Nulla volutpat aliquam velit
                          <ul>
                            <li>Phasellus iaculis neque</li>
                            <li>Ac tristique libero volutpat at</li>
                          </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                      </ul>
                    </div>
                    <hr class="m-0" />
                    <div class="card-body">
                      <small class="text-light fw-semibold">Inline</small>
                      <ul class="list-inline mt-2">
                        <li class="list-inline-item">Lorem ipsum</li>
                        <li class="list-inline-item">Phasellus iaculis</li>
                        <li class="list-inline-item">Nulla volutpat</li>
                      </ul>
                    </div>
                    <hr class="m-0" />
                    <div class="card-body">
                      <small class="text-light fw-semibold">Description list alignment</small>
                      <dl class="row mt-2">
                        <dt class="col-sm-3">Description lists</dt>
                        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                        <dt class="col-sm-3">Euismod</dt>
                        <dd class="col-sm-9">
                          <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
                        </dd>

                        <dt class="col-sm-3">Malesuada porta</dt>
                        <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                        <dd class="col-sm-9">
                          Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum.
                        </dd>

                        <dt class="col-sm-3">Nesting</dt>
                        <dd class="col-sm-9">
                          <dl class="row">
                            <dt class="col-sm-4">Nested definition list</dt>
                            <dd class="col-sm-8">
                              Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.
                            </dd>
                          </dl>
                        </dd>
                      </dl>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
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
