<?php
define('APP_ROOT', dirname(__FILE__, 3));
$server = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'contacttlu';
global $conn;
$conn = new mysqli($server,$user,$password,$database);
?>
