<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(!$_SESSION['islogin']){
    $link =  'http://localhost/views/test/login.php';
    header("Location: {$link}");
}
?>
<h1>Á đù</h1>
<a href="logout.php">Logout</a>

