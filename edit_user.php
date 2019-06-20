

	<?php include ('header.php'); 
	
	include ('session.php');
	?>



								
	<?php
	
	if(ISSET($_SESSION['id'])){
			
	$q_adminname = $conn->query("SELECT * FROM `admin` WHERE `id` = '$_SESSION[id]'") or die(mysqli_error());
	$f_adminname = $q_adminname->fetch_array();
	$admin_name = $f_adminname['username'];
	
	
if (isset($_GET['company_number']))

$conn->query("SELECT * FROM `tbl_employee` where `company_number` = '$id'") or die(mysqli_error());
					
			

	$id = $_POST['company_number'];
	$firstname = $_POST['firstname'];
	$pass = $_POST['pass'];
	$lastname = $_POST['lastname'];
	$department = $_POST['department'];
	$gender = $_POST['gender'];
	$year = $_POST['year'];
	$company = $_POST['company'];
	$Time_In = $_POST['Time_In'];
	$Time_Out = $_POST['Time_Out'];
	
				
			$action= 'Edited Trainee, ID Number: ';
			


	{		
	$conn->query(" UPDATE tbl_employee SET  company_number='$id',firstname='$firstname', pass='$pass', lastname='$lastname',  
	gender='$gender', department='$department',year='$year', company='$company', Time_In = '$Time_In',Time_Out = '$Time_Out' WHERE `company_number` = '$id'");
			
$conn->query("insert into all_eventaction (admin_fullname,action,date) values('$admin_name','$action' '$id',NOW()) ") or die(mysqli_error());			
			
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "user.php";
			</script>
		';	
	}
	}
	