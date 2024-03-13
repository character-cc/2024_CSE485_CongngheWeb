<?php
class InfoController
{
    public function CheckUser()
    {
        if (isset($_GET['Role'])) {
            include './Admin/main.php';

        }
    }

}
?>
