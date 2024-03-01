<?php
session_start();
if(!$_SESSIONS['isLogin']){
      header("location :");
}

?>

<a href="logout.php">Logout</a>
