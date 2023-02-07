<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['add'])) //POST - the action we have used
{
	
	$name=$_POST['mname'];
	$password=$_POST['password'];
	$phone=$_POST['phoneno'];
	$email=$_POST['email'];
	$address=$_POST['addr'];

	$count=0;
$stmt=$admin->ret("SELECT * FROM `hr`");
	while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		$count++;
	}
	
if($count>=5)
{
	echo "<script>alert('you cant register because only 5 hr are allowded');window.location='../chairman/addhr.php';</script>";
}
else{
	
	

	$stmt=$admin->cud("INSERT INTO `hr`(`email`, `addr`, `phoneno`, `password`, `mname`) VALUES('".$email."','".$address."','".$phone."','".$password."','".$name."')","saved");  //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
 echo "<script>alert('inserted successfully');</script>";


  $admin->redirect('../chairman/addhr');
}
}

?>