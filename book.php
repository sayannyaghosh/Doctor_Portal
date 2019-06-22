<?php include("connect1.php");?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<title>DEPT</title>
	</head>
	<body>
		   <div class="bgimage">
			<?php include("menu.php");?>
			<!--<div class="bdy">-->
			<!--<table width="100%" cellspacing="5">-->
										<?php
											$id=$_REQUEST['ab'];
										?>
										<div class="bdy5">
                                            <?php
                                      $sql="select * from doctor_tbl where docdept='$id'";
                                      $rs=mysqli_query($con,$sql);
                                      while($d=mysqli_fetch_array($rs))
                                      {
                                             ?>
											<div class="bdy3"> 
                                            <img src="../admin/upload/<?php echo $d['docpic'];?>" height="100%" width="100%">
											</div>
											<div class="bdy3">
											<table>
											<tr>
											<td>NAME</td>
											<td>:</td>
											<td><?php echo $d['docname'];?></td>
											</tr>
											<tr>
											<td>EMAIL</td>
											<td>:</td>
											<td><?php echo $d['docemail'];?></td>
											</tr>
											<tr>
											<td>PHN N0.</td>
											<td>:</td>
											<td><?php echo $d['docphn'];?></td>
											</tr>
											<tr>
											<td>QUALIFICATION</td>
											<td>:</td>
											<td><?php echo $d['docquali'];?></td>
											</tr>
											<tr>
											<td>EXPERIENCE</td>
											<td>:</td>
											<td><?php echo $d['docexp'];?></td>
											</tr>
											<tr>
											<td>FEES</td>
											<td>:</td>
											<td><?php echo $d['docfee'];?></td>
											</tr>
											<tr>
											<td>SPECIALIST</td>
											<td>:</td>
											<td><?php $sql1="select * from dept_tbl where dept_id=".$d['docdept'];
											$rs1=mysqli_query($cn,$sql1);
											$d1=mysqli_fetch_array($rs1);
											echo $d1['dept_name'];
											?></td>
											</tr>
											</table>
											<a href="booking2.php ?ab=<?php echo $d['docid'];?>"> TIMING </a></td>
											</div>
                                             <?php
									  }
									  ?>
											
                                        
									
	</div>
	</div>
	<?php include("footer.php");?>
	</body>
</html>