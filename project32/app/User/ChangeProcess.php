<?php
include('UserChange.php');
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
    $Avatar = isset($_POST['Avatar']) ? $_POST['Avatar'] : null;
    $DepartmentID = isset($_POST['DepartmentID']) ? $_POST['DepartmentID'] : null;
    $target_dir = '../public/assets/images';
    if (isset($_FILES["image"])) {
        $target_file = $target_dir . basename($_FILES["image"]["name"]);

        if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "Tệp ảnh " . basename($_FILES["image"]["name"]) . " đã được tải lên thành công.";
            } else {
                echo "Đã xảy ra lỗi khi tải lên tệp ảnh.";
            }
        } else {
            echo "Đã xảy ra lỗi khi tải lên tệp ảnh: " . $_FILES["image"]["error"];
        }
    }

    if ($EmployeeID !== null ) {
        $sql = "UPDATE Employees 
                SET FullName = '$FullName', Address = '$Address', 
                    Email = '$Email', MobilePhone = '$MobilePhone', 
                    Position = '$Position', Avatar = '$Avatar', 
                    DepartmentID = '$DepartmentID' 
                WHERE EmployeeID = '$EmployeeID'";
    }
    if (mysqli_query($conn, $sql)) {
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }

    if ($EmployeeID !== null ) {
        $sqluser = "UPDATE users
                SET Username = '$Username', Password = '$Password', 
                    Role = '$Role'
                WHERE EmployeeID = '$EmployeeID'";
    }
    if (mysqli_query($conn, $sqluser)) {
        echo "Cập nhật thông tin thành công.";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}
?>
