




	 
  
 

<?php
include('include/dbcon.php');

?>
<?php ob_start(); ?>
<?php
$id=$_GET['company_number'];
?>

	 
 
	
	
	


<?php

$sql = $conn->query("SELECT * , round(sum(total_hours)/10000,0)	 AS sum FROM check_in where company_number = '$id'"); 
	while($rows = $sql->fetch_array())
$sum  = $rows['sum'];	


	


		
		
			


$sql= $conn->query("SELECT tbl_employee.company_number, tbl_employee.firstname, tbl_employee.pass, tbl_employee.lastname,tbl_employee.finish_time,tbl_employee.remain_time,tbl_employee.totaltime_hour,check_in.check_in,
		        check_in.date1, check_in.check_out,check_in.total_hours  FROM tbl_employee, check_in WHERE tbl_employee.company_number =  '$id'
             AND check_in.company_number = '$id'");

		while($row = $sql->fetch_array())
	
		{
				
				$total=$row["total_hours"];
				$tt=$row["totaltime_hour"];
				
					
$conn->query( "update tbl_employee set finish_time  = '$sum',remain_time = '$tt' - '$sum' where company_number = '$id'");
	

  } 
?>





