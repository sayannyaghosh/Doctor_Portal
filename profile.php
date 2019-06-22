<html>
<?php 
include("config.php");

$userid=$_SESSION['userid'];
?>

	<head>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<title>HOME</title>
		<?php
		$sql1="select * from reg_tbl where userid='$userid'";
		$rs1=mysqli_query($con,$sql1);
		$d1=mysqli_fetch_array($rs1);
		?>
	</head>
     <style>
		
		body
		{
		background-image:url(admin/uploadpics/CHORDS-slideshow.jpg);
		background-repeat: no-repeat;
    background-size: cover;
	background-position:center;
	margin:0;
	font:size:20px;
	line-height:24px;
		}
		</style>
	<body>
    
		<?php include "header2.php" ?>
			<h3>PROFILE</h3>
			
			<table cellspacing="10">
			<tr>
			<td> NAME</td>
			<td>:</td>
			<td><?php echo $d1['username'];?></td>
			</tr>
			<tr>
			<td>EMAIL</td>
			<td>:</td>
			<td><?php echo $d1['usermail'];?></td>
			</tr>
			<tr>
			<td>PHONE</td>
			<td>:</td> 
			<td><?php echo $d1['userphn'];?></td>
			</tr>
			<tr>
			
  </table>
  </div>
		</div>
		
	</body>
</html>