<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LOGIN</title>

<style>

.border{
	padding:5px 5px 5px 5px;
	border:solid#000;
	background-color:#3CF;
	margin-top:50px;
	margin-bottom:50px;
	margin-left:450px;
	margin-right:450px;
}
	
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
input[type="text"]
{
height:30px;
width:200px;

padding-left:10px;
padding-top:5px;
font-family:"Courier New", Courier, monospace;
font-size:16px;
}
input[type="password"]
{
height:30px;
width:200px;

padding-left:10px;
padding-top:5px;
font-family:"Courier New", Courier, monospace;
font-size:16px;
}
input[type="submit"]
{
height:30px;
width:100px;
background-color:#95b3d6;
color:#000000;
margin-bottom:100px;
}


</style>
<?php
include "config.php";
$id=$_REQUEST['id'];
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$email=$_POST['t1'];
	$password=$_POST['t2'];
	
		$sql="select * from reg_tbl where usermail='$email' and userpassword='$password'";
		$rs=mysqli_query($con,$sql);
		$n=mysqli_num_rows($rs);
		$data=mysqli_fetch_array($rs);
		if($n>0)
		{
			$reg=$data['userid'];
		$_SESSION["is_login"]="true";
		$_SESSION["userid"]=$reg;
        header("location:booking2.php?id=$id");
	}
}
?>
<body>
<?php include "index.php";?>
<div class="border">


<form method="post" align="center">
<h1>LOGIN</h1>
<p><b>USERNAME:<input type="text" name="t1" placeholder="ENTER USERNAME" /></b></p>

<p><b>PASSWORD:<input type="password" name="t2" placeholder="ENTER PASSWORD" required="required" /></b></p>
<input type="submit" value="LOGIN"/>
<br>not registered?<a href="registration1.php">sign up</a></br>

</div>

</form>
</body>
</html>
