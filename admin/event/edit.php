<?php
include('config.php');

$id = $_GET['id'];

if(isset($_POST['submit']))
{
	
	$u_birthday = $_POST['user_dob'];
	
	$u_family = $_POST['family'];

	
	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "upload_images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

	$update = "UPDATE ums_events SET ='$u_card', u_f_name = '$u_f_name', u_l_name = '$u_l_name', u_father = '$u_father', u_mother = '$u_mother', u_aadhar = '$u_aadhar', u_birthday = '$u_birthday', u_gender = '$u_gender', u_email = '$u_email', u_phone = '$u_phone', u_state = '$u_state', u_dist = '$u_dist', u_village = '$u_village', u_police = '$u_police', u_pincode = '$u_pincode', u_family = '$u_family', staff_id = '$u_staff_id', image = '$image' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		header('location:index.php');
	}else{
		echo "Data not update";
	}
}

?>