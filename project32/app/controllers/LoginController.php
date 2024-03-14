<?php
include ("./models/Login.php");

class LoginController
{
    public function checkUser()
    {
        $input_username = $_POST['username'];
        $input_password = $_POST['password'];
        $checkuser = new Login($input_username,$input_password);
        if($checkuser ->checkInfor()){
            header("Location: ./index.php");
            exit;
        }
        else{
            header("Location: ./index.php?controller=login&action=displayLogin&variable1=error");
           exit;
        }
    }
    public function displayLogin($error)
    {
//        if(isset($_SESSION['user_id'])){
//            header("Location: ./index.php");
//            exit;
//        }
        include ("./views/login.php");
    }
}
?>
