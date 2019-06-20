<?php 

include('include/dbcon.php');
?>
	<?php
		   
		if (isset($_GET['company_number']))
	$id=$_GET['company_number'];

		$user=$conn->query("insert into tbl_employee  select * from backup_employee where company_number = '$id' ");
	
		$user = $conn->query("delete from backup_employee where company_number = '$id' ") or die(mysqli_error());			
				 
		
			
echo '
			<script type = "text/javascript">
				alert("Successfully Moved ");
				window.location = "studentrecord_backup.php";
			</script>
		';	
?>