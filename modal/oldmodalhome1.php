 
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
              <div class="mb-4 form-check">
              <input class="form-check-input" type="checkbox" name="check_me_out" id="check_me_out" required>
      <label class="form-check-label" for="check_me_out"> click me out
      </label>
              </div>
              <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
            </form>


          </div>

        </div>
      </div>
    </div>

    <!--signup Modal -->
    <div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="signinModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="signinModalLabel">Sign in</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">


          <form method="POST" action="singin.php" class="row g-2 needs-validation" novalidate>
  <div class="md-3">
    <label for="validationCustom01" class="form-label">Name </label>
    <input type="text" class="form-control" name="name" placeholder="Enter a Name" id="validationCustom01" value="" required >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="md-3">
    <label for="validationCustom02" class="form-label">Email Address</label>
    <input type="text" class="form-control" name="email" placeholder="Enter Emai ID" id="validationCustom02" value="" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="md-3">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" name="username" placeholder="Creat Username " id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">State</label>
    <select class="form-select" name="state" placeholder="#" id="validationCustom03" required>
    <option>select state</option>
    <?php
              include("modal/connection.php");
               $fetch_country = mysqli_query($connection,"select * from tbl_state");
               while($country = mysqli_fetch_array($fetch_country)){
              ?>    
              <option value="<?php echo $country['state']; ?>"><?php echo $country['state']; ?></option>
            <?php } ?>


     
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">City</label>
    <select class="form-select" name="city" placeholder="#" id="validationCustom04" required>
    <option>select city</option>
    <?php
              include("connection.php");
               $fetch_country = mysqli_query($connection,"select * from tbl_city");
               while($country = mysqli_fetch_array($fetch_country)){
              ?>    
              <option value="<?php echo $country['city']; ?>"><?php echo $country['city']; ?></option>
            <?php } ?>

    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  
  <div class="md-3">
    <label for="validationCustom05" class="form-label">Password </label>
    <input type="text" class="form-control" name="password_1" placeholder="Creat a new password" id="validationCustom05" value="" required >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="md-3">
    <label for="validationCustom06" class="form-label">Confirm Password </label>
    <input type="text" class="form-control" name="password_2" placeholder="Enter Confirm Password" id="validationCustom06" value="" required >
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>


  <div class="col-12">
    <div class="form-check">
    <<input class="form-check-input" type="checkbox" name="check_me_out" id="check_me_out" required>
      <label class="form-check-label" for="check_me_out">Agree to terms and conditions
      </label>


      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="d-grid gap-2">
  <button type="submit" class="btn btn-primary " name="submit" data-bs-target="#loginModal">Submit</button>
  </div>
</form>



          </div>
               <!-- <div class="modal-footer">+
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>
              </div> -->
        </div>
      </div>
    </div>
