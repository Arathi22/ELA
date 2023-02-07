<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();
if(!isset($_SESSION['cid']))
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
    	<h2>HR Information</h2>
    	<div class="blankpage-main">
    		
              <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            
                      <button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
                         ADD<span class="badge"></span>
                      </button>
                                            <!-- <a href="relist.php"><button class='btn btn-info btn'>
                                                 Recruited List<span class="badge"></span>
                                            </button>
                      </a> -->
                                        </h4>
                                    </div>
                                    <!-- <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                           <div class="panel panel-default"> -->
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Action</th>
                      
                      
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                   
                  
                        
                    
                <?php
     $stmt = $admin->ret("SELECT * FROM `hr`");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
    <tr>
    <td><?php echo $row['mname'];?></td>
    <td><?php echo $row['addr'];?></td>
    <td><?php echo $row['phoneno'];?></td>
    <td><?php echo $row['email'];?></td>
    
    <td><a href="../controller/hrdelete.php?id=<?php echo $row['manager_id'];?>">delete</a></td>
     <!-- <td><a href="../controller/empdelete.php?id=<?php echo $row['sid'];?>">delete</a></td>
     -->
    

                                    
                                                
                                        
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
                                            <h4 class='modal-title' id='myModalLabel'>HR INFO</h4>
                                        </div>
                    <form method='post' action="../controller/hr.php">
                                        <div class='modal-body'>
                                            <div class='form-group'>
                                            <label>Name</label>
                                            <input name='mname'  class='form-control' pattern="[A-Za-z]+" title="letters only"placeholder='Enter User name' required="" >
                      </div>
                    </div>
                                        
                                        <div class='modal-body'>
                                            <div class='form-group'>
                                            <label>Password</label>
                                            <input name='password'  class='form-control' pattern=".{6,}" title="Six or more characters" placeholder="New Password" name="npass" required="">
                                            </div>
                                        </div>
                                        <div class='modal-body'>
                                            <div class='form-group'>
                                            <label>Address</label>
                                            <input name='addr'  class='form-control' pattern="[A-Za-z0-9\s]+" title="letters only" placeholder='Enter address' required="">
                                            </div>
                                        </div><div class='modal-body'>
                                            <div class='form-group'>
                                            <label>Contact</label>
                                            <input name='phoneno'  class='form-control' pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9"placeholder='Enter contact number' required="">
                                            </div>
                                        <div class='modal-body'>
                                            <div class='form-group'>
                                            <label>Email</label>
                                            <input name='email' type="email" class='form-control' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" placeholder='Enter email' required="">
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
            
            
            
    	</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2020 ELA Airlines. All Rights Reserved | Design by Arathi,Ashwathi. <!-- <a href="http://w3layouts.com/" target="_blank">W3layouts</a> --> </p>
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


                      
						
