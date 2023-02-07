<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['add'])) //POST - the action we have used
{
	$l_date=$_POST['l_date'];
	$reason=$_POST['reason'];
	$staff_id=$_SESSION['sid'];
	
	$stmt=$admin->cud("INSERT INTO `leave`(`staff_id`, `l_date`, `reason`) VALUES('".$staff_id."','".$l_date."','".$reason."')","saved");  //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
 echo "<script>alert('inserted successfully');</script>";


 $admin->redirect('../user/leaves');
}

?>