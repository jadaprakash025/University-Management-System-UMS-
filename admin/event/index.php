<?php
// Initialize the session
// session_start();
 
// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }
// database connection
include('config.php');

$added = false;


//Add  new student code 

if(isset($_POST['submit'])){
	
	$u_birthday = $_POST['user_dob'];
	
	$u_family = $_POST['family'];
	


	//image upload

	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "upload_images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  	$insert_data = "INSERT INTO ums_events VALUES ('$u_birthday','$u_family','$image',NOW())";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
		  $added = true;
  	}else{
  		echo "Data not insert";
  	}

}

?>







<!DOCTYPE html>
<html>

<head>
    <title>Student Crud Operation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <a href="https://lexacademy.in" target="_blank"><img src="#" alt="" width="350px"></a><br>
        <hr>

        <!-- adding alert notification  -->
        <?php
	if($added){
		echo "
			<div class='btn-success' style='padding: 15px; text-align:center;'>
				Your Student Data has been Successfully Added.
			</div><br>
		";
	}

?>





        <a href="logout.php" class="btn btn-success"><i class="fa fa-lock"></i> Logout</a>
        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#myModal">
            <i class="fa fa-plus"></i> Add New Event
        </button>
        <a href="export.php" class="btn btn-success pull-right"><i class="fa fa-download"></i> Export Data</a>
        <hr>
        <table class="table table-bordered table-striped table-hover" id="myTable">
            <thead>
                <tr>
                    <th class="text-center" scope="col">id</th>
                    <th class="text-center" scope="col">Date</th>
                    <th class="text-center" scope="col">Discription.</th>
                   
                    <th class="text-center" scope="col">View</th>
                    <th class="text-center" scope="col">Edit</th>
                    <th class="text-center" scope="col">Delete</th>
                </tr>
            </thead>
            <?php

        	$get_data = "SELECT * FROM ums_events order by 1 desc";
        	$run_data = mysqli_query($con,$get_data);
			$i = 0;
        	while($row = mysqli_fetch_array($run_data))
        	{
				$sl = ++$i;
				$id = $row['id'];
				$E_date = $row['date'];
				
				$E_dics = $row['discription'];

        		$image = $row['img'];

        		echo "

				<tr>
				<td class='text-center'>$sl</td>
				<td class='text-left'>$E_date</td>
				<td class='text-left'>$E_dics</td>
			
				<td class='text-center'>
					<span>
					<a href='#' class='btn btn-success mr-3 profile' data-toggle='modal' data-target='#view$id' title='Prfile'><i class='fa fa-address-card-o' aria-hidden='true'></i></a>
					</span>
					
				</td>
				<td class='text-center'>
					<span>
					<a href='#' class='btn btn-warning mr-3 edituser' data-toggle='modal' data-target='#edit$id' title='Edit'><i class='fa fa-pencil-square-o fa-lg'></i></a>

					     
					    
					</span>
					
				</td>
				<td class='text-center'>
					<span>
					
						<a href='#' class='btn btn-danger deleteuser' title='Delete'>
						     <i class='fa fa-trash-o fa-lg' data-toggle='modal' data-target='#$id' style='' aria-hidden='true'></i>
						</a>
					</span>
					
				</td>
			</tr>


        		";
        	}

        	?>



        </table>
        <form method="post" action="export.php">
            <input type="submit" name="export" class="btn btn-success" value="Export Data" />
        </form>
    </div>


    <!---Add in modal---->

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <center>
                        <h2>Add Event</h2>
                    </center>
                    <!-- <center><img src="https://codingcush.com/uploads/logo/logo_61b79976c34f5.png" width="300px"
                            height="80px" alt=""></center> -->

                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data">

                        <!-- This is test for New Card Activate Form  -->
                        <!-- This is Address with email id  -->
                        <!-- <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Student Id.</label>
                                <input type="text" class="form-control" name="card_no"
                                    placeholder="Enter 12-digit Student Id." maxlength="12" required>
                            </div>

                        </div> -->

                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Event Date</label>
                                <input type="date" class="form-control" name="user_dob" placeholder="Date of Birth">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="family">Event Discription</label>
                            <textarea class="form-control" name="family" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label> Event Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>


                        <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">

                  </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!------DELETE modal---->




    <!-- Modal -->
    <?php

$get_data = "SELECT * FROM ums_events";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	echo "

<div id='$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title text-center'>Are you want to sure??</h4>
      </div>
      <div class='modal-body'>
        <a href='delete.php?id=$id' class='btn btn-danger' style='margin-left:250px'>Delete</a>
      </div>
      
    </div>

  </div>
</div>


	";
	
}


?>


    <!-- View modal  -->
    <?php 

// <!-- profile modal start -->
// $get_data = "SELECT * FROM student_data";
// $run_data = mysqli_query($con,$get_data);

// while($row = mysqli_fetch_array($run_data))
// {
// 	$id = $row['id'];
// 	$card = $row['u_card'];
// 	$name = $row['u_f_name'];
// 	$name2 = $row['u_l_name'];
// 	$father = $row['u_father'];
// 	$mother = $row['u_mother'];
// 	$gender = $row['u_gender'];
// 	$email = $row['u_email'];
// 	$aadhar = $row['u_aadhar'];
// 	$Bday = $row['u_birthday'];
// 	$family = $row['u_family'];
// 	$phone = $row['u_phone'];
// 	$address = $row['u_state'];
// 	$village = $row['u_village'];
// 	$police = $row['u_police'];
// 	$dist = $row['u_dist'];
// 	$pincode = $row['u_pincode'];
// 	$state = $row['u_state'];
// 	$time = $row['uploaded'];
	
// 	$image = $row['image'];
// 	echo "

// 		<div class='modal fade' id='view$id' tabindex='-1' role='dialog' aria-labelledby='userViewModalLabel' aria-hidden='true'>
// 		<div class='modal-dialog'>
// 			<div class='modal-content'>
// 			<div class='modal-header'>
// 				<h5 class='modal-title' id='exampleModalLabel'>Profile <i class='fa fa-user-circle-o' aria-hidden='true'></i></h5>
// 				<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
// 				<span aria-hidden='true'>&times;</span>
// 				</button>
// 			</div>
// 			<div class='modal-body'>
// 			<div class='container' id='profile'> 
// 				<div class='row'>
// 					<div class='col-sm-4 col-md-2'>
// 						<img src='upload_images/$image' alt='' style='width: 150px; height: 150px;' ><br>
		
// 						<i class='fa fa-id-card' aria-hidden='true'></i> $card<br>
// 						<i class='fa fa-phone' aria-hidden='true'></i> $phone  <br>
// 						Issue Date : $time
// 					</div>
// 					<div class='col-sm-3 col-md-6'>
// 						<h3 class='text-primary'>$name $name2</h3>
// 						<p class='text-secondary'>
// 						<strong>S/O :</strong> $father <br>
// 						<strong>M/O :</strong>$mother <br>
// 						<strong>Aadhar :</strong> $aadhar <br>
// 						<i class='fa fa-venus-mars' aria-hidden='true'></i> $gender
// 						<br />
// 						<i class='fa fa-envelope-o' aria-hidden='true'></i> $email
// 						<br />
// 						<div class='card' style='width: 18rem;'>
// 						<i class='fa fa-users' aria-hidden='true'></i> Familiy :
// 								<div class='card-body'>
// 								<p> $family </p>
// 								</div>
// 						</div>
						
// 						<i class='fa fa-home' aria-hidden='true'> Address : </i> $village, $police, <br> $dist, $state - $pincode
// 						<br />
// 						</p>
// 						<!-- Split button -->
// 					</div>
// 				</div>

// 			</div>   
// 			</div>
// 			<div class='modal-footer'>
// 				<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
// 			</div>
// 			</form>
// 			</div>
// 		</div>
// 		</div> 


//     ";
// }


// <!-- profile modal end -->


?>





    <!----edit Data--->

    <?php

$get_data = "SELECT * FROM ums_events";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
				$E_date = $row['date'];
				
				$E_dics = $row['discription'];

        		// $image = $row['img'];
	echo "

<div id='edit$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
             <button type='button' class='close' data-dismiss='modal'>&times;</button>
             <h4 class='modal-title text-center'>Edit your Data</h4> 
      </div>

      <div class='modal-body'>
        <form action='edit.php?id=$id' method='post' enctype='multipart/form-data'>

		
		
		
		
		
		
		
		
		
		

		<div class='form-group col-md-12'>
		<label for='inputPassword4'>Date of Birth</label>
		<input type='date' class='form-control' name='user_dob' placeholder='Date of Birth' value='$E_date'>
		</div>
		</div>
		
		
		<div class='form-group'>
		<label for='family'>Family Member's</label>
			<textarea class='form-control' name='family' rows='3'>$E_dics</textarea>
		</div>
		
		
		
		
		
        	<div class='form-group'>
        		<label>Image</label>
        		<input type='file' name='image' class='form-control'>
        		
        	</div>

        	
        	
			 <div class='modal-footer'>
			 <input type='submit' name='submit' class='btn btn-info btn-large' value='Submit'>
			 <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
		 </div>


        </form>
      </div>

    </div>

  </div>
</div>


	";
}


?>

    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();

    });
    </script>

</body>

</html>