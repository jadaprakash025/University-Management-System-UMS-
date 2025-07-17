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

    <title>Vertical Layouts - Forms | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

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

    <!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
  <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ums"; // Change this to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);
    $notice_date = $conn->real_escape_string($_POST['notice_date']);
    $link = !empty($_POST['link']) ? $conn->real_escape_string($_POST['link']) : null;

    // Insert data into the notices table
    $sql = "INSERT INTO notices (title, content, notice_date, link) 
            VALUES ('$title', '$content', '$notice_date', '$link')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Notice added successfully!',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'Add_Notic.php'; // Replace 'your_page.php' with your redirect URL
                    }
                });
            });
        </script>";
    } else {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Error: " . $conn->error . "',
                    confirmButtonText: 'OK'
                });
            });
        </script>";
    }
}

// Close connection
$conn->close();
?>




  
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <?php include("menu.php") ;?>

        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
         <!-- Navbar -->
         <?php include("navbar.php") ;?> 
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->


            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Notic/</span>Add Departments Notic</h4>
              <div class="main-page">
                    <div class="container-fluid">
                        <div class="row page-title-div">
                            <div class="col-md-10">
                                <h2 class="title">Add Notic</h2>
                                
                            </div>
                            <a  type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#noticeModal" href="u_studentAdd.php" class="btn btn-primary btn-info"><span class="bi bi-person-fill"><i
                                        class="fa fa-plus"></i></span>Add New Notic</a>

                        </div>
                        <!-- <div class="row breadcrumb-div">
                            <div class="col-md-6">
                                <ul class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                    <li> Students</li>
                                    <li class="active">Manage Student Admission Records</li>
                                    
                                </ul>
                            </div>
                        </div> -->
                    </div>

                     <!-- Modal Backdrop -->
                     
                        <!-- Button trigger modal -->
                     

 <!-- Modal -->
<div class="modal fade" id="noticeModal" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog">
    <form class="modal-content" method="POST" action="#" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="noticeModalTitle">Add Notice</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="noticeTitle" class="form-label">Notice Title</label>
          <input
            class="form-control"
            type="text"
            name="title"
            id="noticeTitle"
            placeholder="Enter notice title"
            required
          />
        </div>
        <div class="mb-3">
          <label for="noticeContent" class="form-label">Notice Content</label>
          <textarea
            class="form-control"
            name="content"
            id="noticeContent"
            rows="4"
            placeholder="Enter notice content"
            required
          ></textarea>
        </div>
        <div class="mb-3">
          <label for="noticeDate" class="form-label">Notice Date</label>
          <input
            class="form-control"
            type="date"
            name="notice_date"
            id="noticeDate"
            required
          />
        </div>
        <div class="mb-3">
          <label for="noticeLink" class="form-label">Link (optional)</label>
          <input
            class="form-control"
            type="url"
            name="link"
            id="noticeLink"
            placeholder="Enter link (if any)"
          />
        </div>
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn btn-outline-secondary"
          data-bs-dismiss="modal"
        >
          Close
        </button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>

              <br>      

              <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ums"; // Change this to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a delete request was made
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $sql_delete = "DELETE FROM notices WHERE id = $delete_id";
    if ($conn->query($sql_delete) === TRUE) {
        echo "<script>
            Swal.fire({
                title: 'Deleted!',
                text: 'Notice deleted successfully.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'Add_Notic.php'; // Replace with your actual page name
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                title: 'Error!',
                text: 'Error deleting notice: " . $conn->error . "',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        </script>";
    }
}

// Fetch data from the notices table
$sql = "SELECT id, title, content, notice_date, link, created_at FROM notices";
$result = $conn->query($sql);
?>

<!-- Bordered Table -->
<div class="card">
    <h5 class="card-header">Notices Table</h5>
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Notice Date</th>
                        <th>Link</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0) : ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo htmlspecialchars($row['title']); ?></td>
                                <td><?php echo htmlspecialchars($row['content']); ?></td>
                                <td><?php echo date('Y-m-d', strtotime($row['notice_date'])); ?></td>
                                <td><?php echo $row['link'] ? '<a href="' . htmlspecialchars($row['link']) . '" target="_blank">Link</a>' : 'N/A'; ?></td>
                                <td><?php echo date('Y-m-d H:i:s', strtotime($row['created_at'])); ?></td>
                                <td>
                                    <!-- Delete Button -->
                                    <a href="#" 
                                       onclick="confirmDelete(<?php echo $row['id']; ?>)" 
                                       class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="7" class="text-center">No notices found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--/ Bordered Table -->

<!-- Include SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "?delete_id=" + id;
            }
        });
    }
</script>

<?php
$conn->close(); // Close the database connection
?>
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