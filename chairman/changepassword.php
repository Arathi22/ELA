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
    	<h2>Change Password</h2>
    	<div class="blankpage-main">
    		
                    <div class="panel panel-primary">
                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                           <div class="panel panel-default">
                        
                        <div class="panel-body">
                                      
                                            <form method='post' action="../controller/changepassword.php">
                   
                                                
   
                                            <div class='form-group'>
                                            <label>Old password</label>
                                            <input name='opassword'  class='form-control' placeholder="Old Password" required="">
                                            </div>
                                        
                                        
                                        <div class='modal-body'>
                                            <div class='form-group'>
                                            <label>New Password</label>
                                            <input name='npassword'  class='form-control'pattern=".{6,}" title="Six or more characters" placeholder="New Password"  required="" >
                                            </div>
                                        </div>
                                        <div class='modal-body'>
                                            <div class='form-group'>
                                            <label>Confirm password</label>
                                            <input name='cpassword'  class='form-control'pattern=".{6,}" title="Six or more characters" placeholder="New Password"  required="" >
                                            </div>
                                        

                                        <!--  -->
                                        <div class='modal-footer'>
                                            <button type='reset' value="Reset" >Clear</button>
                                            
                                           <input type='submit' name='add' value='Update' class='btn btn-primary'>
                                        
                                    </form>
                                           
                      
            
            
                <!-- DEOMO-->
                </div></div></div></div></div></div></div>
                 
            
            
    	</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2020 ELA Airlines. All Rights Reserved | Design by Arathi,Ashwathi.  <!-- <a href="http://w3layouts.com/" target="_blank">W3layouts</a> --> </p>
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


                      
						
