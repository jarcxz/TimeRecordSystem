


        
							<?php	
							require_once ('include/dbcon.php');
              if (isset($_GET['company_number']))
		$id=$_GET['company_number'];
							

									
								

	
		$sql = $conn->query("SELECT  remain_time = 0 FROM tbl_employee WHERE company_number = '$id'") or die(mysqli_error());
							while($row = $sql->fetch_array()){
			
		
		if($row > 0){
			
			$conn->query("update tbl_employee set status = 'Completed' where company_number = '$id'");
				
			
		}
		
							}
								?>
						
                   
          