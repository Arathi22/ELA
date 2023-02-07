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
	$stmt=$admin->ret("SELECT * FROM `chairman` where cpassword='$phone'");
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	//$id=$row['u_id'];
	$id=$_SESSION['cid'];

	$num=$stmt->rowCount();
	if($num>0 && $new==$cpassword){
		$stmt = $admin->cud("UPDATE `chairman` SET `cpassword`='".$new."' WHERE cid='".$id."'","updated");


		  $admin->redirect1('../chairman/home.php');	
	}
	else
	{
		 echo "<script>alert('please confirm the phone number');window.location='../chairman/home.php';</script>";
		// echo "please check username and password";
	}
}
?>