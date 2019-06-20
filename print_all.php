<?php
	require_once 'session.php';
require_once 'log_out.php';
?>

<!DOCTYPE html>

<html lang = "eng">
	<head>

		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					
					<p class = "navbar-text pull-right">DAILY TIME RECORD</p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = ""></i><img src="images/<?php echo $f_adminname['admin_image']; ?>" width="25px" height="25px"  $nbsp/> <?php echo htmlentities($admin_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off" color="black"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li class = ""><a href = "#"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li class = "dropdown">
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-cog"></span> Accounts <span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						<li><a href = "admin.php"><span class = "glyphicon glyphicon-user"></span> Admin</a></li>
						<li><a href = "user.php"><span class = "glyphicon glyphicon-user"></span>OJT Student</a></li>
					</ul>
				</li>
				
				 <li><a href="javascript:Clickheretoprint()" title="Click here to print report."><span class = "glyphicon glyphicon-print">Print</span></a></li>
				</ul>
			<br/>

			<?php include ('header.php');

	?>

<?php ob_start(); ?>


	 
  
 

<?php
include('include/dbcon.php');

?>
<?php ob_start(); ?>

	 
 
	
	
	
<script language="javascript">
function Clickheretoprint()
{ 
		var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
		    disp_setting+="scrollbars=yes,width=250, height=180, left=100, top=15"; 
		var content_vlue = document.getElementById("print_content").innerHTML; 
		
		var docprint=window.open("","",disp_setting); 
			docprint.document.open(); 
			//docprint.document.write('<center><html><head>Custard Apple Outsourcing</html></center>'); 
			docprint.document.write('</head><body onLoad="self.print()">');          
			docprint.document.write(content_vlue);     
            //docprint.document.write('<p align=center><font face=arial  size=3 > Custard Apple</p></font>'); 			
			docprint.document.write('</body></html>'); 
			docprint.document.write('</body></html>	'); 
			docprint.document.close(); 
			docprint.focus(); 
}


</script>

<br>

<div class="style3" id="print_content">
 <center><table width="100%" border="0" cellspacing="0" cellpadding="2">
 <center><img src="images/custard.jpg" width="250" height="100" />	</center>
  <align="center"><h3><font color='black' face="Arial"> DTR REPORT - OJT / Trainee</font></h3>

  

  </center>
<br><br>

<table>

<table>

 
<td width="2%"> <b><i> ID Number</i></b></td>


<td width="6%"> <b><i> Date/Time - Logged in </i></b></td>
<td width="6%"><b><i> Date/Time - Logged out </i></b></td>
<td width="6%"><b><i> Total</i></b></td>

</tr>
</table>
<table width="70%" bordercolor='white' bgcolor='silver' border="1" align="center" cellpadding="2" cellspacing="0">
 <?php
		$sql= $conn->query("SELECT company_number,check_in,date1, check_in,check_out,total_hours  FROM  check_in");

		while($row = $sql->fetch_array())
	
		{
			$id=$row["company_number"];
			
			$check_in=$row["check_in"];
			$check_out=$row["check_out"];
				$total=$row["total_hours"];
					

	
?>



	
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
  
  background-color: #dddddd;
}
.btn {
  background: green;

  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
 
  text-decoration: none;
}
</style>

		


 
<table border class="uni">





 <tr>  

  
    
 
 
  
		
  

	    <td width="3%"><?php echo  $id; ?></font>
		
		    
    <td width="6%"><?php echo  date("M d, Y h:m:s a", strtotime($row["check_in"])); ?></font>

   
  
    <td width="6%"><?php echo date("M d, Y h:m:s a", strtotime($row["check_out"])); ?></font>


    <td width="6%"><?php echo $total; ?></font>


</tr>




   
  <?php
  } 
?>



</table>

<br>
  <br>
  <br>
   <br>
    <br>

  </div>
  


	 

 


 </div>

