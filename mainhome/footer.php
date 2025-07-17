<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form with Validation</title>
    <style>
        .error {
            color: red;
            font-size: 12px;
            display: block;
        }
    </style>
    <!-- Include SweetAlert2 CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Use your MySQL username
$password = ""; // Use your MySQL password
$dbname = "ums";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into the u_contact table
    $sql = "INSERT INTO u_contact (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>Swal.fire('Success!', 'Message sent successfully!', 'success');</script>";
        echo "<script>
        Swal.fire({
            icon: 'success',
            
            text: 'Message sent successfully!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'index.php';
            }
        });
        </script>";
    } else {
        echo "<script>Swal.fire('Error', 'An error occurred: " . $conn->error . "', 'error');</script>";
    }
}

// Close the connection
$conn->close();
?>

<footer class="footer_wrapper" id="contact">
    <div class="container">
        <section class="page_section contact" id="contact">
            <div class="contact_section">
                <h2>Contact Us</h2>
                <h6>Submit your details, our expert will get back to you!</h6>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="detail">
                            <h4>Address</h4>
                            <p>Saurashtra University Campus, Rajkot, Gujarat, India</p>
                        </div>
                        <div class="detail">
                            <h4>Call us</h4>
                            <p>+91-281-2578501/04</p>
                        </div>
                        <div class="detail">
                            <h4>Email us</h4>
                            <p>info@saurashtrauniversity.edu</p>
                        </div>
                    </div>
                    <ul class="social_links">
                        <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li> 
                    </ul>
                </div>

                <div class="col-lg-8">
                    <form class="form" id="contact-form" method="POST">
                        <!-- Name Input -->
                        <input class="input-text" name="name" type="text" id="contact-name" placeholder="Your Name *">
                        <span class="error" id="contact-name-error"></span>
                        
                        <!-- Email Input -->
                        <input class="input-text" name="email" type="text" id="contact-email" placeholder="Your E-mail *">
                        <span class="error" id="contact-email-error"></span>
                        
                        <!-- Message Input -->
                        <textarea class="input-text text-area" name="message" id="contact-message" placeholder="Your Message *"></textarea>
                        <span class="error" id="contact-message-error"></span>
                        
                        <!-- Submit Button -->
                        <input class="input-btn" type="submit" value="Send Message">
                    </form>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <div class="footer_bottom"><span>Copyright © reserved, Template by jada prakash </span> </div>
    </div>
</footer>

<script>
    // Function to validate email format
    function validateEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    // Form submission event listener
    document.querySelector('.input-btn').addEventListener('click', function(event) {
        event.preventDefault();  // Prevent form submission
        
        let isValid = true;
        
        // Clear all error messages
        document.querySelectorAll('.error').forEach((el) => el.textContent = '');

        // Validate Name
        const name = document.getElementById('contact-name').value.trim();
        if (name === '') {
            document.getElementById('contact-name-error').textContent = 'Please enter your name.';
            isValid = false;
        }

        // Validate Email
        const email = document.getElementById('contact-email').value.trim();
        if (email === '') {
            document.getElementById('contact-email-error').textContent = 'Please enter your email.';
            isValid = false;
        } else if (!validateEmail(email)) {
            document.getElementById('contact-email-error').textContent = 'Please enter a valid email.';
            isValid = false;
        }

        // Validate Message
        const message = document.getElementById('contact-message').value.trim();
        if (message === '') {
            document.getElementById('contact-message-error').textContent = 'Please enter your message.';
            isValid = false;
        }

        // If all validations pass, submit the form
        if (isValid) {
            Swal.fire({
                title: 'Confirmation',
                text: "Are you sure you want to submit?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, submit it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('contact-form').submit();
                }
            });
        }
    });
</script>
</body>
</html>
