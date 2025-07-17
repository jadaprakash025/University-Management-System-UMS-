<?php include('mysqli.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="#">
  <title>Document</title>
  <!-- Include SweetAlert from a CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

  <?php

  if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    // $check = isset($_POST["check_me_out"]) ? 1 : 0;  // Ensure checkbox value is checked correctly

    // Query to check the user's credentials
    $show = "SELECT * FROM u_rgstn WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $show);
    $count = mysqli_num_rows($result);

    // Check if the credentials are valid and handle login attempts
    // if ($check == 0) {
    //   echo "<script>
    //   Swal.fire({
    //       icon: 'warning',
    //       title: 'Checkbox Required',
    //       text: 'Please click the checkbox!'
    //   }).then((result) => {
    //       if (result.isConfirmed) {
    //           window.location.href = 'home1.php';
    //       }
    //   });
    //   </script>";
    // } else
    if ($count == 1) {
      echo "<script>
      Swal.fire({
          icon: 'success',
          title: 'Login Successful',
          text: 'You have logged in successfully!'
      }).then((result) => {
          if (result.isConfirmed) {
              window.location.href = 'home1.php';
          }
      });
      </script>";
    } else {
      echo "<script>
      Swal.fire({
          icon: 'error',
          title: 'Login Failed',
          text: 'There was an error with your login, please try again.'
      }).then((result) => {
          

          history.back();
          
      });
      </script>";
    }
  }

  ?>

</body>
</html>
