<html>
<head>
<script>
function formvalid()
{
if(document.f1.t2.value=="")
{
alert("PLEASE PROVIDE YOUR EMAIL");
document.f1.t2.focus();
return false;
}
if(document.f1.t3.value=="" || isNaN(document.f1.t3.value) || document.f1.t3.value.length!=10)
{
alert("PLEASE PROVIDE YOUR PHONE NO.");
document.f1.t3.focus();
return false;
}
if(document.f1.t4.value=="" || isNaN(document.f1.t4.value))
{
alert("PLEASE PROVIDE PASSWORD ");
document.f1.t4.focus();
return false;
}
return true;
}
</script>

<?php
$msg="";
$con=mysqli_connect("localhost","root","","doctor_master");
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$name=$_POST['t1'];
	$email1=$_POST['t2'];
	$phn=$_POST['t3'];
	$psw=$_POST['t4'];
	$rpsw=$_POST['t5'];
	if($psw==$rpsw)
	{
		$sql1="select * from reg_tbl where usermail='$email1'";
		$rs=mysqli_query($con,$sql1);
		$ct=mysqli_num_rows($rs);
		if($ct==0)
		{
	    $sql="insert into reg_tbl values(NULL,'$name','$email1','$phn','$psw')";
		$n=mysqli_query($con,$sql);
		if($n)
		{
			$msg="REGISTRATION SUCCESSFUL";
		}
		else
		{
			$msg="REGISTRATION FAILED";
		}
		}
		else
		{
			$msg="USER ALREADY EXISTS";
		}
	}
	
	else
	{
		$msg="YOUR PASSWORD MISMATCH";
	}
}
?>
	
</head>


<?php include "index.php";?>
<style>


.border{
	padding:30px 30px 30px 30px;
	border:solid#000;
	background-color:#3CF;
	margin-top:70px;
	margin-bottom:70px;
	margin-left:450px;
	margin-right:450px;
}
</style>
<body>
<form name="f1"  method="post" onsubmit="return(formvalid());" align="center">

<div class="border">
<form name="f1" method="post">
<table>
<tr>
<td>ENTER YOUR NAME</td>
<td><input type="text" name="t1" placeholder="name"></td>
</tr>
<tr>
<td>ENTER EMAIL</td>
<td><input type="text" name="t2"placeholder="email"></td>
</tr>
<tr>
<td>ENTER PHONE</td>
<td><input type="text" name="t3" placeholder="phone"></td>
</tr>
<tr>
<td>ENTER PASSWORD</td>
<td><input type="password" name="t4"placeholder="password"></td>
</tr>
<tr>
<td>RETYPE PASSWORD</td>
<td><input type="password" name="t5"placeholder="Retype password"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="s1" value="REGISTER"></td>
</tr>
</table>
</form>
</div>
<?php echo $msg;?>


</body>
</html>