<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();
if(!isset($_SESSION['sid']))
{
  header('location:../index.php');
}
?> 

<!DOCTYPE HTML>
<html>
<head>
<title>ELA AIRLINE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<?php include 'header.php';?>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="blank">
    	<h2>Leave Info</h2>
    	<div class="blankpage-main">
    		
             <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            
                      
                      <a href="leaves.php"><button class='btn btn-primary btn'>
                                                 <span class="badge">APPLY</span>
                                            </button></a>
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
                                          
                                            <th>Date</th>
                                            <th>Reason</th>
                                            <th>Status</th>
                      
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                   
                  
                        
                    
                <?php
                                $id=$_SESSION['sid'];
     $stmt = $admin->ret("SELECT * FROM `leave` inner join `staff` on `staff`.sid=`leave`.staff_id where staff_id='".$id."'");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
    <tr>
    <td><?php echo $row['l_date'];?></td>
     <td><?php echo $row['reason'];?></td>
    <td><?php echo $row['lstatus'];?></td>
    
    
    

                                    
                                                
                                        
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
                                            <label>Name</label>
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
                                            <label>Address</label>
                                            <input name='saddr'  class='form-control' placeholder='Enter address'>
                                            </div>
                                        </div><div class='modal-body'>
                                            <div class='form-group'>
                                            <label>Contact</label>
                                            <input name='sphone'  class='form-control' placeholder='Enter contact number'>
                                            </div>
                                        <div class='modal-body'>
                                            <div class='form-group'>
                                            <label>Designation</label>
                                            <input name='designation' type="text" class='form-control' placeholder='Enter designation'>
                                            </div>
                                        </div><div class='modal-body'>
                                            <div class='form-group'>
                                            <label>Email</label>
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
                      </div>
                    </div>
                  </div>
                </div>
            
            
            
    	</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2020 ELA Airlines. All Rights Reserved | Design by Arathi,Ashwathi.<!-- <a href="http://w3layouts.com/" target="_blank">W3layouts</a> --> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <?php include 'sidebar.php';?>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
