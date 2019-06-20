<?php
include('include/dbcon.php');
include('session.php');


?>

<?php

if(ISSET($_SESSION['id'])){
			
	$q_adminname = $conn->query("SELECT * FROM `admin` WHERE `id` = '$_SESSION[id]'") or die(mysqli_error());
	$f_adminname = $q_adminname->fetch_array();
	$admin_name = $f_adminname['username'];

	session_start();
	
	
		$action= 'Exported  all trainee records to MS-word';
			
			
			$conn->query("insert into all_eventaction (admin_fullname,action,date) values('$admin_name','$action' '$id',NOW()) ") or die(mysqli_error());			
}
	
			
			
			?>