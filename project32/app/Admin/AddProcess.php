<?php
include('Add.php');
include __DIR__ . '/../config/DB.php';
global $conn;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $EmployeeID = isset($_POST['EmployeeID']) ? $_POST['EmployeeID'] : null;
    $Username = isset($_POST['Username']) ? $_POST['Username'] : null;
    $Password = isset($_POST['Password']) ? $_POST['Password'] : null;
    $Role = isset($_POST['Role']) ? $_POST['Role'] : null;
    $FullName = isset($_POST['Fullname']) ? $_POST['Fullname'] : null;
    $Address = isset($_POST['Address']) ? $_POST['Address'] : null;
    $Email = isset($_POST['Email']) ? $_POST['Email'] : null;
    $MobilePhone = isset($_POST['MobilePhone']) ? $_POST['MobilePhone'] : null;
    $Position = isset($_POST['Position']) ? $_POST['Position'] : null;
    $DepartmentID = isset($_POST['DepartmentID']) ? $_POST['DepartmentID'] : null;
    try {
        if ($EmployeeID !== null ) {
            $sql = "INSERT INTO employees (EmployeeID, FullName, Address, Email, MobilePhone, Position, DepartmentID) VALUES ('$EmployeeID','$FullName','$Address','$Email','$MobilePhone','$Position','$DepartmentID')";
            if (!mysqli_query($conn, $sql)) {
                throw new Exception(mysqli_error($conn));
            }
        }

        if ($EmployeeID !== null ) {
            $sqluser = "INSERT INTO users(Username,Password,Role,EmployeeID) VALUES ('$Username', '$Password', '$Role', '$EmployeeID')";
            if (!mysqli_query($conn, $sqluser)) {
                throw new Exception(mysqli_error($conn));
            }
        }

        echo "Thêm Dữ Liệu Thành Công!";
    } catch (Exception $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}

?>

