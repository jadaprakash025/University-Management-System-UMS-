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
$dbname = "ums"; // Use your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $event_date = $_POST['event_date'];
    $event_info = $_POST['event_info'];

    // Handle file upload if an image is provided
    $event_image = null;
    if (isset($_FILES['event_image']) && $_FILES['event_image']['error'] == 0) {
        $target_dir = "event_uploads_image/University_Event/";
        $event_image = $target_dir . basename($_FILES["event_image"]["name"]);
        move_uploaded_file($_FILES["event_image"]["tmp_name"], $event_image);
    }

    // SQL query to insert data
    $sql = "INSERT INTO events (event_date, event_info, event_image) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $event_date, $event_info, $event_image);

    if ($stmt->execute()) {
        // Success message using SweetAlert
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Event Added',
                text: 'The new event was added successfully!',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location = 'Add_Event.php'; // Redirect to another page if needed
            });
        </script>";
    } else {
        // Error message using SweetAlert
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'There was an error adding the event: " . $stmt->error . "'
            });
        </script>";
    }

    // Close connections
    // $stmt->close();
    // $conn->close();
}
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Events/</span> Add Event</h4>
              <div class="main-page">
                    <div class="container-fluid">
                        <div class="row page-title-div">
                            <div class="col-md-10">
                                <h2 class="title">Saurashtra University Event Management System</h2>
                                
                            </div>
                            <a  type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#backDropModal" href="u_studentAdd.php" class="btn btn-primary btn-info"><span class="bi bi-person-fill"><i
                                        class="fa fa-plus"></i></span>Add New Event</a>

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
<div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog">
    <form class="modal-content" method="POST" action="#" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="backDropModalTitle">Event Details</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <div class="row g-2">
          <div class="col mb-3">
            <label for="html5-date-input" class="form-label">Event Date</label>
            <input class="form-control" type="date" name="event_date" id="html5-date-input" required />
          </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label for="eventInfoTextarea" class="form-label">Event Information</label>
            <textarea class="form-control" name="event_info" id="eventInfoTextarea" rows="3" required></textarea>
          </div>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Event Images</label>
          <input class="form-control" type="file" name="event_image" id="formFile" accept="image/*" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>



              <br>      

<?php


// Fetch data from the events table
$sql = "SELECT * FROM events";
$result = $conn->query($sql);
?>

<!-- Bordered Table -->
<div class="card">
    <h5 class="card-header">Event Table</h5>
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Event ID</th>
                        <th>Event Date</th>
                        <th>Event Info</th>
                        <th>Event Image</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0) : ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo date('Y-m-d', strtotime($row['event_date'])); ?></td>
                                <td><?php echo htmlspecialchars($row['event_info']); ?></td>
                                <td>
                                    <?php if ($row['event_image']) : ?>
                                        <img src="<?php echo $row['event_image']; ?>" alt="Event Image" style="width: 50px; height: 50px;" />
                                    <?php else : ?>
                                        No Image
                                    <?php endif; ?>
                                </td>
                                <td><?php echo date('Y-m-d H:i:s', strtotime($row['created_at'])); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="5" class="text-center">No events found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--/ Bordered Table -->

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