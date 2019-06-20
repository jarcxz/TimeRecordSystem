

	<?php
	
	include('include/dbcon.php');
	
	
	?>

								
	<?php
	
if (isset($_GET['company_number']))

$conn->query("SELECT * FROM `tbl_employee` where `company_number` = '$id'") or die(mysqli_error());
					
			



	
	$conn->query(" UPDATE `tbl_employee` SET  status = 'Completed' where  `totaltime_hour`  = `finish_time`  or `totaltime_hour`  < `finish_time`");
	
	?>