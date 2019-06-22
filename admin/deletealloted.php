<?php
$id=$_REQUEST['id'];
$cn=mysqli_connect("localhost","root","","doctor_master");
$sql="delete from alloted_tbl where aid='$id'";
mysqli_query($cn,$sql);
header("location:viewalloted.php");

?>