<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['add'])) //POST - the action we have used
{
	$id=$_POST['sid'];
	$sname=$_POST['sname'];
	$saddr=$_POST['saddr'];
	$sphone=$_POST['sphone'];
	$semail=$_POST['semail'];
	$designation=$_POST['designation'];
	$password=$_POST['password'];
	

	 $stmt = $admin->cud("UPDATE `staff` SET `sname`='".$sname."',`saddr`='".$saddr."',`sphone`='".$sphone."',`semail`='".$semail."',`designation`='".$designation."',`password`='".$password."' WHERE sid=".$id,"updated");

         echo "<script>alert('data updated successfully');</script>";
          $admin->redirect('../hr/employee');
    
	


	
	

	

// $admin->redirect('../admin/emp');
}

?>