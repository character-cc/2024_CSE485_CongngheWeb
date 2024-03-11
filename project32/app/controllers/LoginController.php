<?php
include ("../models/User.php");
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$checkuser = new User($username,$password);

if($checkuser ->checkInfor()){

}
else{

}

?>
