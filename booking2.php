<?php
include "config.php";
$id=$_REQUEST['id'];
?>
<?php
$msg="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$user_id=$_SESSION['userid'];
$t1=$_POST['t1'];
$day=$_POST['day'];
$date=$_POST['date'];
$expire = strtotime($date. ' + 0 days');
$today = strtotime("today midnight");

		if($today >= $expire)
			{
				$msg= " Booking failed date expired";
			} 
		else {
			$dayOfWeek = date("l", strtotime($date));
				if($dayOfWeek!=$day)
				{
					$msg="Day does not match with date booking failed";
				}
				else
				{
				$sql2="insert into booking_tbl values(NULL,'$id','$user_id','$t1','$day','$date')";
				mysqli_query($con,$sql2);
				$msg=" $date  fell on a  $dayOfWeek  active  booking successfull" ;
				
				}
			}


}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Doctor portal </title>	
	</head>
     <style>
		
		body
		{
		background-image:url(../aman/user/img/x.jpg);
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
		    
			
		
		<form method="post" name="f1">
		 
		    <table border="1" width="100%" height="200px">
				<thead>
				<tr>
                <th>SL NO.</th>
                <th>Doctor name</th>
				<th>Day</th>
				<th>Start time</th>
				<th>End time</th>
				<th>No. of patient</th>
                <th> CHOOSE DATE </th>
				<th> BOOK </th>
				</tr>
				</thead>
				<tbody>							
								
								<?php
								$sql="select * from alloted_tbl where aid='$id'";
								$rs=mysqli_query($con,$sql);
								$count=1;
								while($d=mysqli_fetch_array($rs))
                                {
								 ?>
                                        <tr>
										<td><?php echo $count;?></td>
				                        <td><input type="text" name="t1" readonly value="<?php $sql1="select * from doctor_tbl where docid=".$d['docid'];
										$rs1=mysqli_query($con,$sql1);
										$d1=mysqli_fetch_array($rs1);
										echo $d1['docname'];?>"></td>
										                               
                               
                                        <td> <input type="text" name="day" readonly value="<?php echo $d['day'];?>"> </td>
										<td><?php echo $d['starttime'];?></td>
										<td><?php echo $d['endtime'];?></td>
										<td><?php echo $d['noofpatients'];?></td>
										<td><input type="date" name="date"  value="date">  </td>
										<td><input type="submit" name="submit"  value="book">  </td>
										</tr>
										<?php
									    $count++;
								         }
											  ?>
											
                                    </tbody>    
			</table>
			<table border="1">
			<tr><td><?php echo "$msg"?></td></tr>
			</table>
			
			
		</form>
	</body>
</html>