<header>
	
	<img src="admin/uploadpics/logo.png" height="50" width="60">
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
			<li><a href="aboutus.c">ABOUT US</a></li>
		</ul>
		</div>
		
