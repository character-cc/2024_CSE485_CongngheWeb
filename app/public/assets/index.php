<?php
include '../../../app/config/database.php';
include APP_ROOT.'/app/model/Department.php';
include APP_ROOT.'/app/model/Employee.php';
include APP_ROOT.'/app/model/User.php';
global $conn;
$usersArray = User::getData($conn);
$EmployeesList = Employee::getDataEmployees($conn);
$DepartmentsList = Department::getDataDepartments($conn);
if (!empty($usersArray)) {
    foreach ($usersArray as $user) {
        echo "Username: " . $user->getUsername() . "<br>";
        echo "Password: " . $user->getPassword() . "<br>";
        echo "Role: " . $user->getRole() . "<br>";
        echo "EmployeeID: " . $user->getEmployeeID() . "<br>";
        echo "<hr>"; // Đường kẻ ngang để phân biệt giữa các đối tượng
    }
} else {
    echo "Không có dữ liệu";
}
if (!empty($EmployeesList)) {
    foreach ($EmployeesList as $user) {
        echo "EmployeeID: " . $user->getEmployeeID() . "<br>";
        echo "FullName: " . $user->getFullName(). "<br>";
        echo "Address: " . $user-> getAddress() . "<br>";
        echo "Email: " . $user->getEmail() . "<br>";
        echo "MobilePhone: " . $user->getMobilePhone() . "<br>";
        echo "Position: " . $user->getPosition() . "<br>";
        echo "Avatar: " . $user->getAvatar() . "<br>";
        echo "DepartmentID: " . $user->getDepartmentID() . "<br>";
        echo "<hr>"; // Đường kẻ ngang để phân biệt giữa các đối tượng
    }
} else {
    echo "Không có dữ liệu";
}
if (!empty($DepartmentsList)) {
    foreach ($DepartmentsList as $user) {
        echo "DepartmentID: " . $user->getDepartmentID() . "<br>";
        echo "DepartmentName: " . $user->getDepartmentName(). "<br>";
        echo "Address: " . $user-> getAddress() . "<br>";
        echo "Email: " . $user->getEmail() . "<br>";
        echo "Phone: " . $user->getPhone() . "<br>";
        echo "Logo: " . $user->getLogo() . "<br>";
        echo "Website: " . $user->getWebsite() . "<br>";
        echo "ParentDepartmentID: " . $user->getParentDepartmentID() . "<br>";
        echo "<hr>"; // Đường kẻ ngang để phân biệt giữa các đối tượng
    }
} else {
    echo "Không có dữ liệu";
}
?>
