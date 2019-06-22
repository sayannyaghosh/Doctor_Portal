<?php

$con = mysqli_connect("localhost","root","","doctor_master");
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
		background-image:url(admin/uploadpics/7.jpg);
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
                                            <th>SL NO.</th>
                                                <th>DOCTOR NAME</th>
												<th>EMAIL</th>
												<th>PIC </th>
												<th>PHONE NO.</th>
												<th>QUALIFICATION</th>
												<th>EXPERINCE</th>
												<th>FEES.</th>
												<th>DEPARTMENT</th>  
												<th>BOOK</th>  
											</tr>
										</thead>
                                        <tbody>
										<?php
											$id=$_REQUEST['did'];
										?>
                                            <?php
                                      $sql="select * from doctor_tbl where docdept='$id'";
                                      $rs=mysqli_query($con,$sql);
									  $count=1;
                                      while($d=mysqli_fetch_array($rs))
                                      {
                                             ?>
                                            <tr>
                                            
   											<td><?php echo $count;?></td>
											<td><?php echo $d['docname'];?></td>
											<td><?php echo $d['docemail'];?></td>
											<td><img src="admin/images/<?php echo $d['docpic'];?>" height="70" width="100"></td>
											<td><?php echo $d['docphn'];?></td>
											<td><?php echo $d['docquali'];?></td>
											<td><?php echo $d['docexp'];?></td>
											<td><?php echo $d['docfees'];?></td>
											<td><?php $sql1="select * from dept_tbl where dept_id=".$d['docdept'];
											$rs1=mysqli_query($con,$sql1);
											$d1=mysqli_fetch_array($rs1);
											echo $d1['dept_name'];
											?></td>
											<td><a href="booking.php?did=<?php echo $d['docid'];?>"> BOOK </a></td>
                                             <?php
											 $count++;
									  }
									  ?>
											
                                           
										</tbody>
									</table>
		
		
		
		
		
		
		
		
		
		
		
		
	</body>
</html>