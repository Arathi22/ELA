<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['add'])) //POST - the action we have used
{
	$oid=$_POST['oid'];
	$id=$_POST['id'];
	$amount=$_POST['amount'];

	if($_POST['oamount']==true)
	{
		$total=$amount+$_POST['oamount'];
		$omt=$_POST['oamount'];

	}
	else
	{
		$total=$amount;
	}
	$m=date('m');
	$y=date('Y');
	$date1=date('Y-m-d');
	$status="paid";
	 $stmt1 = $admin->ret("SELECT * FROM `pay` where staff_id='".$id."' and month='".$m."' and year='".$y."'");
    $row = $stmt1->fetch(PDO::FETCH_ASSOC);
    $num=$stmt1->rowCount();
    if($num==0){
	echo $amount;
		$stmt=$admin->cud("INSERT INTO `pay`(`staff_id`, `date`, `amount`,   `month`, `year`,`status`,`o_id`,`oamount`) VALUES ('".$id."','".$date1."','".$total."','".$m."','".$y."','".$status."','".$oid."','".$omt."')","saved"); 
		$stmt1 = $admin->cud("UPDATE `overtime` SET `ostatus`='".$status."' WHERE staff_id1='".$id."'","updated");
		  echo "<script>alert('inserted successfully');window.location='../hr/pay.php';</script>";
		}
		else{
			echo "<script>alert('this month salary is already given successfully');window.location='../hr/pay.php';</script>";
		}
	//go to app / admin.php
	
}



?>

