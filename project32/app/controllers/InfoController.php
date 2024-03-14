<?php
class InfoController
{
    public function CheckUser()
    {
        if ($_GET['Role'] == 'admin') {
            include './views/layouts/main.php';

        } else{
            include './User/UserChange.php';
        }
    }
    public function Infomation()
    {
        if (isset($_GET['ID'])) {
            include './Admin/info.php';

        }
    }
    public function main()
    {
        if (isset($_GET['Role'])) {
            include './views/layouts/main.php';

        }
    }
    public function Change()
    {
        if (isset($_GET['ID'])) {
            include './Admin/change.php';

        }
    }
    public function Delete()
    {
        if (isset($_GET['ID'])) {
            include './Admin/delete.php';

        }
    }
    public function Add()
    {
        if (isset($_GET['Role'])) {
            include './Admin/add.php';

        }
    }
    public function ChangeProcess()
    {
        if (isset($_GET['ID'])) {
            include './Admin/ChangeProcess.php';

        }
    }
    public function AddProcess()
    {
            include './Admin/AddProcess.php';

    }
    public function DeleteProcess()
    {
        include './Admin/DeleteProcess.php';

    }
}

?>
