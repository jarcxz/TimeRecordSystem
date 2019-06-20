
	

<?php
include('include/dbcon.php');



if (isset($_POST['submit1'])) {
	$id	=  $_POST['id'];
	$pname	=  $_POST['pname'];
						$sql=$conn->query("select * from tbl_employee where company_number='$id' and pass='$pname' ")or die (mysql_error());
				$sql=$conn->query("select * from check_in where company_number='$id' and pass='$pname' and status ='0' ")or die (mysql_error());
		while($row= $sql->fetch_array())
		

						
if ($row >0) 
  {
   session_start();
  
    $_SESSION['company_number'] = $row['company_number'];
	$_SESSION['pass'] = $row['pass'];
 


	 
					
											echo  " <script> alert (' $id - This ID number already Logged In '); window.location='main.php'</script>";
							require_once'session_in_out.php';

					
  }
  

		$sql=$conn->query("select * from tbl_employee where company_number='$id' and pass='$pname'")or die (mysql_error());
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
	 $position = strtoupper($row['department']);
	  $ti = strtoupper($row['Time_In']);
	  $to = strtoupper($row['Time_Out']);
		$ss='Successfully Logged in';

	 
	$conn->query( "INSERT INTO check_in (company_number,pass,firstname,lastname,department,Time_In,Time_Out,remarks,date1,check_in) values ('$id','$pname','$fname','$lname','$position','$ti','$to','$remarks',curdate(),NOW())") or die(mysql_error());
	
				
					
											echo  " <script> alert ('$fname $lname $ss '); window.location='main.php'</script>";
							require_once'session_in_out.php';

					
  }
  

		

	}
	
	