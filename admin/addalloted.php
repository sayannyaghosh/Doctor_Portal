<?php
include("config.php");

if($_SESSION["is_login"]=="" or !isset($_SESSION['is_login']))
{
    header("location:index.php");
}
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$docid=$_POST['t1'];
$day=$_POST['t2'];
$starttime=$_POST['t3'];
$endtime=$_POST['t4'];
$nop=$_POST['t5'];
	
$sql="insert into alloted_tbl values(NULL,'$docid','$day','$starttime','$endtime','$nop')";
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
            
                        <form class="form-horizontal"  method="post">
                                     
                          <fieldset>
                                   <div class="alert alert-success">
                                      <h3>Add Alloted</h3>
                        	       </div>
 <!========================================Form=========================================================>
 
		
		<div class="control-group success">
              <label for="inputError" class="control-label"><strong>Doctor name</strong></label>
                 <div class="controls">
                    <select id="selectError" name="t1"> 
               <?php 
			   $sql="select * from doctor_tbl";
			   $rs=mysqli_query($con,$sql);
			   while($d=mysqli_fetch_array($rs))
			   {
			   ?>
                          
                        <option value="<?php echo $d['docid'];?>"><?php echo $d['docname'];?>
                         
                        </option>
                       
                 <?php
				 }
				 ?>       
                    </select>
                     
                        </div>
                
        </div>
		
		
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Day</strong></label>
                 <div class="controls">
                   <input class="input-xlarge focused" id="focusedInput" type="text" name="t2">
                 </div>
        </div>  
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Start Time</strong></label>
                 <div class="controls">
                   <input class="input-xlarge focused" id="focusedInput" type="text" name="t3">
                 </div>
        </div>  
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>End Time</strong></label>
                 <div class="controls">
                   <input class="input-xlarge focused" id="focusedInput" type="text" name="t4">
                 </div>
        </div>  
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>No of Patients</strong></label>
                 <div class="controls">
                   <input class="input-xlarge focused" id="focusedInput" type="text" name="t5">
                 </div>
        </div>  
		
		
		
	         
        <div class="form-actions">                    
        <input type="submit" class="btn btn-success" onClick="return alert('DATA ADDED SUCCESSFULLY')" value="SAVE DATA">                  
        
        <button type="submit" class="btn btn-danger">Cancel</button>
            
            
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
