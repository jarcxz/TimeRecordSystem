<?php
include('include/dbcon.php');



$username=$_POST['username'];
$password=$_POST['password'];

	
	

	$q_login = $conn->query("SELECT * FROM `admin_head` WHERE `username` = '$username' && `password` = '$password'") or die(msqli_error());
	$f_login = $q_login->fetch_array();
	$v_login = $q_login->num_rows;
	if($v_login > 0){

	session_start();
		echo "<script>alert('Successfully deleted Admin Logs'); window.location='manage_logs.php'</script>";

	
$conn->query("delete from all_eventaction ");
echo" <script> alert ('All Admin Logs Successfully Deleted');window.location='manage_logs.php'</script>";

		
	
			

}else{
	echo "<script>alert('Invalid Username and Password! Try again.'); window.location='manage_logs.php'</script>";

	
	
}


	
	
	?>
	

