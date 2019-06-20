
<?php
require_once 'session.php';
require_once 'log_out.php';

include('update_trainee_status.php');

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
					
                       <h3><i class="fa fa-users"></i> Employee Information</h3><button  data-toggle="modal" data-target="#admin_modal" type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Add New Employee</button></center>
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
								<tr >
						
									<th >Employee ID Number</th>
									<th>Full Name</th>
									
									<th>Department</th>
									<th>Date Hired</th>
									<th>Company</th>
									<th>Schedule Time</th>							
									<th>Action</th>
									
									
									</tr>
							</thead>
							<tbody>
	


							<?php
						if (isset($_GET['company_number']))
							$id=$_GET['company_number'];
						$admin = $conn->query("SELECT status = 'Completed' FROM `tbl_employee`") or die(mysqli_error());
						
						$admin = $conn->query("SELECT * FROM `tbl_employee` order by `company_number` ASC") or die(mysqli_error());
						while($row = $admin->fetch_array()){
					$id=$row['company_number'];
							
							?>
							
						
							<tr >
						
								
								
					
								<td><a target="_blank"<?php echo $row['company_number']; ?>"><?php echo $row['company_number']; ?></a></td> 
								<td><?php echo $row['firstname']."  ".$row['lastname']; ?></td>							
								<td><?php echo $row['department']; ?> </td> 
								<td><?php echo $row['year']; ?> </td> 
									<td><?php echo $row['company']; ?></td> 
									<td><?php echo $row['Time_In']; ?> - <?php echo $row['Time_Out']; ?></td> 									
								
								<td>
								
						
	
									<a title="Edit Employee record" href="edit_user.php<?php echo $id; ?>" data-toggle="modal" data-target="#edit_user<?php echo $id; ?>"/>
										<img src="images/edits.png" width="30px" height="25px" />	
									</a>
									
									<a title="Delete Employee and logs" href="#delete<?php echo '?company_number='.$id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
										<img src="images/deletes.png" width="30px" height="25px" />
								
									
			
			
			
									<!-- delete modal user -->
									<div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> Employee</h4>
										</div>
										<div class="modal-body">
												<div class="alert alert-danger">
													<h4>Do you want to delete <?php echo $id; ?> with his/her work time record?</h4>
												</div>
												
												
												
												<div class="modal-footer">
												
												<a href="delete_user.php<?php echo '?company_number='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
												<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
												</div>
												
												
										</div>
										</div>
									</div>
									</div>
									</center>
									
									
		
		
							
	<div class="modal fade" id="edit_user<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">	
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
            </div>
			
            <div class="modal-body">
			
			
   <form action= "edit_user.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
							
						     <center><h2><i class="fa fa-pencil"></i> Edit Employee</h2></center>
                                <div>
                                 <center>  

			

								 <label class="control-label col-md-4" for="first-name">Employee ID Number*
                                    </label>
                                    
                                        <input type="text" value="<?php echo $row['company_number']; ?>" class="select2_single form-control" name="company_number"  >
										
                                    
                                </div>
								
									<br>
                                <div>
                                   <center>     <label class="control-label col-md-4" for="first-name">Password*
                                    </label>
                                   
                                        <input type="text" class="select2_single form-control" name="pass" value="<?php echo $row['pass']; ?>" id="first-name2" >
                                  
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
                                    <center>    <label class="control-label col-md-4" for="first-name">Gender*
									</label>
                                    
                                    
										  <select name="gender" class="select2_single form-control" tabindex="-1" id="last-name2" >
                                           <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                         
                                        </select>
                                  
                                </div>
						          
								
								<br>
                                <div>
                                    <center>    <label class="control-label col-md-4" for="first-name">Department*
									</label>
                                    
                                       <select name="department" id="last-name2" required="required" class="select2_single form-control"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									   
											 <option value="<?php echo $row['department']; ?>"> <?php echo $row['department']; ?> </option>
                                            <option value="Management">Management</option>
											<option value="Support">Support</option>
                                            <option value="Data Entry">Data Entry</option>
											<option value="ECC">ECC</option>
											
											</select>
                                  
                                </div>
										
                                 
                                
				
								 <br>
                                <div>
                                    <center>    <label class="control-label col-md-4" for="first-name">Date Hired*
									</label>
                                    
                                        			
								<input id="date" value="<?php echo $row['year']; ?>"<?php echo $row['year']; ?> type="date" name="year" class="select2_single form-control" required="required" tabindex="-1">
								
                                  
                                </div>
								 <br>
                                <div>
                                    <center>    <label class="control-label col-md-4" for="first-name">Company*
									</label>
                                    
                                        	<select name="company" class="select2_single form-control" required="required" tabindex="-1" id="last-name2">
                                            <option value="<?php echo $row['company']; ?>"><?php echo $row['company']; ?></option>
											</select>
                                  
                                </div>
								
								<br>
                                <div>
                                    <center>    <label class="control-label col-md-4" for="first-name">Time In*
									</label>
                                    
                                       <select value="<?php echo $row['Time_In']; ?>" name="Time_In" id="last-name2" required="required" class="select2_single form-control">
									   
										<option> <?php echo $row['Time_In']; ?> </option>
                                          								<option> <?php echo $row['Time_In']; ?> </option>			
											<?php
											For ($hours=0; $hours<24; $hours++) // the interval for hours is '1'
											for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
											echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
											.str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';
											?>
										
											</select>
                                  
                                </div>
								
								
							<br>
                                <div>
                                    <center>    <label class="control-label col-md-4" for="first-name">Time Out*
									</label>
                                    
                                       
										  <select value="<?php echo $row['Time_Out']; ?>" name="Time_Out" id="last-name2" required="required" class="select2_single form-control">
                                          
											<option> <?php echo $row['Time_Out']; ?> </option>
											
											<?php
											For ($hours=0; $hours<24; $hours++) // the interval for hours is '1'
											for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
											echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
											.str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';
											?>									
						</select>
                                  
                                </div>
								
								
                             
                                            <div class="modal-footer">  
          <br>
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
<form action="add_user.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                             
							  <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <center><h2><i class="fa fa-pencil"></i> Add Employee</h2></center>
                   
								 <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Employee ID Number*
                                    </label>
									<div class="col-md-4">
                                        <input type="text" value="" name="company_number" id="id" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">First Name*
                                    </label>
									
									
                                    <div class="col-md-4">
                                        <input type="text" value="" name="firstname" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Password*
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" name="pass" value="" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Last Name*
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" value="" name="lastname" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
								</div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Gender*
                                    </label>
                                    <div class="col-md-4">
                                   
								  
								  
					
                                        <select name="gender" class="select2_single form-control" required="required" tabindex="-1" >
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
										</div>
										</div>
								
								
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Department*
                                    </label>
                                    <div class="col-md-4">
                                        
								 <select value="" name="department" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                            <option value="Management">Management</option>
											   <option value="Support">Support</option>
                                            <option value="Data Entry">Data Entry</option>
											<option value="ECC">ECC</option>
											
											</select>
									</div>
                                </div>
								 <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Date Hired*
                                    </label>
                                    <div class="col-md-4">
 									
											<input id="date" type="date" name="year" class="select2_single form-control" required="required" tabindex="-1">
											
                                      
										</div>
										</div>
								
								 <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Company*
                                    </label>
                                    <div class="col-md-4">
                                      
										
										 <select name="company" class="form-control col-md-7 col-xs-12" required="required" tabindex="-1" id="last-name2">
                                            <option value="RCN">RCN</option>
											
											
											
								
								
								
										</select>
								
										</select>
                                    </div>
                                </div>
							
								 <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Time In*
                                    </label>
									
									
									
                                    <div class="col-md-4">
                                      
										
										  <select name="Time_In" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                          											
											<?php
											For ($hours=0; $hours<24; $hours++) // the interval for hours is '1'
											for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
											echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
											.str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';
											?>



										
						</select>
						    </div>
                                </div>
								
						<div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Time Out
                                    </label>
						
						 <div class="col-md-4">
                                      
										
										  <select name="Time_Out" id="last-name2" required="required" class="form-control col-md-7 col-xs-12">
                                          
											
											<?php
											For ($hours=0; $hours<24; $hours++) // the interval for hours is '1'
											for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
											echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
											.str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';
											?>



										
						</select>

										</div>
                                </div>
								
										<body>


                                    </div>
                                </div>
								
								
								
                            
              <center>
				<input type="submit"  class="btn btn-success"name="add" value="Continue" class="btn btn-primary"/>
			   <a href="user.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
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

