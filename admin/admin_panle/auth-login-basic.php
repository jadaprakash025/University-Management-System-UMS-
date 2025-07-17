<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Admin Login - Camera Shop</title>

    <meta name="description" content="Admin login for Camera Shop" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
    
    <!-- Include SweetAlert from a CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <?php
    include('include/connection.php');
    session_start(); // Start the session

    if (isset($_POST['submit'])) {
        $email = trim($_POST['email-username']);
        $password = $_POST['password'];

        // Check if email is valid
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script type="text/javascript">
                    Swal.fire({
                        icon: "error",
                        title: "Invalid Email",
                        text: "Please enter a valid email address."
                    }).then(() => {
                        history.back();
                    });
                  </script>';

                  
            exit();
        }

        // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        // Step 1: Check if the user exists
        $stmt = $con->prepare("SELECT * FROM admin WHERE email = ?");
        if ($stmt === false) {
            die('prepare() failed: ' . htmlspecialchars($con->error));
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            // Step 2: Verify password (assuming password was hashed during registration)
            if ($password === $user['password']) {
              // Password is correct, set session variables
              $_SESSION['loggedin'] = true;
              $_SESSION['email'] = $email;
          
    
                    echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Login Successful',
                        text: 'You have logged in successfully!',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(function() {
                        window.location = 'index.php'; // Redirect to another page if needed
                    });
                </script>";



          } else {
              // Incorrect password
              echo '<script type="text/javascript">
                      Swal.fire({
                          icon: "error",
                          title: "Login Failed",
                          text: "Incorrect password!"
                      }).then(() => {
                          history.back();
                      });
                    </script>';
          }          
        } else {
            // Email does not exist
            echo '<script type="text/javascript">
                    Swal.fire({
                        icon: "error",
                        title: "Login Failed",
                        text: "Email does not exist!"
                    }).then(() => {
                        history.back();
                    });
                  </script>';
        }

        $stmt->close();
        $con->close();
    }
    ?>
<!-- Content -->
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <div class="card">
                <div class="card-body">
                    <div class="app-brand justify-content-center">
                        <a href="index.html" class="app-brand-link gap-2">
                            <span class="app-brand-text demo text-body fw-bolder" style="text-transform: capitalize;">Admin Login</span>
                        </a>
                    </div>
                    <h4 class="mb-2">Welcome to admin side 👋</h4>
                    <p class="mb-4"></p>

                    <form id="formAuthentication" class="mb-3" action="#" method="POST" onsubmit="return validateForm()">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email-username" placeholder="Enter your email" required autofocus />
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                                <a href="auth-forgot-password-basic.php">
                                    <small>Forgot Password?</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" placeholder="********" required aria-describedby="password" minlength="6" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <!-- <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me" />
                                <label class="form-check-label" for="remember-me"> Remember Me </label>
                            </div>
                        </div> -->
                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100" type="submit" name="submit">Sign in</button>
                        </div>
                    </form>

                    <p class="text-center">
                        <span>New on our platform?</span>
                        <a href="auth-register-basic.php"><span>Create an account</span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript Validation
    function validateForm() {
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        // Basic email format validation
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            return false;
        }

        // Password validation (minimum 6 characters)
        if (password.length < 6) {
            alert("Password must be at least 6 characters long.");
            return false;
        }

        // If all validations pass
        return true;
    }
</script>
    <!-- Core JS -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

</body>
</html>
