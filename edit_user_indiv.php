

	<?php include ('header.php'); 
	
	include ('session.php');
	?>



								
	<?php
	
	if(ISSET($_SESSION['id'])){
			
	$q_adminname = $conn->query("SELECT * FROM `admin` WHERE `id` = '$_SESSION[id]'") or die(mysqli_error());
	$f_adminname = $q_adminname->fetch_array();
	$admin_name = $f_adminname['username'];
	
	
if (isset($_GET['user_id']))

$conn->query("SELECT * FROM `check_in` where `user_id` = '$id'") or die(mysqli_error());
					
			

	$id = $_POST['user_id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$check_in = $_POST['check_in'];
	$check_out = $_POST['check_out'];

	
				
			$action= 'Edited Trainee, ID Number: ';
			


	{		
	$conn->query(" UPDATE check_in SET  check_in='$check_in',check_out='$check_out' WHERE `user_id` = '$id'");
			
	
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "allemployee_logs.php";
			</script>
		';	
	}
	}
	