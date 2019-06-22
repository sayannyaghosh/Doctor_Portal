 <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-mobile-phone fa-5x"></i>
                                    </div>
									
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div>Total Purchase</div>
                                    </div>
                                </div>
                            </div>
                            <a href="viewpurchase.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-arrow-circle-left fa-5x"></i>
                                    </div>
									<?php 
									$sql = "select * from purchasereturn";
										$rs = mysql_query($sql);
										$n = mysql_num_rows($rs);
									
									?>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $n;?></div>
                                        <div>Purchase Return</div>
                                    </div>
                                </div>
                            </div>
                            <a href="viewpurchaseretu.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
									<?php
									$sql = "select * from sales";
										$rs = mysql_query($sql);
										$n = mysql_num_rows($rs);
									
									?>
									
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $n;?></div>
                                        <div>total sales</div>
                                    </div>
                                </div>
                            </div>
                            <a href="viewsales.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-arrow-circle-left fa-5x"></i>
                                    </div>
									<?php
									$sql = "select * from sales";
										$rs = mysql_query($sql);
										$n = mysql_num_rows($rs);
									
									?>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $n;?></div>
                                        <div>Sales Return</div>
                                    </div>
                                </div>
                            </div>
                            <a href="viewsalesretu.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                 
         </div>   
        