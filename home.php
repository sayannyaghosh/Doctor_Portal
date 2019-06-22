<?php 
include("connect.php");
include("sessionchck.php");
$aid=$_SESSION['aid'];
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style_1.css"/>
		<title>HOME</title>
		<?php
$msg="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$date=$_POST['date'];
$day=$_POST['day'];
@$t1=$_POST['t1'];
$userid=$_SESSION['userid'];
$aid=$_SESSION['aid'];
$expire = strtotime($date. ' + 2 days');
$today = strtotime("today midnight");
		if($today >= $expire)
			{
				$msg= " booking failed date expired";
			} 
		else {
			$dayOfWeek = date("l", strtotime($date));
				if($dayOfWeek!=$day)
				{
					$msg="day does not match with date booking failed";
				}
				else
				{
					
					$sql6="insert into booking_tbl values(NULL,'".$aid."','".$userid."','".$t1."','".$day."','".$date."')";
	mysqli_query($cn,$sql6);
				$msg=" $date  fell on a  $dayOfWeek  active  booking succesfull" ;
				}
			}


}
?>
	
	</head>
	<body>
		<div class="bgimage">
			<?php include("menu.php");?>
		<div class="home">
			
		<?php $userid=$_SESSION['userid'];?>
		<form method="post" name="f1">
		<h3>BOOK</h3>
		<center><img src="icon/75.ico"></center>
		<table cellspacing="5">
		 <?php
								$sql="select * from allored_tbl where aid='$aid'";
      							  $rs=mysqli_query($con,$sql);
                                      $d=mysqli_fetch_array($rs);
                                      
                                             ?>
                                            
												
												<?php $sql1="select * from doctor_tbl where docid=".$d['docid'];
												$rs1=mysqli_query($con,$sql1);
												$d1=mysqli_fetch_array($rs1);
												?>
                                                 
												 <tr>
												 <td>DOCTOR NAME</td>
												 <td>:</td>
												 <td><input type="text" id="fname" name="t1" value="<?php echo $d1['docname'];?>" readonly></td> 
												 </tr>
												
                                                <tr>
												<td>DAY</td>
												 <td>:</td>												
												<td><input type="text" name="day" readonly value="<?php echo $d['day'];?>"></tr>
												</tr>
												
												<tr>
												<td>DATE</td>
												 <td>:</td>		
												<td><input type="date" name="date"  value="date"></td>
												</tr>
												</table>
												<v><input type="submit" name="submit"  value="Book"></v>
			
												<?php echo "$msg"?>
			
			
		</form>
		  </div>
		</div>
		<?php include("footer.php");?>
	</body>
</html>