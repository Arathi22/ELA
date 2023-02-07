<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();
if(isset($_POST['add'])) //POST - the action we have used
{
	
	$name=$_POST['u_name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['u_addr'];
	$target_dir="../images/";
	$image =$target_dir.basename($_FILES["resume"]["name"]);
	move_uploaded_file($_FILES["resume"]["tmp_name"],$image);
	

	$stmt=$admin->cud("INSERT INTO `resume`(`cname`, `caddr`, `cphone`, `cemail`, `resume`) VALUES('".$name."','".$address."','".$phone."','".$email."','".$image."')","saved");  //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
 echo "<script>alert(' resume uploaded successfully');window.location='../index.php';</script>";


}
?>


	