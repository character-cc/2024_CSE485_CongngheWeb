<?php
include __DIR__ . '/../config/DB.php';
global $conn;
$EmployeeID = $_SESSION['EmployID'];
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
<form style="display: flex;flex-direction: column" method="post" action="./index.php?controller=Info&action=ChangeProcess&ID=<?= isset($Employee['EmployeeID']) ? $Employee['EmployeeID'] : '' ?>">
    <table>
        <h3>Chỉnh Sửa Thông Tin</h3>
        EmployeeID : <input name="EmployeeID" type="text" value="<?= isset($Employee['EmployeeID']) ? $Employee['EmployeeID'] : '' ?>">
        Username : <input name="Username" type="text" value="<?= isset($User['Username']) ? $User['Username'] : '' ?>">
        Password : <input name="Password" type="password" value="<?= isset($User['Password']) ? $User['Password'] : '' ?>">
        Fullname : <input name="Fullname" type="text" value="<?= isset($Employee['FullName']) ? $Employee['FullName'] : '' ?>">
        Address : <input name="Address" type="text" value="<?= isset($Employee['Address']) ? $Employee['Address'] : '' ?>">
        Email : <input name="Email" type="text" value="<?= isset($Employee['Email']) ? $Employee['Email'] : '' ?>">
        SĐT : <input name="MobilePhone" type="text" value="<?= isset($Employee['MobilePhone']) ? $Employee['MobilePhone'] : '' ?>">
        Position : <input name="Position" type="text" value="<?= isset($Employee['Position']) ? $Employee['Position'] : '' ?>">
        <label for="image">Avatar:</label>
        <input type="file" name="Avatar" id="image">
    </table>
    <button type="submit">Sửa lại</button>
</form>
<button><a href="./index.php?controller=Home&action=index&Role=<?= $_SESSION['user_role']?>">Trở về</a></button>
</body>
</html>

