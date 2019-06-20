<?php 

include('include/dbcon.php');
?>
	<?php
		   
		if (isset($_GET['company_number']))
	$id=$_GET['company_number'];

		$user=$conn->query("insert into backup_login_logs  select * from check_in where company_number = '$id' ");
	
		$user = $conn->query("delete from check_in where company_number = '$id' ") or die(mysqli_error());			
				 $conn->query("update tbl_employee set finish_time = 0, remain_time = 0 where  company_number = '$id' ") or die(mysqli_error());			
						
			
		
			
echo '
			<script type = "text/javascript">
				alert("Successfully deleted  logs");
				window.location = "user.php";
			</script>
		';	
?>