<?php
include('Add.php');
include '../config/DB.php';
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
    $Avatar = isset($_POST['Avatar']) ? $_POST['Avatar'] : null;
    $DepartmentID = isset($_POST['DepartmentID']) ? $_POST['DepartmentID'] : null;

    if ($EmployeeID !== null ) {
        $sql = "INSERT INTO employees (EmployeeID, FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) VALUES ('$EmployeeID','$FullName','$Address','$Email','$MobilePhone','$Position','$Avatar','$DepartmentID')";

    }
    if (mysqli_query($conn, $sql)) {
        echo "Thêm Dữ Liệu Thành Công!";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }

    if ($EmployeeID !== null ) {
        $sqluser = "INSERT INTO users(Username,Password,Role,EmployeeID) 
                    VALUES ('$Username', '$Password', '$Role', '$EmployeeID');";
    }
    if (mysqli_query($conn, $sqluser)) {
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }

}

?>
