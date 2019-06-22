<?php

$con = mysqli_connect("localhost","root","","doctor_master");
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../doctor/style.css"/>
		<title>DEPT</title>
	</head>
    	<style>
		body
		{
		background-image:url(admin/uploadpics/5.jpg);
		background-repeat: no-repeat;
    background-size: cover;
	background-position:center;
	margin:0;
	font:size:20px;
	line-height:24px;
		}
		</style>
	<body>
		   <?php include("../doctor/header.php");?>
			<table border="1">
				
						 <thead>
											<tr>
                                            <th>SL NO.</th>
                                                <th>Doc name</th>
												<th>Day</th>
												<th>Start Time</th>
												<th>End Time</th>
												<th>No of Patients</th>
                                               
												<th> BOOK </th>
												
											</tr>
										</thead>
								<tbody>
				
										<?php
											$docid=$_REQUEST['did'];
										?>
                                            <?php
                                      $sql="select * from alloted_tbl where docid='$docid'";
                                      $rs=mysqli_query($con,$sql);
									  $count=1;
                                      while($d=mysqli_fetch_array($rs))
                                      {
                                             ?>
                                            <tr>
	<td><?php echo $count;?></td>
	<td><?php $sql1="select * from doctor_tbl where docid=".$d['docid'];
	$rs1=mysqli_query($con,$sql1);
	$d1=mysqli_fetch_array($rs1);
	echo $d1['docname'];
	?></td>
	<td><?php echo $d['day'];?></td>
	<td><?php echo $d['starttime'];?></td>
	<td><?php echo $d['endtime'];?></td>
	<td><?php echo $d['noofpatients'];?></td>
											<td><a href="login.php?id=<?php echo $d['aid'];?>"> BOOK </a></td>
											</tr>
                                             <?php
											 $count++;
									  }
									  ?>
											
                                    </tbody>    
									</table>
	</div>
	</div>
	</body>
</html>