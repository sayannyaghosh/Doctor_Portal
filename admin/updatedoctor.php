<?php
include("config.php");

if($_SESSION["is_login"]=="" or !isset($_SESSION['is_login']))
{
    header("location:index.php");
}

$id=$_REQUEST['did'];
if($_SERVER['REQUEST_METHOD']=='POST')
{
$name=$_POST['dname'];
$email=$_POST['demail'];
$pic=$_FILES['dpic'];
$phn=$_POST['dphn'];
$quali=$_POST['dquali'];
$exp=$_POST['dexp'];
$fees=$_POST['dfee'];
$dept=$_POST['ddept'];
if($pic['name']=="")
{
	$sql="update doctor_tbl set docname='$name',docemail='$email',docphn='$phn',docquali='$quali',docexp='$exp',docfees='$fees',docdept='$dept' where docid='$id'";
mysqli_query($con,$sql);
}
else
{
	$file_name=$pic['name'];
	$old=$pic['tmp_name'];
	$new="images/".$file_name;
	move_uploaded_file($old,$new);

	$sql="update doctor_tbl set docname='$name',docemail='$email',docpic='$file_name',docphn='$phn',docquali='$quali',docexp='$exp',docfees='$fees',docdept='$dept' where docid='$id'";
mysqli_query($con,$sql);
}
}
$sql1="select * from doctor_tbl where docid='$id'";
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
            
                        <form class="form-horizontal"  method="post" enctype="multipart/form-data">
                                     
                          <fieldset>
                                   <div class="alert alert-success">
                                      <h3>Update Doctor</h3>
                        	       </div>
 <!========================================Form=========================================================>
 <div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Name</strong></label>
                 <div class="controls">
                   <input class="input-xlarge focused" id="focusedInput" type="text" name="dname" value="<?php echo $d['docname'];?>">
                 </div>
        </div>  
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Email</strong></label>
                 <div class="controls">
                   <input class="input-xlarge focused" id="focusedInput" type="text" name="demail" value="<?php echo $d['docemail'];?>">
                 </div>
        </div>  
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor pic</strong></label>
                 <div class="controls">
                   <input type="file" name="dpic" value="<?php echo $d['docpic'];?>">
                 </div>
        </div>  
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor phn</strong></label>
                 <div class="controls">
                   <input class="input-xlarge focused" id="focusedInput" type="text" name="dphn" value="<?php echo $d['docphn'];?>">
                 </div>
        </div>  
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Qualification</strong></label>
                 <div class="controls">
                   <input class="input-xlarge focused" id="focusedInput" type="text" name="dquali" value="<?php echo $d['docquali'];?>">
                 </div>
        </div>  
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor exprience</strong></label>
                 <div class="controls">
                   <input class="input-xlarge focused" id="focusedInput" type="text" name="dexp" value="<?php echo $d['docexp'];?>">
                 </div>
        </div>  
		<div class="control-group success">
              <label class="control-label" for="inputError"><strong>Doctor Fees</strong></label>
                 <div class="controls">
                   <input class="input-xlarge focused" id="focusedInput" type="text" name="dfee" value="<?php echo $d['docfees'];?>">
                 </div>
        </div>  
		
		
		
		
		<div class="control-group success">
              <label for="inputError" class="control-label"><strong>Doctor Department</strong></label>
                 <div class="controls">
                    <select id="selectError" name="ddept"> 
               <?php 
			   $sql1="select * from dept_tbl";
			   $rs1=mysqli_query($con,$sql1);
			   while($d1=mysqli_fetch_array($rs1))
			   {
			   ?>
                          
                        <option value="<?php echo $d1['dept_id'];?>" <?php if($d['docdept']==$d1['dept_id']){ ?> selected="selected"<?php }?>><?php echo $d1['dept_name'];?>
                         
                        </option>
                       
                 <?php
				 }
				 ?>       
                    </select>
                     
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
