<?php
define('APP','http://localhost');
session_start();
if($_SESSION['islogin']){
    unset($_SESSION['islogin']);
    $link = APP.'/index.php';
    header("Location: {$link}");
}