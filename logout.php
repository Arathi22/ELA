<?php 
define('DIR','');
require_once DIR.'config.php';
$control=new Controller();
$admin=new Admin();
session_destroy();

header('location:index.php');


?>