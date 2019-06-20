

	

								
	<?php
	include('include/dbcon.php');
if (isset($_GET['company_number']))

$conn->query("SELECT * FROM `tbl_employee` where `company_number` = '$id'") or die(mysqli_error());
					
			

	
	
	$finish = $_POST['finish_time'];
	$remain = $_POST['remain_time'];
	$totaltime = $_POST['totaltime_hour'];
	
	


	{		
	$conn->query(" UPDATE tbl_employee SET  totaltime_hour='$totaltime',finish_time='$finish_time',remain_time='$remain_time' WHERE `company_number` = '$id'");

		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "view_user.php";
			</script>
		';	
	}
	
	