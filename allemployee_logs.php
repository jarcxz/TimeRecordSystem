

<?php

	include('session.php');
include('log_out.php');
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
	<body>
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
<?php include ('header.php');

	?>

   
                    <div class="x_title">
					
                       <h3><i class="fa fa-users"></i> All Employee Logs</h3>  <a href="allemployee_date.php"><input type="submit"  class="btn btn-success"name="add" value="Search by Date" class="btn btn-primary"/> </a>
		
				
		
					   
					   
					   
                        <ul class="nav navbar-right panel_toolbox">
                        
                    
                        </ul>
						
						
						
						
						 <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                           
                                 
                                    </div>
                                </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								
							<thead>
								<tr>
									<th>Date</th>
									<th>Employee ID Number</th>
									<th> Name </th>
									<th> Position </th>
									<th> Time Logged In</th>
									
									<th>Time Logged Out</th>
									<th>Time Schedule </th>
									<th>Total Hours(Day)</th>
									<th> Action </th>
									
									
								
									
									</tr>
							</thead>
							
							
							<tbody>
	
							
							
							
							
							
							<?php
						if (isset($_GET['company_number']))
							$id=$_GET['user_id'];
		
						$admin = $conn->query("SELECT * FROM `check_in` order by `user_id` ASC") or die(mysqli_error());
						while($row = $admin->fetch_array()){
					$id=$row['user_id'];
							
							?>
							
						
							<tr>
					
								<td><?php echo $row['date1']; ?> </td>
								<td><?php echo  $row['company_number']; ?></a></td> 
								
								<td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></td> 
								<td><?php echo $row['department']; ?></td> 
							
							
								<td><?php echo $row['check_in']; ?></td> 
								<td><?php echo $row['check_out']; ?> </td> 
								<td><?php echo $row['Time_In']; ?> - <?php echo $row['Time_Out']; ?></td>
								<td><?php echo $row['total_hours']; ?> </td>  
									
								 <td>											
								
								<a title="Edit Employee record" href="edit_user_indiv.php<?php echo $id; ?>" data-toggle="modal" data-target="#edit_user_indiv<?php echo $id; ?>"/>
										<img src="images/edits.png" width="30px" height="25px" />	
									</a>
									
									
								
									
									
			
			
									<!-- delete modal user -->
									<div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> Trainee</h4>
										</div>
										<div class="modal-body">
												<div class="alert alert-danger">
													<h4>Do you want to permanently delete <?php echo $id; ?>  logged in / out logs?</h4>
												</div>
												
												
												
												<div class="modal-footer">
												
												<a href="delete_recycle_studentlogs.php<?php echo '?company_number='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
												<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
												</div>
												
												
										</div>
										</div>
									</div>
									</div>
									</center>
									
										<div class="modal fade" id="undo<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> Trainee</h4>
										</div>
										<div class="modal-body">
												<div class="alert alert-success">
													<h4>Do you want to restore <?php echo $id; ?> ?</h4>
												</div>
												
												
												
												<div class="modal-footer">
												
												<a href="undo_logsstudent.php<?php echo '?company_number='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
												<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
												</div>
												
												
										</div>
										</div>
									</div>
									</div>
									</center>
									
									
									
									
						<div class="modal fade" id="edit_user_indiv<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">	
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
            </div>
			
            <div class="modal-body">
			
			
   <form action= "edit_user_indiv.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
							
						     <center><h2><i class="fa fa-pencil"></i> Edit Employee</h2></center>
                                <div>
                                 <center>   
                                    
                                        <input type="hidden" value="<?php echo $row['user_id']; ?>" class="select2_single form-control" name="user_id"  >
										
                                    
                                </div>
								<br>
                                <div>
                                    <center>    <label class="control-label col-md-4" for="first-name">First Name*
									</label>
                                    
                                        <input type="text" value="<?php echo $row['firstname']; ?>" class="select2_single form-control" name="firstname" id="first-name2">
                                  
                                </div>
							<br>
                                <div>
                                      <center>  <label class="control-label col-md-4" for="last-name">Last Name*
                                    </label>
                                    
                                        <input type="text" value="<?php echo $row['lastname']; ?>" class="select2_single form-control" name="lastname" id="last-name2" class="form-control col-md-7 col-xs-12" >
                                 
                                </div>
								<br>
                               <div>
                           
                                  <center>      <label class="control-label col-md-4" for="last-name">Logged In*
                                    </label>
									
								
                                          <input type="text" value="<?php echo $row['check_in']; ?>" class="select2_single form-control" name="check_in" id="last-name2" >
								
			
                                   
                                </div>	
										<br>						
                                <div >
                                      <center>  <label class="control-label col-md-4" for="last-name">Logged Out*
                                    </label>
								
                                 
                                        <input type="text" value="<?php echo $row['check_out']; ?>" class="select2_single form-control" name="check_out" id="last-name2" >
                                  
                                </div>
								
								<br>
								
                                  
                           
								
                             
                                            <div class="modal-footer">  
          
              <center> <input type="submit"  value="Save" class="btn btn-success" onclick="edituser()" class="btn btn-primary"/></center>
			  <input type="hidden" id="id">
			   </form>
    
							</div>


    


									
									
									
									
							
							


							



	<?php } ?>
	
			
				
				


				</td> 
							</tr>
						
							</tbody>
							</table>
						
						
                     
                    </div>
                </div>
            </div>
        </div>


		
		
</head>

		
<body>	
<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
      
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
     
<div class="modal fade" id="admin_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
             
            
            </div>
			
            <div class="modal-body">
<form action="deleteall_recyclelogs.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                             
							  <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                   <div class="alert alert-danger">
                        <center><h4><i class="fa fa-delete"></i>Do you want to delete all Trainee Logs permanently?</h4></center>
                   
</div>
<div>				
                            
              <center>
				<input type="submit"  class="btn btn-success"name="add" value="YES" class="btn btn-primary"/>
			   <a href="trainee_logrecycle.php"><button type="button" class="btn btn-danger"><i class="fa fa"></i> NO</button></a>
			  </center>
			  </form>
			   </form>
            </div>
        </div>
    </div>
	
</div>
			

		   	
                             
                            
							</div>


    


									
									
									
									
							
							


							


	


</body>
</html>

