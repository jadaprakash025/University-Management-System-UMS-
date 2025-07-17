<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
  <title>University Websit</title>

</head>

<body>
<?php include('navbar.php') ?>

  <header>
    
<!-- nav bar -->

    <!-- login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="loginModalLabel">Login </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">


          <form method="POST" action="login.php">
              <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                <div class="input-group">
                  <div class="input-group-text">@</div>
                  <input type="text" class="form-control" id="autoSizingInputGroup" name="username" placeholder="Enter Your Username">
                </div>
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder=" Enter Your Password">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" name="check me uot" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
            </form>


          </div>

        </div>
      </div>
    </div>

    <!--signup Modal -->
    <div class="modal fade" id="signinModals" tabindex="-1" aria-labelledby="signinModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="signinModalLabel">Sign in</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">


            <form method="POST" action="signin.php">


              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter Emai ID" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>

              <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                <div class="input-group">
                  <div class="input-group-text">@</div>
                  <input type="text" class="form-control" id="autoSizingInputGroup" name="username" placeholder="Creat Username">
                </div>
              </div>


              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" class="form-control" name="password_1" id="exampleInputPassword1" placeholder=" Enter password">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password_2" id="exampleInputPassword2" placeholder="Enter Confirm Password">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary" name="submit" data-bs-target="#loginModal">Submit</button>
            </form> 



          </div>
               <!-- <div class="modal-footer">+
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>
              </div> -->
        </div>
      </div>
    </div>

  </header>

  <main>
  

  </main>

  <footer>
  </footer>


  <script src="bootstrap\js\bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
  </script>
   <script src="assets/js/main.js"></script>
<script type="text/javascript">
    $('#signup-btn1').on('click',function() {
        $('#signinModals').modal('');
    })

</script>
</body>

</html>