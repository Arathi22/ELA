<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['add'])) //POST - the action we have used
{
	$odate=$_POST['odate'];
	$hrs=$_POST['hrs'];
	$staff_id=$_SESSION['sid'];
	date_default_timezone_get('Asia/Calcutta');
	$time=date('h:i');
	
	$stmt=$admin->cud("INSERT INTO `overtime`(`odate`, `otime`, `hrs`, `staff_id1`) VALUES('".$odate."','".$time."','".$hrs."','".$staff_id."')","saved");  //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
 echo "<script>alert('inserted successfully');</script>";


 $admin->redirect('../user/overtime');
}

?>