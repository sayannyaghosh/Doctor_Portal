<?php
include "config.php";

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Doctor portal</title>
</head>
 <style>
		
		body
		{
		background-image:url(../aman/user/img/co.jpg);
		background-repeat: no-repeat;
    background-size: cover;
	background-position:center;
	margin:0;
	font:size:20px;
	line-height:24px;
		}
		</style>

<body>
            <?php include("header2.php");?>
		    
            
            <?php $user_id=$_SESSION['userid'];?>
			<?php
				$sql="select * from booking_tbl where userid='$user_id'";
				$rs=mysqli_query($con,$sql);
			?>
			<form name="f6" method="POST">
			
			<h2 align="center" style="color:blue">HISTORY</h2>
			
			<table border="1" width="100%" height="100px" >
            <thead>
			<tr>
			<td>SL NO.</td>
			<td>DOCTOR NAME</td>
			<td>DAY</td>
			<td>DATE</td>
			</tr>
            </thead>
			<?php
				$count=1;
				while($d=mysqli_fetch_array($rs))
				{
				?>
				
			<tr>
			<td><?php echo $count;?></td>
			<td><?php echo $d['docname'];?></td>
			<td><?php echo $d['day'];?></td>
			<td><?php echo $d['date'];?></td>
			
			<?php
				$count++;
				}
			?>
			</tr>
			</table>
			
			</form>
		
</body>
</html>