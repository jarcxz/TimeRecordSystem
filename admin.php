
<?php
require_once 'session.php';
require_once 'log_out.php';
?>

<!DOCTYPE html>

<html lang = "eng">



  <title>Reeracoen Time Record</title>
  <link href="index.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.png" type="image" />
	<head>  

		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		
	</head>
	
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					
					<p class = "navbar-text pull-right">Reeracoen BPO Inc.</p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
								<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = ""></i><img src="upload/<?php echo $f_adminname['admin_image']; ?>" width="25px" height="25px"  $nbsp/> <?php echo htmlentities($admin_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off" color="black"></i> Logout</a></li>
						</ul>
					</li>
				</ul>	
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li class = ""><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href = "admin.php"><span class = "glyphicon glyphicon-user"></span>Account</a></li>
		
		<li><a href = "user.php"><span class = "glyphicon glyphicon-user"></span>Employee Information</a></li>
			<li><a href = "admin_event.php"><span class = "glyphicon glyphicon-user"></span>Admin logs</a></li>
					<li class = ""><a   href="allemployee_logs.php" ><span class = "glyphicon glyphicon-user"></span>All Employee logs</a></li>
						
				</ul>
			<br />
			
			
<?php
include ('header.php');
?>



   
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
						
                        <h3><i class="fa fa-info"></i> Admin Information</h3>  
						<button  data-toggle="modal" data-target="#admin_modal" type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Add New Admin</button></center>
					             <br>
							
							
							
							<br>
							<br>
						
						
					

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								
							<thead>
								<tr>
									<th>Image</th>
									<th>Full Name</th>
								<!---	<th>User Type</th>	-->
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							
							
							
							
							
							<?php
						
						$sql = $conn->query("SELECT * FROM `admin` where `id` = '$_SESSION[id]' ") or die(mysqli_error());
						while($row = $sql->fetch_array()){
							$id=$row['id'];
					?>
							
							<tr>
								<td>
									<?php if($row['admin_image'] != ""): ?>
									<img src="upload/<?php echo $row['admin_image']; ?>" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
									<?php else: ?>
									<img src="images/admins.jpg" width="100px" height="100px" style="border:4px groove #CCCCCC; border-radius:5px;">
									<?php endif; ?>	
								</td> 
								<td><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></td>
							<!---	<td><?php // echo $row['admin_type']; ?></td>	-->
								<td>
									
									<a  href="edit_admin.php<?php echo '?id='.$id; ?>"  />
									<img src="images/edits.png" width="40px" height="30px" />
									</a>
									
								
												
										</div>
										</div>
									</div>
									</div>
									
	
           
    
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
								</td> 
							</tr>
							<?php } ?>
							
							
							
							
							</tbody>
							</table>
						</div>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>
	

	
</head>
<body>	


								
								
								<?php	
							include ('include/dbcon.php');
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
									$admin_image=$_FILES["image"]["name"];
									$firstname = $_POST['firstname'];
									$middlename = $_POST['middlename'];
									$lastname = $_POST['lastname'];
									$username = $_POST['username'];
									$password = $_POST['password'];
									$confirm_password = $_POST['confirm_password'];
							//		$admin_type = $_POST['admin_type'];
					
					$result=mysql_query("select * from admin WHERE id='$id' ") or die (mySQL_error());
					$row=mysql_num_rows($result);
					if ($row > 0)
					{
					echo "<script>alert('Username already taken!'); window.location='admin.php'</script>";
					}
					elseif($password != $confirm_password)
					{
					echo "<script>alert('Password do not match!'); window.location='admin.php'</script>";
					}else
					{		
						mysql_query("insert into admin (firstname, middlename, lastname, username, password, confirm_password, admin_image, admin_type, admin_added)
						values ('$firstname', '$middlename', '$lastname', '$username', '$password', '$confirm_password', '$admin_image', 'Admin', NOW())")or die(mysql_error());
						echo "<script>alert('Account successfully added!'); window.location='admin.php'</script>";
					}
									}
									}
							}
								?>
						
								
								
                            </form>
							

    
	
                        <!-- content ends here -->
                    </div>
                </div>
            </div>


       
	
