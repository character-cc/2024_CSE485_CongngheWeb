<?php
require_once '../config/DB.php';
global $conn;
$EmployeeID = isset($_GET['ID']) ? $_GET['ID'] : null;
if ($EmployeeID) {
    $sql = "SELECT * FROM Employees WHERE EmployeeID = $EmployeeID";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $Employee = [
            'EmployeeID' => $row['EmployeeID'],
            'FullName' => $row['FullName'],
            'Address' => $row['Address'],
            'Email' => $row['Email'],
            'MobilePhone' => $row['MobilePhone'],
            'Position' => $row['Position'],
            'Avatar' => $row['Avatar'],
            'DepartmentID' => $row['DepartmentID']
        ];
    }

    $sqluser = "SELECT * FROM users WHERE EmployeeID = $EmployeeID";
    $result = mysqli_query($conn, $sqluser);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $User = [
            'Username' => $row['Username'],
            'Password' => $row['Password'],
            'Role' => $row['Role'],
            'EmployeeID' => $row['EmployeeID']
        ];
    }
}
?>

<html>
<header>

</header>
<body>
<form style="display: flex;flex-direction: column" method="post" action="ChangeProcess.php">
    <table>
        EmployeeID : <input name="EmployeeID" type="text" value="<?= isset($Employee['EmployeeID']) ? $Employee['EmployeeID'] : '' ?>">
        Username : <input name="Username" type="text" value="<?= isset($User['Username']) ? $User['Username'] : '' ?>">
        Password : <input name="Password" type="password" value="<?= isset($User['Password']) ? $User['Password'] : '' ?>">
        Role : <input name="Role" type="text" value="<?= isset($User['Role']) ? $User['Role'] : '' ?>">
        Fullname : <input name="Fullname" type="text" value="<?= isset($Employee['FullName']) ? $Employee['FullName'] : '' ?>">
        Address : <input name="Address" type="text" value="<?= isset($Employee['Address']) ? $Employee['Address'] : '' ?>">
        Email : <input name="Email" type="text" value="<?= isset($Employee['Email']) ? $Employee['Email'] : '' ?>">
        SĐT : <input name="MobilePhone" type="text" value="<?= isset($Employee['MobilePhone']) ? $Employee['MobilePhone'] : '' ?>">
        Position : <input name="Position" type="text" value="<?= isset($Employee['Position']) ? $Employee['Position'] : '' ?>">
        Avatar : <input name="Avatar" type="text" value="<?= isset($Employee['Avatar']) ? $Employee['Avatar'] : '' ?>">
        DepartmentID : <input name="DepartmentID" type="text" value="<?= isset($Employee['DepartmentID']) ? $Employee['DepartmentID'] : '' ?>">
    </table>
    <button type="submit">Sửa lại</button>
</form><button><a href="/Admin/main.php">Trở về</a></button>
</body>
</html>

