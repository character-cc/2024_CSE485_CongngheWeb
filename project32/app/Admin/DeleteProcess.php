<?php
include 'delete.php';
include __DIR__ . '/../config/DB.php';
global $conn;
$Delete = isset($_POST["Delete"])? $_POST["Delete"] : null;
$ID = isset($_POST["ID"])? $_POST["ID"] : null;
if($Delete == 'YES'){
    $sql = "DELETE FROM users WHERE EmployeeID = '$ID' ";
    if(mysqli_query($conn,$sql)){
        echo "Đã xóa dữ liệu thành công!";

    }else{
        echo "Lỗi";
    }
}
?>