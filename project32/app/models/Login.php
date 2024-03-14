<?php
include("./config/database.php");

class Login
{
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function checkInfor()
    {
        $cnt = new connectDB();
        $conn = $cnt->getConn();

        // Chuẩn bị và thực thi truy vấn
        // Lấy username và password từ form
        $input_username = $_POST['username'];
        $input_password = $_POST['password'];

// Tránh SQL injection
        $input_username = mysqli_real_escape_string($conn, $input_username);
        $input_password = mysqli_real_escape_string($conn, $input_password);

// Truy vấn dữ liệu
        $sql = "SELECT * FROM users WHERE username = '$input_username' AND password = '$input_password'";
        $result = $conn->query($sql);

// Kiểm tra kết quả trả về
        if ($result->num_rows > 0) {
            $row = $result ->fetch_assoc();
            $_SESSION['user_role'] = $row['Role'];
            $_SESSION['user_id'] = $row['EmployeeID'];
            $_SESSION['EmployID'] = $row['EmployeeID'];
            // Đăng nhập thành công
            $conn -> close();
            return true;

        } else {
            $conn -> close();
            return false;
        }

    }
}
?>
