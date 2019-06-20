<?php 

include('include/dbcon.php');
?>
	<?php
		   
		if (isset($_GET['company_number']))
	$id=$_GET['company_number'];

		$user=$conn->query("insert into check_in  select * from backup_login_logs where company_number = '$id' ");
	
		$user = $conn->query("delete from backup_login_logs where company_number = '$id' ") or die(mysqli_error());			
				 
		
			
echo '
			<script type = "text/javascript">
				alert("Successfully Moved ");
				window.location = "trainee_logrecycle.php";
			</script>
		';	
?>