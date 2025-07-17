<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <style>
        span.error {
            color: red;
        }
    </style>
</head>
<body>

<!-- Sign-in Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header centered">
        <h1 class="modal-title fs-3  login__title" id="exampleModalLabel">Sign Up</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form id="signup-form" method="POST" action="sing_up.php" class="row g-2 needs-validation" novalidate>
      <div class="md-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter your Name" id="name" maxlength="10" required onkeydown="return /[a-zA-Z]/i.test(event.key)">
            <span class="error" id="name-error"></span>
            <div class="invalid-feedback">
              <!-- Please enter your name. -->
            </div>
          </div>

          <div class="md-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email" id="email" required>
            <span class="error" id="email-error"></span>
            <div class="invalid-feedback">
              <!-- Please enter a valid email address. -->
            </div>
          </div>

          <div class="md-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Create Username" id="username"maxlength="8" pattern="[A-Za-z0-9\w]{4,20}" required >
            <span class="error" id="username-error"></span>
            <div class="invalid-feedback">
              <!-- Please choose a username. -->
            </div>
          </div>

          <div class="col-md-4">
            <label for="state" class="form-label">State</label>
            <select class="form-select" name="state" id="state" required>
            <span class="error" id="state-error"></span>
              <option value="">Select state</option>

               <!-- Assuming the states are dynamically populated from the database -->
              <!-- PHP code for fetching states from the database -->
              <?php
              include("connection.php");
               $fetch_country = mysqli_query($connection,"select * from tbl_state");
               while($country = mysqli_fetch_array($fetch_country)){
              ?>
                  <option value="<?php echo $country['state']; ?>">
                    <?php echo $country['state']; ?>
                  </option>
                  <?php } ?>
              <!-- Assuming the states are dynamically populated from the database -->
              <!-- PHP code for fetching states from the database -->
            </select>
            <span class="error" id="state-error"></span>
            <div class="invalid-feedback">
            </div>
          </div>

          <div class="col-md-4">
            <label for="city" class="form-label">City</label> 
            <select class="form-select" name="city" id="city" required>
              <option value="">Select city</option>
              <span class="error" id="city-error"></span>

              <!-- PHP code for fetching cities from the database -->
              <?php
              include("connection.php");
               $fetch_country = mysqli_query($connection,"select * from tbl_city");
               while($country = mysqli_fetch_array($fetch_country)){
              ?>
                  <option value="<?php echo $country['city']; ?>">
                    <?php echo $country['city']; ?>
                  </option>
                  <?php } ?>
            </select>
            <span class="error" id="city-error"></span>
            <div class="invalid-feedback">
            </div>
          </div>

          <div class="md-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" name="password" placeholder="Create a new password" id="password" required maxlength="8">
            <span class="error" id="password-error"></span>
            <div class="invalid-feedback">
              <!-- Password must be at least 6 characters long. -->
            </div>
          </div>

          <div class="md-3">
            <label for="confirm-password" class="form-label">Confirm Password</label>
            <input type="text" class="form-control" name="confirm-password" placeholder="Confirm your password" id="confirm-password" required  maxlength="8">
            <span class="error" id="confirm-password-error"></span>
            <div class="invalid-feedback">
              <!-- Passwords do not match. -->
            </div>
          </div>

          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="check_me_out" id="check_me_out" required>
              <label class="form-check-label" for="check_me_out">Agree to terms and conditions</label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>

          <div class="d-grid gap-2">
           
          <button id="signup-form" type="submit" class="btn btn-primary " name="submit"
          data-bs-target="#loginModal">Submit</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>


<script>
$(document).ready(function() {
    // Validate on blur
    $('#name, #email, #username, #password, #confirm-password, #state, #city').on('blur', function() {
        validateField($(this)); // Validate the field when it loses focus
    });

    // Function to validate each field
    function validateField(field) {
        let fieldName = field.attr('id');
        let value = field.val();
        let valid = true;

        // Clear previous error message
        field.next(".error").text('');

        // Name validation
        if (fieldName === "name" && value === "") {
            $('#name-error').text('Please enter your Name.');
            valid = false;
        }

        // Email validation
        if (fieldName === 'email' && (value === "" || !validateEmail(value))) {
            $('#email-error').text('Please enter a valid email address.');
            valid = false;
        }

        // Username validation (between 6 to 8 characters)
        if (fieldName === "username") {
            if (value === "") {
                $('#username-error').text('Please choose a username.');
                valid = false;
            } else if (value.length < 6 || value.length > 8) {
                $('#username-error').text('Username must be between 6 and 8 characters long.');
                valid = false;
            } else if (!validateUsername(value)) {
                $('#username-error').text('Username can only contain letters and numbers.');
                valid = false;
            }
        }

        // State validation  
        if (fieldName === "state" && (value === "" || value === "Select state")) {
            $('#state-error').text('Please choose a state.');
            valid = false;
        }

        // City validation  
        if (fieldName === "city" && (value === "" || value === "Select city")) {
            $('#city-error').text('Please choose a city.');
            valid = false;
        }

        // Password validation (min 6 characters, must contain uppercase, lowercase, number, and special character)
        if (fieldName === "password") {
            if (value === "") {
                $('#password-error').text('Please create your password.');
                valid = false;
            } else if (value.length < 6 || value.length > 8) {
                $('#password-error').text('Password must be between 6 and 8 characters long.');
                valid = false;
            } else if (!validatePassword(value)) {
                $('#password-error').text('Password must include uppercase, lowercase, number, and special character.');
                valid = false;
            }
        }

        // Confirm password validation
        if (fieldName === "confirm-password") {
            if (value === '') {
                $('#confirm-password-error').text('Please confirm your password.');
                valid = false;
            } else if ($("#password").val() !== $("#confirm-password").val()) {
                $('#confirm-password-error').text('Passwords do not match.');
                valid = false;
            }
        }

                // Password validation (min length 6)
        //         if (fieldName === 'password' && (value === "" || value.length < 6)) {
        //     $('#password-error').text('Password least 6 characters long.');
        //     valid = false;
        // }

        // Confirm password validation
        // if (fieldName === 'confirm-password' && (value === "" || value !== $('#password').val())) {
        //     $('#confirm-password-error').text('Passwords do not match.');
        //     valid = false;
        // }

        return valid;
    }

    // Email validation function
    function validateEmail(email) {
        let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    // Username validation function
    function validateUsername(username) {
        // Allow alphanumeric characters only
        let regex = /^[A-Za-z0-9]+$/;
        return regex.test(username);
    }

    // Password validation function (min 6 chars, 1 uppercase, 1 lowercase, 1 number, 1 special char)
    function validatePassword(password) {
        let regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])/;
        return regex.test(password);
    }

    // Validate on form submit
    $('#signup-form').submit(function(event) {
        let formValid = true;

        // Validate each field
        $(this).find('input, select').each(function() {
            if (!validateField($(this))) {
                formValid = false;
            }
        });

        // Prevent form submission if any field is invalid
        if (!formValid) {
            event.preventDefault(); // Prevent form submission
        }
    }); 
});
</script>


<!-- Login Modal -->
 <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-4 login__title" id="loginModalLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form id="login-form" method="POST" action="login.php" class="row g-2 needs-validation" novalidate>
        <div class="md-3">
        <label class="form-label" for="username">Username</label>
        <div class="input-group">
            <div class="input-group-text">@</div>
          <input type="text" class="form-control" name="username" placeholder="Enter your Username" id="login-username" required>
            <br><span class="error" id="login-username-error"></span>
           <div class="invalid-feedback">
            </div>

      </div>
  </div>

          <div class="md-3">
            <label for="loginPassword" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your password" id="login-password" required>
            <span class="error" id="login-password-error"></span>
            <div class="invalid-feedback">
            </div>
          </div>

          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="login_check" id="login_check" required>
              <label class="form-check-label" for="login_check">Click Me Out</label>
              <div class="invalid-feedback">
              </div>
            </div>
          </div>

          <div class="d-grid gap-2">
            <button  id="login-form" type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div> 


<script>
$(document).ready(function() {
    // Validate on blur
    $('#login-username,#login-password').on('blur', function() {
        validateField($(this)); // Validate the field when it loses focus
    });

    // Function to validate each field
    function validateField(field) {
        let fieldName = field.attr('id');
        let value = field.val();
        let valid = true;

        // Clear previous error message
        field.next(".error").text('');

       

        // Email validation
        // if (fieldName === 'email' && (value === "" || !validateEmail(value))) {
        //     $('#email-error').text('Please enter a valid email address.');
        //     valid = false;
        // }

        // Username validation (between 6 to 8 characters)
        if (fieldName === "login-username") {
            if (value === "") {
                $('#login-username-error').text('Please enter  a username.');
                valid = false;
            }  else if (!validateUsername(value)) {
                $('#login-username-error').text('Username can only contain letters and numbers.');
                valid = false;
            }
        }

      

        // Password validation (min 6 characters, must contain uppercase, lowercase, number, and special character)
        if (fieldName === "login-password" && value === "" ) {
           
                $('#login-password-error').text('Please Enter your password.');
                valid = false;
            
        }


        return valid;
    }

  
    // Validate on form submit
    $('#login-form').submit(function(event) {
        let formValid = true;

        // Validate each field
        $(this).find('input, select').each(function() {
            if (!validateField($(this))) {
                formValid = false;
            }
        });

        // Prevent form submission if any field is invalid
        if (!formValid) {
            event.preventDefault(); // Prevent form submission
        }
    });
});

</script>



<script>

  
// $(document).ready(function() {
//    // Validate on blur
//    $('#name, #email, #username,#password, #confirm-password').on('blur', function() {
//         validateField($(this)); // Validate the field when it loses focus
//     });

    

//     // Function to validate each field
//     function validateField(field) {
//         let fieldName = field.attr('id');
//         let value = field.val();
//         let valid = true;

//         // Clear previous error message
//         field.next(".error").text('');

//         // name validation
//         if (fieldName === "name" && value === "") {
//             $('#name-error').text('Please enter your Name.');
//             valid = false;
//         }


//         // Email validation
//         if (fieldName === 'email' && (value === "" || !validateEmail(value))) {
//             $('#email-error').text('Please enter a valid email address.');
//             valid = false;
//        }

         

//         // Username validation (between 6 to 8 characters)
//         if (fieldName === "username") {
//           if (value === "") {
//             $('#username-error').text(' Please choose a username.');
//             valid = false;
//           } else if (value.length < 6 || value.length > 8) {
//                 $('#username-error').text('Username must be between 6 and 8 characters long.');
//                 valid = false;
//             } else if (!validateUsername(value)) {
//                 $('#username-error').text('Username can only contain letters and numbers.');
//                 valid = false;
//               }
//         }

        
        

        
//          // state validation  
//          if (fieldName === "state" && value === "" || value === "Select state") {
//             $('#state-error').text(' Please choose a state.');
//             valid = false;
//         }

//          // Password validation (min 6 characters, must contain uppercase, lowercase, number, and special character)
//          if (fieldName === "password1") {
//            if (value === "") {
//             $('#password-error').text(' Please creat your password.');
//             valid = false;
//          } else if (value.length < 6 || value.length > 8) {
//                 $('#password-error').text('Password must be between 6 and 8 characters long.');
//                 valid = false;
//          }  else if (!validatePassword(value)) {
//                 $('#password-error').text('Password must be at characters, include uppercase, lowercase, number, and special character.');
//                 valid = false;
//             } 
//         }


//         // Confirm password validation
//         // if (fieldName === 'confirm-password' && (value === "" || value !== $('#password').val())) {
//         //     $('#confirm-password-error').text('Passwords do not match.');
//         //     valid = false;
//         // }


        

//           //  Confirm password validation
//         //    if (fieldName === "confirm-password") {
//         //     if (value === '') {
//         //         $('#confirm-password-error').text('Please confirm your password.');
//         //         valid = false;
//         //     } else if($("#password").val()!==$("#confirm-password").val()) {
//         //         $('#confirm-password-error').text('Passwords do not match.');
//         //         valid = false;
//         //     }
//         // }

//         // return valid;

//          // Confirm password validation
//         //  if (fieldName === 'confirm-password' && (value === "" || value !== $('#password').val())) {
//         //     $('#confirm-password-error').text('Passwords do not match.');
//         //     valid = false;
//         // }

//         // return valid;
        


        
//         // Confirm password validation
//         // if (fieldName === 'co_password' && (value === "" || value !== $('#password').val())) {
//         //     $('#co_password-error').text('Passwords do not match.');
//         //     valid = false;
//         // }

//         // return valid;




//         // if (fieldName === "co_password" && value !== $('#password').val()) {
//         //     $('#co_password-error').text('Passwords do not match.');
//         //     valid = false;
//         // }

//         return valid;
//     }
    





//     // Email validation function
//     function validateEmail(email) {
//         let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//         return regex.test(email);
//     }


//     // Username validation function
//     function validateUsername(username) {
//         // Allow alphanumeric characters only
//         let regex = /^[A-Za-z0-9]+$/;
//         return regex.test(username);
//     }

//     // Password validation function (min 6 chars, 1 uppercase, 1 lowercase, 1 number, 1 special char)
//     function validatePassword(password) {
//     let regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])/;
//          return regex.test(password);
//     }

//     // Password validation function (min 6 chars, 1 uppercase, 1 lowercase, 1 number, 1 special char)
//     // function validatecoPassword(copassword) {
//     // let regex = $('#password').val();
//     //      return regex.test(copassword);
//     // }

    
    

//     // Validate on form submit
//     $('#signup-form').sumit(function(event) {
//         event.preventDefault(); // Prevent form submission

//         let formValid = true;

//         // Validate each field
//         $(this).find('input').each(function() {
//             if (!validateField($(this))) {
//                 formValid = false;
//             }
//         });

//         // If form is valid, submit the form
//         // if (formValid) {
//         //     this.submit();
//         // }
//     });

//     // Validate on blur
//     $('input').on('blur', function() {
//         validateField($(this));
//     });


//     // $("form").submit(function(){

//     //    if($("#password").val()!=$("#confirm-password").val())
//     //             {
//     //                 alert("Password and confirm password not matching");
//     //                 $("#").focus();
//     //                 return false;
//     //             }
//     //     });


// });
</script>

<!-- <script type="text/javascript">
        $(function () {
            $("#signup-form").click(function () {
                var password = $("#Password").val();
                var confirmPassword = $("#Confirm-Password").val();
                if (password != confirmPassword) {
                    alert("Passwords do not match.");
                    return false;
                }
                return true;
            });
        });
    </script> -->

<script>
//   jQuery('#exampleModal').validate({
// 			rules : {
// 				password : {
// 					minlength : 5
// 				},
// 				password_confirm : {
// 					minlength : 5,
// 					equalTo : "#password"
// 				}
// 			}
// 		});

// $('button').click(function(){
//     console.log($('#exampleModal').valid());
// });
  
</script>



</body>
</html>
