
<?php
include('session.php');
include('include/dbcon.php');
?>

        
							<?php	
							
								if(ISSET($_SESSION['id'])){
			
	$q_adminname = $conn->query("SELECT * FROM `admin` WHERE `id` = '$_SESSION[id]'") or die(mysqli_error());
	$f_adminname = $q_adminname->fetch_array();
	$admin_name = $f_adminname['username'];
	
							require_once ('include/dbcon.php');
                if (isset($_POST['add'])){
							

									$company_number = $_POST['company_number'];
									$firstname = $_POST['firstname'];
									$pass = $_POST['pass'];
									$lastname = $_POST['lastname'];
									
									$gender = $_POST['gender'];
									$department = $_POST['department'];
									$year = $_POST['year'];
									$company = $_POST['company'];
									$Time_In = $_POST['Time_In'];
									$Time_Out = $_POST['Time_Out'];
									
									$b='-';
									$status='incomplete';
													
							$action= 'Added Trainee, Name: ';

	
		$sql = $conn->query("SELECT * FROM `tbl_employee` WHERE `company_number` = '$company_number' and `company` = '$company' and `firstname` = '$firstname'") or die(mysqli_error());
		$row = $sql->num_rows;
		if($row > 0){
			echo '
				<script type = "text/javascript">
					alert("ISchool ID already taken");
					window.location = "user.php";
				</script>
			';
			
		}else{
			$conn->query("INSERT INTO `tbl_employee`(`company_number`,`firstname`,`pass`,`lastname`,`gender`,`department`,`year`,`company`,`status`,`Time_In`,`Time_Out`) VALUES('$company' '$b' '$company_number' , '$firstname', '$pass', '$lastname', '$gender', '$department','$year', '$company','$status','$Time_In','$Time_Out')") or die(mysqli_error());
							
	
			
$conn->query("insert into all_eventaction (admin_fullname,action,date) values('$admin_name','$action' '$firstname''$lastname',NOW()) ") or die(mysqli_error());			
			
			
				echo  " <script> alert (' $company$b$company_number is youd ID Number '); window.location='user.php'</script>";
			
		}
		
				}
	}	
								?>
						
                   
          