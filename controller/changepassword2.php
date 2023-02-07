<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();

if(isset($_POST['add'])) //POST - the action we have used
{
	
	$phone=$_POST['opassword'];
	$new=$_POST['npassword'];
	$cpassword=$_POST['cpassword'];
	//go to app / admin.ph
	$stmt=$admin->ret("SELECT * FROM `hr` where password='".$phone."'");
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	//$id=$row['u_id'];
	$id=$_SESSION['mid'];

	$num=$stmt->rowCount();
	if($num>0 && $new==$cpassword){
		$stmt = $admin->cud("UPDATE `hr` SET `password`='".$new."' WHERE manager_id='".$id."'","updated");


		  $admin->redirect1('../hr/home.php');	
	}
	else
	{
		 echo "<script>alert('please confirm the phone number');window.location='../hr/home.php';</script>";
		// echo "please check username and password";
	}
}
?>