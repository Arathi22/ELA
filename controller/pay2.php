<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['add'])) //POST - the action we have used
{
	$id=$_POST['id'];
	$oid=$_POST['oid'];
	$hrs=$_POST['hrs'];
	$res=$hrs;
	$amount=$_POST['amount'];
	$m=date('m');
	$y=date('Y');
	$date1=date('Y-m-d');
	$status="paid";
	 $stmt1 = $admin->ret("SELECT * FROM `pay` where staff_id='".$id."' and month='".$m."' and year='".$y."'");
    $row = $stmt1->fetch(PDO::FETCH_ASSOC);
    $num=$stmt1->rowCount();
    if($num==0){
	

		$stmt1 = $admin->cud("UPDATE `overtime` SET `ostatus`='".$status."' WHERE o_id=".$oid,"updated");
		$stmt=$admin->cud("INSERT INTO `pay`(`staff_id`, `date`, `amount`,   `month`, `year`,`status`,`o_id`) VALUES ('".$id."','".$date1."','".$amount."','".$m."','".$y."','".$status."','".$oid."')","saved");

		
		echo "<script>alert('inserted successfully');window.location='../hr/pay.php';</script>";
		}
		else{
			echo "<script>alert('this month salary is already given successfully');window.location='../hr/pay.php';</script>";
		}
	//go to app / admin.php
	
}



?>

