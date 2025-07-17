<?php include('mysqli.php'); ?>
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
if(isset($_POST["submit"]))
{
   $name = $_POST["name"];
   $email = $_POST["email"];
   $username = $_POST["username"];
   $state = $_POST["state"];
   $city = $_POST["city"];
   $password = $_POST["password"];
   $conpass = $_POST["confirm-password"];

   if($password != $conpass) {
       echo "<script>
       Swal.fire({
           icon: 'error',
           title: 'Oops...',
           text: 'Password and Confirm Password do not match!'
       }).then((result) => {
           if (result.isConfirmed) {
               window.location.href = 'home1.php';
           }
       });
       </script>";
   }
   else {
       // Prepare statement to prevent SQL injection
       $stmt = $con->prepare("INSERT INTO `u_rgstn`(`name`, `email`, `username`, `state`, `city`, `password`)
           VALUES (?, ?, ?, ?, ?, ?)");
       $stmt->bind_param("ssssss", $name, $email, $username, $state, $city, $password);

       if($stmt->execute()) {
           echo "<script>
           Swal.fire({
               icon: 'success',
               title: 'Registration Successful',
               html: '<b>Name:</b> {$name}<br>' +
                     '<b>Email:</b> {$email}<br>' +
                     '<b>Username:</b> {$username}<br>' +
                     '<b>password:</b> {$password}<br>' +
                      '<b>State:</b> {$state}<br>' +

                     '<b>City:</b> {$city}'
           }).then((result) => {
               if (result.isConfirmed) {
                   window.location.href = 'logpop.php';
                   
               }
           });
           </script>";
       }
       else {
           echo "<script>
           Swal.fire({
               icon: 'error',
               title: 'Error',
               text: 'Registration failed!'
           });
           </script>";
       }
       $stmt->close();
   }
}
?>

</body>
</html>
