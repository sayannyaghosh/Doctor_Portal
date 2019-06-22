<?php
include("config.php");

if($_SESSION["is_login"]=="" or !isset($_SESSION['is_login']))
{
    header("location:index.php");
}
?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST['dname'];
$email=$_REQUEST['demail'];
$pic=$_FILES['dpic'];
$file_name=$pic['name'];
	$old=$pic['tmp_name'];
	$new="images/".$file_name;
	move_uploaded_file($old,$new);
$phone=$_REQUEST['dphn'];
$qualification=$_REQUEST['dquali'];
$dept=$_REQUEST['t1'];
$experience=$_REQUEST['dexp'];
$fees=$_REQUEST['dfee'];
$sql="insert into doctor_tbl values(NULL,'$name','$email','$file_name','$phone','$qualification','$dept','$experience','$fees')";
mysqli_query($con,$sql);
}
?>

<!=======================================DOCTYPE html=============================================>

<html lang="en">
    <head><title>Admin Home Page</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content=""> 

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        
        
        
        
         <script type="text/javascript">
            
        </script>  
    </head>
    
    <body>

        <div id="wrapper">

                <?php include("header.php");?>      
         
                <?php include("sidebar.php");?> 
                
                
<!========================================Form=========================================================>           <br/>     
            
       <div id="page-wrapper">
    
           <div class="span10">
            
                        <form class="form-horizontal"  method="post" enctype="multipart/form-data">
                                     
                          <fieldset>
                                   <div class="alert alert-success">
                                      <h3>Add Doctor</h3>
                        	       </div>
 <!========================================Form=========================================================>
 <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Name</strong></label>
                 <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" name="dname">
                 </div>
        </div>  
		
		 <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Email</strong></label>
                 <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="email" name="demail">
                 </div>
        </div>  
		
		 <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Pic</strong></label>
                 <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="file" name="dpic">
                 </div>
        </div>                              
        
        <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Phone No.</strong></label>
                 <div class="controls">
                    <input name="dphn" type="text" class="input-xlarge focused" id="focusedInput" value="">
                 </div>
        </div>
        <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Qualification</strong></label>
                 <div class="controls">
                    <input name="dquali" type="text" class="input-xlarge focused" id="focusedInput" value="">
                 </div>
        </div>
       <div class="control-group success">
              <label for="inputError" class="control-label"><strong>Department</strong></label>
                 <div class="controls">
                    <select id="selectError" name="t1"> 
               <?php 
			   $sql="select * from dept_tbl";
			   $rs=mysqli_query($con,$sql);
			   while($d=mysqli_fetch_array($rs))
			   {
			   ?>
                          
                        <option value="<?php echo $d['dept_id'];?>"><?php echo $d['dept_name'];?>
                         
                        </option>
                       
                 <?php
				 }
				 ?>       
                    </select>
                     
                        </div>
                
        </div>
		
		
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Experience</strong></label>
                 <div class="controls">
                    <input name="dexp" type="text" class="input-xlarge focused" id="focusedInput" value="">
                 </div>
        </div>
        
        <div class="control-group success">             
              <label class="control-label" for="inputError"><strong>Fees</strong></label>
                 <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" name="dfee" required>
                 </div>
                 </div>                     
		
	         
        <div class="form-actions">                    
        <button type="submit" class="btn btn-outline btn-success" onClick="return alert('DATA SAVED SUCCESSFULLY')">Save Data</button>                  
        
        <button type="submit" class="btn btn-outline btn-danger">Cancel</button>
            
            
        </div> 
<!======================================================================================================>
                              
            
            </fieldset>
            </form>
        </div>   
                
   </div>  
   
                       
<!======================================================================================================>            
            </div>
            
            
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

    </body>
</html>
