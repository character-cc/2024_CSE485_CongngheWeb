<?php
$server = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'contacttlu';
global $conn;
$conn = new mysqli($server,$user,$password,$database);
?>