<?php
require_once ('config/config.php');
require_once ("./views/link_html.php");
//localhost/newmvc/index.php?controller=A&action=B

$controller = isset($_GET['controller'])? $_GET['controller'] : 'home';
session_start();
$_SESSION['controller'] = $controller;
if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'index';
}

if($controller=='news'){
   $category = isset($_GET['category'])? $_GET['category']:'1';
   $_SESSION['category'] = $category;
}

if(isset($_GET['variable1'])){
    $variable1 = $_GET['variable1'];
}
else{
    $variable1 = "";
}
//Phan tich URI > Controller: A = Cateogory, Home, Post, Login
$controller = ucfirst($controller);
$controller = $controller.'Controller';
$path = 'controllers/'.$controller.'.php';


if(!file_exists($path)){
    die('Tep tin khong ton tai');
    exit(1);
}
include($path);
$myController = new $controller();
if(!method_exists($controller, $action)){
    die('Phuong thuc ko ton tai');
    exit(1);
}
$myController->$action($variable1);
?>
