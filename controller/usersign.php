<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();

if(isset($_POST['add'])) //POST - the action we have used
{
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	//go to app / admin.ph
	$stmt=$admin->ret("SELECT * FROM `user` where email='$email'and password='$password'");
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	//$id=$row['u_id'];
	//$_SESSION['id']=$id;

	$num=$stmt->rowCount();
	if($num>0){
		$_SESSION['name']=$row['name'];
		$_SESSION['uid']=$row['uid'];
		$id=$_SESSION['id'];

		 $admin->redirect1('../index/home.php');	
	}
	else
	{
		 echo "<script>alert('please check username and password');window.location='../index/register/login.php';</script>";
		// echo "please check username and password";
	}
}