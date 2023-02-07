<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> </a>
            </div>

           <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                         <li><a href="changepassword.php"><i class="fa fa-user fa-fw"></i>changepassword</a>
                        </li>
                       
                        <li class="divider"></li>
                        <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
       <?php include "sidebar.php";?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Status <small>Salary Information </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
				

					<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
							
							<div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            
											
											</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                           <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          
                                            <th>date</th>
                                            <th>amount</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									 
									
												
										
								<?php
                                $id=$_SESSION['sid'];
     $stmt = $admin->ret("SELECT * FROM `pay` where staff_id='".$id."'");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
    <tr>
    <td><?php echo $row['date'];?></td>
    <td><?php echo $row['amount'];?></td>
    
    
    

                                    
                                                
                                        
                                    </tr>
                                    <?php }
                                    ?>
									
                                        
                                    </tbody>
                                </table>
								
                            </div>
                        </div>
                    </div>
                      
            
			
				<!-- DEOMO-->
				<div class='panel-body'>
                           
                            <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                            <h4 class='modal-title' id='myModalLabel'>EMPLOYEE INFO</h4>
                                        </div>
										<form method='post' action="../controller/emp.php">
                                        <div class='modal-body'>
                                            <div class='form-group'>
                                            <label>name</label>
                                            <input name='sname'  class='form-control' placeholder='Enter User name'>
											</div>
										</div>
                                        
                                        <div class='modal-body'>
                                            <div class='form-group'>
                                            <label>Password</label>
                                            <input name='spassword'  class='form-control' placeholder='Enter password'>
                                            </div>
                                        </div>
                                        <div class='modal-body'>
                                            <div class='form-group'>
                                            <label>address</label>
                                            <input name='saddr'  class='form-control' placeholder='Enter address'>
                                            </div>
                                        </div><div class='modal-body'>
                                            <div class='form-group'>
                                            <label>contact</label>
                                            <input name='sphone'  class='form-control' placeholder='Enter contact number'>
                                            </div>
                                        <div class='modal-body'>
                                            <div class='form-group'>
                                            <label>designation</label>
                                            <input name='designation' type="text" class='form-control' placeholder='Enter designation'>
                                            </div>
                                        </div><div class='modal-body'>
                                            <div class='form-group'>
                                            <label>email</label>
                                            <input name='semail' type="email" class='form-control' placeholder='Enter email'>
                                            </div>
                                        </div>
                                      

										<!--  -->
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
											
                                           <input type='submit' name='add' value='Update' class='btn btn-primary'>
										  </form>
										   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
				
				<!--DEMO END-->
				
										
                    

                <!-- /. ROW  -->
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>