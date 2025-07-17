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
$servername = "localhost"; // Your server name
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "ums"; // Change this to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and get input values
    $name = $conn->real_escape_string($_POST['name']);
    $designation = $conn->real_escape_string($_POST['designation']);
    $facebook_link = $conn->real_escape_string($_POST['facebook_link']);
    $twitter_link = $conn->real_escape_string($_POST['twitter_link']);
    $github_link = $conn->real_escape_string($_POST['github_link']);
    $linkedin_link = $conn->real_escape_string($_POST['linkedin_link']);
    
    // Handle file upload
    $target_directory = "teachers_uploads_image/";
    $image_url = $target_directory . basename($_FILES["image_url"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($image_url, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image_url"]["tmp_name"]);
    if($check === false) {
        echo "<script>Swal.fire('Error!', 'File is not an image.', 'error');</script>";
        $uploadOk = 0;
    }

    // Check file size (e.g., limit to 5MB)
    if ($_FILES["image_url"]["size"] > 5000000) {
        echo "<script>Swal.fire('Error!', 'Sorry, your file is too large.', 'error');</script>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if(!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
        echo "<script>Swal.fire('Error!', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.', 'error');</script>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>Swal.fire('Error!', 'Your file was not uploaded.', 'error');</script>";
    } else {
        // Try to upload file
        if (move_uploaded_file($_FILES["image_url"]["tmp_name"], $image_url)) {
            // Insert the teacher data into the database
            $sql = "INSERT INTO teachers (name, image_url, designation, facebook_link, twitter_link, github_link, linkedin_link) 
                    VALUES ('$name', '$image_url', '$designation', '$facebook_link', '$twitter_link', '$github_link', '$linkedin_link')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>
                        Swal.fire('Success!', 'Teacher added successfully!', 'success').then(() => {
                            window.location.href='Add_Departments_Teachers.php'; // Change to your target page
                        });
                      </script>";
            } else {
                echo "<script>Swal.fire('Error!', 'Error: " . $sql . "<br>" . $conn->error . "', 'error');</script>";
            }
        } else {
            echo "<script>Swal.fire('Error!', 'Sorry, there was an error uploading your file.', 'error');</script>";
        }
    }
}

$conn->close(); // Close the database connection
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Teacher/</span>Add Departments Teacher</h4>
              <div class="main-page">
                    <div class="container-fluid">
                        <div class="row page-title-div">
                            <div class="col-md-10">
                                <h2 class="title">Teacher</h2>
                                
                            </div>
                            <a  type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#teacherModal" href="u_studentAdd.php" class="btn btn-primary btn-info"><span class="bi bi-person-fill"><i
                                        class="fa fa-plus"></i></span>Add New Teacher</a>

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
<!-- Teacher Modal -->
<div class="modal fade" id="teacherModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" method="POST" action="#" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="teacherModalTitle">Add Teacher</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="teacherName" class="form-label">Teacher Name</label>
                    <input
                        class="form-control"
                        type="text"
                        name="name"
                        id="teacherName"
                        placeholder="Enter teacher's name"
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="teacherImage" class="form-label">Profile Image</label>
                    <input class="form-control" type="file" name="image_url" id="teacherImage" accept="image/*" required />
                </div>
                <div class="mb-3">
                    <label for="teacherDesignation" class="form-label">Designation</label>
                    <input
                        class="form-control"
                        type="text"
                        name="designation"
                        id="teacherDesignation"
                        placeholder="Enter teacher's designation"
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="facebookLink" class="form-label">Facebook Link (optional)</label>
                    <input
                        class="form-control"
                        type="url"
                        name="facebook_link"
                        id="facebookLink"
                        placeholder="Enter Facebook profile link"
                    />
                </div>
                <div class="mb-3">
                    <label for="twitterLink" class="form-label">Twitter Link (optional)</label>
                    <input
                        class="form-control"
                        type="url"
                        name="twitter_link"
                        id="twitterLink"
                        placeholder="Enter Twitter profile link"
                    />
                </div>
                <div class="mb-3">
                    <label for="githubLink" class="form-label">GitHub Link (optional)</label>
                    <input
                        class="form-control"
                        type="url"
                        name="github_link"
                        id="githubLink"
                        placeholder="Enter GitHub profile link"
                    />
                </div>
                <div class="mb-3">
                    <label for="linkedinLink" class="form-label">LinkedIn Link (optional)</label>
                    <input
                        class="form-control"
                        type="url"
                        name="linkedin_link"
                        id="linkedinLink"
                        placeholder="Enter LinkedIn profile link"
                    />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

              <br>      

<?php
// Database connection
$servername = "localhost"; // Your server name
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "ums"; // Change this to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the teachers table
$sql = "SELECT id, name, image_url, designation, facebook_link, twitter_link, github_link, linkedin_link, created_at FROM teachers";
$result = $conn->query($sql);
?>

<!-- Bordered Table -->
<div class="card">
    <h5 class="card-header">Teachers Table</h5>
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Profile Image</th>
                        <th>Designation</th>
                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>GitHub</th>
                        <th>LinkedIn</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0) : ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo htmlspecialchars($row['name']); ?></td>
                                <td><?php echo $row['image_url'] ? '<img src="' . htmlspecialchars($row['image_url']) . '" width="50" height="50" alt="Image">' : 'N/A'; ?></td>
                                <td><?php echo htmlspecialchars($row['designation']); ?></td>
                                <td><?php echo $row['facebook_link'] ? '<a href="' . htmlspecialchars($row['facebook_link']) . '" target="_blank">Facebook</a>' : 'N/A'; ?></td>
                                <td><?php echo $row['twitter_link'] ? '<a href="' . htmlspecialchars($row['twitter_link']) . '" target="_blank">Twitter</a>' : 'N/A'; ?></td>
                                <td><?php echo $row['github_link'] ? '<a href="' . htmlspecialchars($row['github_link']) . '" target="_blank">GitHub</a>' : 'N/A'; ?></td>
                                <td><?php echo $row['linkedin_link'] ? '<a href="' . htmlspecialchars($row['linkedin_link']) . '" target="_blank">LinkedIn</a>' : 'N/A'; ?></td>
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
                            <td colspan="10" class="text-center">No teachers found</td>
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
                window.location.href = "?delete_id=" + id; // Trigger deletion
            }
        });
    }
</script>

<?php
// Handle deletion
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $delete_sql = "DELETE FROM teachers WHERE id = $delete_id";

    if ($conn->query($delete_sql) === TRUE) {
        echo "<script>Swal.fire('Deleted!', 'Teacher has been deleted.', 'success').then(() => { window.location.href = Add_Departments_Teachers.php; });</script>";
    } else {
        echo "<script>Swal.fire('Error!', 'Error deleting teacher: " . $conn->error . "', 'error');</script>";
    }
}

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