<?php
include("config.php");

if($_SESSION["is_login"]=="" or !isset($_SESSION['is_login']))
{
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Admin Home Page</title>
        <!-- Bootstrap -->
        <!-- Bootstrap -->
        <!-- Bootstrap Core CSS -->
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>
    
    <body>   
                <?php include("header.php");?>      
         
                <?php include("sidebar.php");?> 
       
       
       <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">               
<marquee behavior="alternate" scrollamount="16">   <h1 class="page-header">VIEW DOCTOR</h1></marquee>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
       
       
       
       <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12" >
                        <div class="panel panel-default">
                            
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover"  id="dataTables-example">

                                        <thead>
											<tr>
                                            <th>SL NO.</th>
                                                <th>NAME</th>
												<th>EMAIL</th>
												<th>PIC</th>
												<th>PHONE NO.</th>
                                               
												<th> QUALIFICATION </th>
                                                <th> DEPARTMENT </th>
												<th>EXPERIENCE</th>
                                                <th>FEES</th>
                                                <th>EDIT</th>
                                                <th>DELETE</th>
											
                                                
                                                
                                                
											</tr>
										</thead>
                                        <tbody>
                                            <?php
                                      $sql="select * from doctor_tbl";
                                      $rs=mysqli_query($con,$sql);
									  $count=1;
                                      while($d=mysqli_fetch_array($rs))
                                      {
                                             ?>
                                            <tr>
                                            
   											<td><?php echo $count;?></td>
											<td><?php echo $d['docname'];?></td>
											<td><?php echo $d['docemail'];?></td>
                                            <td><img src="images/<?php echo $d['docpic'];?>"height="100" width="80"></td>
                                            
											<td><?php echo $d['docphn'];?></td>
											<td><?php echo $d['docquali'];?></td>
                                            <td><?php $sql1="select * from dept_tbl where dept_id=".$d['docdept'];
											$rs1=mysqli_query($con,$sql1);
											$d1=mysqli_fetch_array($rs1);
											echo $d1['dept_name'];
											?></td>
                                            <td><?php echo $d['docexp'];?></td>
                                            <td><?php echo $d['docfees'];?></td>
                                            
											
                                           <td><a href ="updatedoctor.php?did=<?php echo $d['docid'];?>">EDIT</a></td>
										<td><a href ="deletedoctor.php?did=<?php echo $d['docid'];?>">DELETE</a></td>
                                            </tr>
                                             <?php
											 $count++;
									  }
									  ?>
											
                                           
										</tbody>
									</table>
                                </div>
                            </div>    
                        </div>  
                    </div>
           </div>
       </div>
                                    
           
           
               
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="js/dataTables/jquery.dataTables.min.js"></script>
        <script src="js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        

    </body>

</html>