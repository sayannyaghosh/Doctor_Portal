<?php

$con = mysqli_connect("localhost","root","","doctor_master");
?>
<html>
	<head>
		<title>home</title>
		<style>
		body
		{
		background-image:url(admin/images/6.jpg);
		background-repeat: no-repeat;
    background-size: cover;
	background-position:center;
	margin:0;
	font:size:20px;
	line-height:24px;
		}
		
		header
		{
				width:100%;
				background:blue;
				opacity:0.8;
				color:#FFFFFF;
				
		}
			header header1
			
			{
				float:right;
				font-family:verdana;
				padding-top:15px;
				padding-right:30px;
				
			}
			
			body
			{
				
				font-family:verdana;
				font:size:20px;
				margin:0;
				line-height:24px;
			}
			.navbar
			{
				text-align:center;
				width:100%;
				background:blue;
				opacity:0.8;
				
				
			}
			.navbar ul
			{
				margin:0;
				padding:0;
				list-style:none;
				position:relative;
			}
			.navbar ul li a
			{
					display:block;
					color:white;
					padding:25px;
					text-decoration:none;
					width:150px;
			}
			.navbar ul:after
			{
				content:"";
				clear:both;
				display:block;
			}
			.navbar ul li
			{
				float :left;
				list-style:none;
			}
			.navbar ul ul
			{
				display:none;
			}
			.navbar ul li:hover > ul
			{
				display:block;
			}
			.navbar ul li:hover 
			{
				background:black;
				transition:0.9s;
			}
			.navbar ul li:hover a
			{
				color:white;
			}
			.navbar ul ul
			{
				background:black;
				padding:0;
				margin:0;
				position:absolute;
				top:100%;
			}
			.navbar ul ul li
			{
				float:none;
				position:relative;
				
			}
			.navbar ul ul a
			{
				padding:10px 0px 0px 30px;
				color:white;
				width:300px;
				text-align:left;
				
			}
			.navbar ul ul li a:hover
			{
				background:lightblue;
				color:black;
				transition:0.9s;
			}	
			footer
{
	padding:2em;
	color:#000;
	background-color:#E8E8E8;
	clear:left;
	text-align:center;
	margin-top:600px;
	margin-bottom:0px;
	opacity:0.8;
	max-height:20px;
}
			
			
		</style>

		
		
	</head>
	<body>
	 
	 <header>
	
	<img src="admin/uploadpics/logo.png" height="70" width="80">
		<b>HEALTH PORTAL</b>
	
		
	</header>
		
		<div class ="navbar">
		
		<ul>
			<li><a href="index.php">HOME</a></li>
			
			<li><a href="#">DEPARTMENT</a>
				<ul>
					  <?php 
			   $sql="select * from dept_tbl";
			   $rs=mysqli_query($con,$sql);
			   while($d=mysqli_fetch_array($rs))
			   {
			   ?>
                          
                        <li>
						<a href ="doctorlist.php?did=<?php echo $d['dept_id'];?>"><?php echo $d['dept_name'];?></a>
                         
                        </li>
                       
                 <?php
				 }
				 ?>       
				</ul>
			</li>
			
				
			<li><a href="contactus.php">CONTACT US</a></li>
			<li><a href="aboutus.php">ABOUT US</a></li>
		</ul>
		</div>
		   
	</body>
</html>