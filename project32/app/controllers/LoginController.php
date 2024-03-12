<?php
include ("./models/User.php");

class LoginController
{
    public function checkUser()
    {
        $input_username = $_POST['username'];
        $input_password = $_POST['password'];
        $checkuser = new User($input_username,$input_password);
        if($checkuser ->checkInfor()){
            header("Location: ./index.php");
            exit; // Dừng việc thực thi mã PHP tiếp theo sau khi chuyển hướng
        }
        else{
         //   echo "Lỗi";
            header("Location: ./index.php?controller=login&action=displayLogin&error=error");
           exit; // Dừng việc thực thi mã PHP tiếp theo sau khi chuyển hướng
        }
    }
    public function displayLogin($error)
    {
        if(isset($_SESSION['user_id'])){
            header("Location: ./index.php");
            exit;
        }
        elseif(!empty($error)){
            echo "Nhập sai tài khoản hoặc mật khẩu";
        }
        include ("./views/login.php");
    }
}


?>
