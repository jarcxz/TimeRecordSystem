


<?php 

include('include/dbcon.php');

?>
	<?php
	
	
		
		$id=$_GET['company_number'];		
	$user = $conn->query("delete from backup_employee where company_number = '$id' ") or die(mysqli_error());
					
					
header('location:studentrecord_backup.php');

			
?>
