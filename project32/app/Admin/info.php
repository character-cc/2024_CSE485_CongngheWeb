
<?php
include __DIR__ . '/../config/DB.php';
include __DIR__ . '/../models/User.php';
include __DIR__ . '/../models/Employee.php';
global $conn;
$usersArray = User::getData($conn);
$EmployeesList = Employee::getDataEmployees($conn);
if (isset($_GET['ID'])) {
    foreach ($usersArray as $user) {
        if ($user->getEmployeeID() == $_GET['ID']) {
            echo "Username: " . $user->getUsername() . "<br>";
            echo "Password: " . $user->getPassword() . "<br>";
            echo "Role: " . $user->getRole() . "<br>";
            echo "EmployeeID: " . $user->getEmployeeID() . "<br>";
        }
    }
    foreach ($EmployeesList as $user) {
        if ($user->getEmployeeID() == $_GET['ID']) {
            echo "FullName: " . $user->getFullName() . "<br>";
            echo "Address: " . $user->getAddress() . "<br>";
            echo "Email: " . $user->getEmail() . "<br>";
            echo "MobilePhone: " . $user->getMobilePhone() . "<br>";
            echo "Position: " . $user->getPosition() . "<br>";
            echo "Avatar: " . $user->getAvatar() . "<br>";
            echo "DepartmentID: " . $user->getDepartmentID() . "<br>";
            echo "<hr>"; // Đường kẻ ngang để phân biệt giữa các đối tượng
        }
    }
}
?>
<a href="/Admin/main.php">trở về</a>