<?php
define('DIR','../');
require_once DIR .'config.php';
$contol = new Controller();

$admin = new Admin();

if (isset($_POST['login'])) 
{
  
   
  $name = $_POST['name'];  
  $password = $_POST['password']; 

  
  $stmt=$admin->ret("SELECT cemail, cpassword FROM `chairman`where cemail='$name'and cpassword='$password'");
  $row=$stmt->fetch(PDO::FETCH_ASSOC);  
  
  $num=$stmt->rowCount();
  if($num>0){
   
   
    $admin->redirect('../blank');


  }
  else
  	{
  	echo "please check your username and password";
  	}
}

?>