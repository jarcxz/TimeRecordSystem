


<?php 

include('include/dbcon.php');

?>
	<?php
	
	
		
		
	$user = $conn->query("delete from backup_employee");
					
					
header('location:studentrecord_backup.php');

			
?>
