<?php

$con = mysqli_connect("localhost","root","","doctor");
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<title>DEPT</title>
	</head>
	<body>
		   <?php include("header.php");?>
			<table border="1">
				
						 <thead>
											<tr>
                                            <th>SL NO.</th>
                                                <th>doc name</th>
												<th>day</th>
												<th>start time</th>
												<th>end time</th>
												<th>no of patient</th>
                                               
												<th> BOOK </th>
												
											</tr>
										</thead>
								<tbody>
				
										<?php
											$docid=$_REQUEST['did'];
										?>
                                            <?php
                                      $sql="select * from allorted_tbl where docid='$docid'";
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
	<td><?php echo $d['noofpatient'];?></td>
											<td><a href="#"> BOOK </a></td>
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