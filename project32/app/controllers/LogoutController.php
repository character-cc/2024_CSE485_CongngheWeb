<?php

class LogoutController
{
   public function logout()
   {
       if(isset($_SESSION['user_id'])){
           unset($_SESSION['user_id']);
           unset($_SESSION['user_role']);
           header("Location: ./index.php");
           echo 'DDDĐ';
       }
   }
}
?>