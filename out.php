<?php


$sql = $conn->query("SELECT  company_number, time(time(check_out) - time(check_in))) as total FROM check_in where company_number = '$id' order by date1 ASC"); 
	while($rows = $sql->fetch_array())
$sum  = $rows['total'];	

