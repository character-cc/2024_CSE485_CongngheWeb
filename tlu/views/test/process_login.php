<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if($user == 'dungcntt4' && $pass == 'abc'){
        session_start();
        $_SESSION ['islogin'] = $user;
        $link =
        header("Location: http://localhost/views/test/index.php");
    }else{
        header("Location:http//tlu.edu.vn");
    }
}
?>
