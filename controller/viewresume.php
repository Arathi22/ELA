<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();



	$id=$_GET['id'];
	$status="approved";
	

	 $stmt = $admin->cud("UPDATE `resume` SET `rstatus`='".$status."' WHERE resume_id=".$id,"updated");

         echo "<script>alert('data updated successfully');</script>";
          $admin->redirect('../hr/resume');
    
	


	
	

	

// $admin->redirect('../admin/emp');


?>