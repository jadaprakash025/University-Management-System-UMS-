<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--=============== REMIXICONS ===============-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" />
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>


  <!--=============== bootstrap linked ===============-->

  <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="assets/css/styles.css" />

   <!-- Include SweetAlert from a CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
      .error { 
  color: red;
  font-size: 0.9em;
}

    </style>

  <title>University Websit</title>
  <script>
    $(document).ready(function () {
      $("#admissionModal").modal('show');
    });
  </script>

  <style>
    label {
      color: black; 
    }
  </style>
</head>

<body>

<?php
$host="localhost";
$user="root";
$password="";
$database="ums";
$connection=mysqli_connect($host,$user,$password,$database);

?>



<?php
if(isset($_POST['submit'])){
   

    // Fetching form data
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $mobile = mysqli_real_escape_string($connection, $_POST['mobile']);
    $course = mysqli_real_escape_string($connection, $_POST['course']);

    // Basic validation checks
    if(empty($name) || empty($gender) || empty($email) || empty($mobile) || empty($course)){
      echo "<script>
      Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'please fill all fields !'
      }).then((result) => {
          if (result.isConfirmed) {
              window.location.href = 'home1.php';
          }
      });
      </script>";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
    } else if (!preg_match('/^[0-9]{10}$/', $mobile)) {
        echo "Invalid mobile number!";
    } else {
        // Insert query
        $sql = "INSERT INTO S_admition (name, gender, email, mobileno, course) VALUES ('$name', '$gender', '$email', '$mobile', '$course')";

        // Execute query
        if(mysqli_query($connection, $sql)){
         
            echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Congratulations!! ...',
                 html: '<span style=color:green;>You are successfully registered. We will get back to you within 24 hours. If you have any queries, kindly contact (0281) 2578501-10 or send an email to registrar@sauuni.ac.in.</span>',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'home1.php';
                }
            });
            </script>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . mysqli_error($connection) . "</div>";
        }

        // Close the connection
        mysqli_close($connection);
    }
}
?>



<!-- Admission modale -->
<div class="modal fade" id="admissionModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header centered">
        <h1 class="modal-title fs-4 login__title" id="exampleModalLabel">Get Expert Call</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-header centered" style="color:green">
        <h6>Submit your details,
        our expert will get back to you!</h6>
       
      </div>
      




      
      <div class="modal-body">

      <form id="signup-form" method="POST" action="Admission.php" class="row g-2 needs-validation" novalidate>
  <div class="md-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your Name" id="name" required onkeydown="return /[a-zA-Z]/i.test(event.key)" maxlength="20">
    <div class="invalid-feedback">Please enter a valid name.</div>
  </div>

  <div class="md-3">
    <label for="gender" class="form-label">Gender</label>
    <select class="form-select" name="gender" id="gender" required>
      <option value="">Select Gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select>
    <div class="invalid-feedback">Please select your gender.</div>
  </div>

  <div class="md-3">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Email" id="email" required>
    <div class="invalid-feedback">Please enter a valid email address.</div>
  </div>

  <div class="md-3">
    <label for="mobile" class="form-label">Mobile No</label>
    <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No" id="mobile" pattern="\d{10}" required maxlength="10" onkeydown="return event.key >= '0' && event.key <= '9' || event.key === 'Backspace' || event.key === 'Delete'">
    <div class="invalid-feedback">Please enter a valid 10-digit mobile number.</div>
  </div>

  <div class="md-3">
    <label for="course" class="form-label">Course</label>
    <select class="form-select" name="course" id="course" required>
      <option value="">Select Course</option>
      <option value="Computer Science">Computer Science</option>
      <option value="Mathematics">Mathematics</option>
      <option value="Biology">Biology</option>
      <option value="Physics">Physics</option>
    </select>
    <div class="invalid-feedback">Please select a course.</div>
  </div>

  <div class="d-grid gap-2">
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
</form>


      </div>
    </div>
  </div>
</div>


<script>
  
  // JavaScript for validating the form
document.addEventListener('DOMContentLoaded', function () {
  // Fetch the form element
  var form = document.getElementById('signup-form');

  // Add a submit event listener
  form.addEventListener('submit', function (event) {
    // Check if the form is valid
    if (!form.checkValidity()) {
      event.preventDefault(); // Prevent form submission
      event.stopPropagation(); // Stop event propagation
    }

    // Add Bootstrap's validation classes to show validation messages
    form.classList.add('was-validated');
  }, false);
});

</script>




  <img src="assets\img\Saurashtra_Universityt.jpg" alt="image" class="main__bg">

  <!-- validation al fild -->


  <script src="bootstrap\js\bootstrap.bundle.min.js"></script>
  <script src="modal\modaljs\validation.js"></script>


</body>

</html