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
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ums";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo "<script>
        swal('Error!', 'Connection failed: " . $conn->connect_error . "', 'error')
        .then(() => {
            window.history.back(); // Go back to the previous page
        });
    </script>";
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $course_date = $_POST['course_date'];
    $link = isset($_POST['link']) ? $_POST['link'] : null;

    // Handle the file upload for the course image
    if (isset($_FILES['event_image']) && $_FILES['event_image']['error'] === UPLOAD_ERR_OK) {
        $imageTmpPath = $_FILES['event_image']['tmp_name'];
        $imageName = $_FILES['event_image']['name'];
        $imageSize = $_FILES['event_image']['size'];
        $imageType = $_FILES['event_image']['type'];
        $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);

        // Define allowed image extensions
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        // Check if the uploaded file is an allowed image type
        if (in_array($imageExtension, $allowedExtensions)) {
            // Define the upload path
            $uploadPath = "course_uploads_image/" . basename($imageName);

            // Move the uploaded file to the desired location
            if (move_uploaded_file($imageTmpPath, $uploadPath)) {
                $image_url = $uploadPath;
            } else {
                echo "<script>
                    swal('Error!', 'Error uploading the image.', 'error')
                    .then(() => {
                        window.history.back(); // Go back to the previous page
                    });
                </script>";
                exit();
            }
        } else {
            echo "<script>
                swal('Error!', 'Invalid image format. Allowed formats are: jpg, jpeg, png, gif.', 'error')
                .then(() => {
                    window.history.back(); // Go back to the previous page
                });
            </script>";
            exit();
        }
    } else {
        echo "<script>
            swal('Error!', 'Please upload an image.', 'error')
            .then(() => {
                window.history.back(); // Go back to the previous page
            });
        </script>";
        exit();
    }

    // Insert the data into the database
    $sql = "INSERT INTO courses (title, category, description, image_url, course_date, link) 
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $title, $category, $description, $image_url, $course_date, $link);

    if ($stmt->execute()) {
        echo "<script>
            swal('Success!', 'Course added successfully!', 'success')
            .then(() => {
                window.location.href = 'Add_Departments_Courses.php'; // Redirect to another page
            });
        </script>";
    } else {
        echo "<script>
            swal('Error!', 'Error: " . $stmt->error . "', 'error')
            .then(() => {
                window.history.back(); // Go back to the previous page
            });
        </script>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Courses/</span>Add Departments Course</h4>
              <div class="main-page">
                    <div class="container-fluid">
                        <div class="row page-title-div">
                            <div class="col-md-10">
                                <h2 class="title">Add Course</h2>
                                
                            </div>
                            <a  type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#courseModal" href="u_studentAdd.php" class="btn btn-primary btn-info"><span class="bi bi-person-fill"><i
                                        class="fa fa-plus"></i></span>Add NewCourse</a>

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
     <!-- Course Modal -->
<div class="modal fade" id="courseModal" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog">
    <form class="modal-content" method="POST" action="#" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="courseModalTitle">Add Course</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="courseTitle" class="form-label">Course Title</label>
          <input
            class="form-control"
            type="text"
            name="title"
            id="courseTitle"
            placeholder="Enter course title"
            required
          />
        </div>
        <div class="mb-3">
          <label for="courseCategory" class="form-label">Category</label>
          <input
            class="form-control"
            type="text"
            name="category"
            id="courseCategory"
            placeholder="Enter course category"
            required
          />
        </div>
        <div class="mb-3">
          <label for="courseDescription" class="form-label">Description</label>
          <textarea
            class="form-control"
            name="description"
            id="courseDescription"
            rows="4"
            placeholder="Enter course description"
            required
          ></textarea>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Event Images</label>
          <input class="form-control" type="file" name="event_image" id="formFile" accept="image/*" />
        </div>
        <div class="mb-3">
          <label for="courseDate" class="form-label">Course Date</label>
          <input
            class="form-control"
            type="date"
            name="course_date"
            id="courseDate"
            required
          />
        </div>
        <div class="mb-3">
          <label for="courseLink" class="form-label">Link (optional)</label>
          <input
            class="form-control"
            type="url"
            name="link"
            id="courseLink"
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
    $sql_delete = "DELETE FROM courses WHERE id = $delete_id";
    if ($conn->query($sql_delete) === TRUE) {
        echo "<script>
            Swal.fire({
                title: 'Deleted!',
                text: 'Course deleted successfully.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'Add_Departments_Courses.php'; // Replace with your actual page name
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                title: 'Error!',
                text: 'Error deleting course: " . $conn->error . "',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        </script>";
    }
}

// Fetch data from the courses table
$sql = "SELECT id, title, category, description, image_url, course_date, link, created_at FROM courses";
$result = $conn->query($sql);
?>

<!-- Bordered Table -->
<div class="card">
    <h5 class="card-header">Courses Table</h5>
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Course Date</th>
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
                                <td><?php echo htmlspecialchars($row['category']); ?></td>
                                <td><?php echo htmlspecialchars($row['description']); ?></td>
                                <td><?php echo $row['image_url'] ? '<img src="' . htmlspecialchars($row['image_url']) . '" width="50" height="50" alt="Image">' : 'N/A'; ?></td>
                                <td><?php echo date('Y-m-d', strtotime($row['course_date'])); ?></td>
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
                            <td colspan="9" class="text-center">No courses found</td>
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