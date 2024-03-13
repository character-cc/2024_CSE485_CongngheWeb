<?php
include 'delete.php';
include '../config/DB.php';
global $conn;
$Delete = isset($_GET["Delete"])? $_GET["Delete"] : null;
$ID = isset($_GET["ID"])? $_GET["ID"] : null;
if($Delete == 'YES'){
    $sql = "DELETE FROM Users WHERE EmployeeID = '$ID' ";
    if(mysqli_query($conn,$sql)){
        echo "Đã xóa dữ liệu thành công!";

    }else{
        echo "Lỗi";
    }
}
?>