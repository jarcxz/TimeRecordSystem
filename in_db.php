
	

<?php
include('include/dbcon.php');
require_once('popup.php');



if (isset($_POST['submit1'])) {
	$id	=  $_POST['id'];
	$pname	=  $_POST['pname'];
	
				$sql1=$conn->query("select check_out,remarks,Note from check_in where company_number='$id' and pass='$pname' and status ='0' ")or die (mysql_error());
		while($row1 = $sql1->fetch_array())
		$sql=$conn->query("select * from tbl_employee where company_number='$id' and pass='$pname' ")or die (mysql_error());
		while($row = $sql->fetch_array())

						
if ($row >0) 
  {
   session_start();
  
    $_SESSION['company_number'] = $row['company_number'];
	$_SESSION['pass'] = $row['pass'];
   
		$remarks = $_POST['remarks'];

		$id= strtoupper($row['company_number']);
		 $pname = strtoupper($row['pass']);
		 $fname = strtoupper($row['firstname']);
	 $lname = strtoupper($row['lastname']);
		$ss='Successfully Logged in';
				

	 
	$conn->query( "INSERT INTO check_in (company_number,pass,remarks,date1,check_in) values ('$id','$pname','$remarks',curdate(),NOW()") or die(mysql_error());
	
				
					
											echo  " <script> alert ('$fname $lname $ss '); window.location='main.php'</script>";
							require_once'session_in_out.php';

					
  }
  

  {

	echo  " <script> alert (' $id Not Doesnt exist '); window.location='main.php'</script>";
							require_once'session_in_out.php';
	 

							
  }
  

			

	}
	



?>
