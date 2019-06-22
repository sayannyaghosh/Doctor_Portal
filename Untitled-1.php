<?php
$ct=1;
$con = mysqli_connect("localhost","root","","doctor_master");
$sql="select * from reg_tbl";
$rs=mysqli_query($con,$sql);
?>
<html>
	<head>
		<head>
		<title>doctor list</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
		
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
	 <?php include("header.php");?>
		
		
							<table border="1">

                                        <thead>
											<tr>
                                            
                                                <th>NAME</th>
												<th>EMAIL</th>
									            <th>PHONE NO.</th>
												 
											</tr>
										</thead>
                                        <tbody>
								
                                            <?php
                                      
                                      while($d=mysqli_fetch_array($rs))
                                      {
                                             ?>
                                            
                                            <tr>
   											
											<td><?php echo $d['username'];?></td>
											<td><?php echo $d['usermail'];?></td>
											
											<td><?php echo $d['userphn'];?></td>
											
											
									</tr>		
                                             <?php
											 
									  }
									  ?>
											
                                           
										</tbody>
									</table>
		
		
		
		
		
		
		
		
		
		
		
		
	</body>
</html>