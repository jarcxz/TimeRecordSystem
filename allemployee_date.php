

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
					
                       <h3><i class="fa fa-users"></i> All Employee Logs</h3> 
		
									   
			<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script>
<form action="allemployee_date.php" method="get">
   <button id="export" class="btn btn-info">Export Excel</button>
From : <input type="text" name="d1" class="tcal" value="" /> To: <input type="text" name="d2" class="tcal" value="" /> <input type="submit" value="Search">
</form>



	
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
						
						
						
						
						<table id="example" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
								
							<thead>
								<tr>
									<th> Date </th>
									<th>Employee ID Number</th>
									<th> Name </th>							
									<th> Position </th>
									<th>Time Logged In</th>				
									<th>Time Logged Out</th>
									<th>Start Time</th>
									<th>End Time</th>
									<th>Total Hours(Day)</th>
									
								
									
									</tr>
							</thead>
							
							
										
							
							<tbody>
	
							
							
							
							<?php
include('Conn/connect.php');
if (isset($_GET["d1"])) { $d1  = $_GET["d1"]; } else { $d1=0; }; 
if (isset($_GET["d2"])) { $d2  = $_GET["d2"]; } else { $d2=0; }; 
$result = $db->prepare("SELECT * FROM check_in WHERE date1 BETWEEN :a AND :b");
$result->bindParam(':a', $d1);
$result->bindParam(':b', $d2);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
?>
							
						
							<tr>
								<td><?php echo $row['date1']; ?> </td>
								<td><?php echo  $row['company_number']; ?></a></td> 
								
								<td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></td> 
								<td><?php echo $row['department']; ?></td> 
							
							
								<td><?php echo $row['check_in']; ?></td> 
								<td><?php echo $row['check_out']; ?> </td> 
								<td><?php echo $row['Time_In']; ?> </td>
								<td> <?php echo $row['Time_Out']; ?> </td>
								<td><?php echo $row['total_hours']; ?> </td>  
									
									
								
								<script src="table2excel/src/jquery.table2excel.js" type="text/javascript"></script>

<script>
    $("#export").click(function(){
        $("#example").table2excel({

            // exclude CSS class
            exclude: ".noExl",
            name: "Worksheet Name",
        filename: "Reeracoen Time Record" //do not include extension
    });
    });

</script>	
				
									




			
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










