<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['add'])) //POST - the action we have used
{
	$title=$_POST['title'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$company=$_POST['company'];
	

	


	
	

	$stmt=$admin->cud("INSERT INTO `user`(`title`, `fname`, `lname`, `dob`, `gender`, `company`, `address`, `email`, `password`, `phone`) VALUES ('".$title."','".$fname."','".$lname."','".$dob."','".$gender."','".$company."','".$address."','".$email."','".$password."','".$phone."')","saved");  //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
 echo "<script>alert('inserted successfully');</script>";


  $admin->redirect('../admin/home');
}

?>