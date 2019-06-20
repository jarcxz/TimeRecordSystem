


        
		
							
							<?php	
							include ('include/dbcon_export.php');
							if (!isset($_FILES['image']['tmp_name'])) {
								
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];
							{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
									else
										{

									move_companyed_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
									$profile=$_FILES["image"]["name"];
									$firstname = $_POST['firstname'];
									$pass = $_POST['pass'];
									$lastname = $_POST['lastname'];
									$username = $_POST['username'];
									$password = $_POST['password'];
									$confirm_password = $_POST['confirm_password'];
							//		$admin_type = $_POST['admin_type'];
					
					$result=mysql_query("select * from admin WHERE username='$username' ") or die (mySQL_error());
					$row=mysql_num_rows($result);
					if ($row > 0)
					{
					echo "<script>alert('Username already taken!'); window.location='add_admin.php'</script>";
					}
					elseif($password != $confirm_password)
					{
					echo "<script>alert('Password do not match!'); window.location='add_admin.php'</script>";
					}else
					{		
						mysql_query("insert into admin (firstname, pass, lastname, username, password, confirm_password, admin_image, admin_type, admin_added)
						values ('$firstname', '$pass', '$lastname', '$username', '$password', '$confirm_password', '$profile', 'Admin', NOW())")or die(mysql_error());
						echo "<script>alert('Account successfully added!'); window.location='admin.php'</script>";
					}
									}
									}
							}
								?>