<?php
include("config.php");

if($_SESSION["is_login"]=="" or !isset($_SESSION['is_login']))
{
    header("location:index.php");
}
?>
<?php
$id=$_REQUEST['id'];
if($_SERVER['REQUEST_METHOD']=='POST')
{
$x1=$_POST['t1'];
$x2=$_POST['t2'];
$x3=$_POST['t3'];
$x4=$_POST['t4'];
$x5=$_POST['t5'];
	$sql="update alloted_tbl set docid='$x1',day='$x2',starttime='$x3',endtime='$x4',noofpatients='$x5' where aid='$id'";
	
mysqli_query($con,$sql);
	
}
$sql1="select * from alloted_tbl where aid='$id'";
        $rs=mysqli_query($con,$sql1);
        $d=mysqli_fetch_array($rs);

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
                                      <h3>Update Alloted</h3>
                        	       </div>
 <!========================================Form=========================================================>
<div class="control-group success">
              <label for="inputError" class="control-label"><strong>Doctor Name</strong></label>
                 <div class="controls">
                    <select id="selectError" name="t1"> 
               <?php 
			   $sql1="select * from doctor_tbl";
			   $rs1=mysqli_query($con,$sql1);
			   while($d1=mysqli_fetch_array($rs1))
			   {
			   ?>
                          
                        <option value="<?php echo $d1['docid'];?>" <?php if($d['docid']==$d1['docid']){ ?> selected="selected"<?php }?>><?php echo $d1['docname'];?>
                         
                        </option>
                       
                 <?php
				 }
				 ?>       
                    </select>
                     
                        </div>
                
        </div>
		
		
		
		
		
		
<div class="control-group success">
              <label class="control-label" for="inputError"><strong>day</strong></label>
                 <div class="controls">
                   <input class="input-xlarge focused" id="focusedInput" type="text" name="t2" value="<?php echo $d['day'];?>">
                 </div>
        </div>  
<div class="control-group success">
              <label class="control-label" for="inputError"><strong>start time</strong></label>
                 <div class="controls">
                   <input class="input-xlarge focused" id="focusedInput" type="text" name="t3" value="<?php echo $d['starttime'];?>">
                 </div>
        </div>  
<div class="control-group success">
              <label class="control-label" for="inputError"><strong>end time</strong></label>
                 <div class="controls">
                   <input class="input-xlarge focused" id="focusedInput" type="text" name="t4" value="<?php echo $d['endtime'];?>">
                 </div>
        </div>  
		
<div class="control-group success">
              <label class="control-label" for="inputError"><strong>no of patient</strong></label>
                 <div class="controls">
                   <input class="input-xlarge focused" id="focusedInput" type="text" name="t5" value="<?php echo $d['noofpatients'];?>">
                 </div>
        </div>  
		
		
		
	         
        <div class="form-actions">                    
        <button type="submit" class="btn btn-outline btn-success" onClick="return alert('DATA UPDATED')">update</button>                  
        
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
