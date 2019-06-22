<?php

$con = mysqli_connect("localhost","root","","doctor");
?>
<html>
	<head>
		<head>
		<title>doctor list</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
		
	</head>
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
												<th>QUALI FICATION</th>
												<th>EXPIR IENCE</th>
												<th>VISIT.</th>
												<th>DEPAR TMENT</th>  
												<th>BOOK</th>  
											</tr>
										</thead>
                                        <tbody>
										<?php
											$id=$_REQUEST['did'];
										?>
                                            <?php
                                      $sql="select * from doctor_tbl where docdepartment='$id'";
                                      $rs=mysqli_query($con,$sql);
									  $count=1;
                                      while($d=mysqli_fetch_array($rs))
                                      {
                                             ?>
                                            <tr>
                                            
   											<td><?php echo $count;?></td>
											<td><?php echo $d['docname'];?></td>
											<td><?php echo $d['docemail'];?></td>
											<td><img src="../admin/upload/<?php echo $d['docpic'];?>" height="70" width="100"></td>
											<td><?php echo $d['docphn'];?></td>
											<td><?php echo $d['docquali'];?></td>
											<td><?php echo $d['docexp'];?></td>
											<td><?php echo $d['docvisit'];?></td>
											<td><?php $sql1="select * from dept_tbl where dept_id=".$d['docdepartment'];
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