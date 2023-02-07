<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();

if(isset($_POST['add'])) {
      // username and password sent from form 
      
      $myusername = $_POST['email'];
      $mypassword = $_POST['pass'];

	//go to app / admin.ph
	$stmt=$admin->ret("SELECT * FROM staff WHERE semail ='".$myusername."' and password = '".$mypassword."'");
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	//$id=$row['u_id'];
	//$_SESSION['id']=$id;

	$num=$stmt->rowCount();
	if($num>0){
		$_SESSION['name']=$row['sname'];
		$_SESSION['sid']=$row['sid'];
		
		 $admin->redirect1('../user/home.php');	
	}
	$stmt1=$admin->ret("SELECT * FROM chairman WHERE cemail ='".$myusername."' and cpassword = '".$mypassword."'");
	$row1=$stmt1->fetch(PDO::FETCH_ASSOC);
		$num=$stmt1->rowCount();
		if($num>0){
		
		$_SESSION['cid']=$row1['cid'];
		
		 $admin->redirect1('../chairman/home.php');	
	}
	$stmt2=$admin->ret("SELECT * FROM hr WHERE email ='".$myusername."' and password = '".$mypassword."'");
	$row2=$stmt2->fetch(PDO::FETCH_ASSOC);
		$num=$stmt2->rowCount();
		if($num>0){
		
		$_SESSION['mid']=$row2['manager_id'];
		
		 $admin->redirect1('../hr/home.php');	
	}
}
	?>