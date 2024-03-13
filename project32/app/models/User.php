<?php
class User
{
    private $Username;
    private $Password;
    private $Role;
    private $EmployeeID;

    public function __construct($Username, $Password, $Role, $EmployeeID)
    {
        $this->Username = $Username;
        $this->Password = $Password;
        $this->Role = $Role;
        $this->EmployeeID = $EmployeeID;
    }

    public function getUsername()
    {
        return $this->Username;
    }


    public function getPassword()
    {
        return $this->Password;
    }

    public function getRole()
    {
        return $this->Role;
    }

    public function getEmployeeID()
    {
        return $this->EmployeeID;
    }

    public function setUsername($Username)
    {
        $this->Username = $Username;
        return $this;
    }

    public function setPassword($Password): void
    {
        $this->Password = $Password;
    }

    public function setRole($Role): void
    {
        $this->Role = $Role;
    }

    public function setEmployeeID($EmployeeID): void
    {
        $this->EmployeeID = $EmployeeID;
    }

    public static function getData($conn)
    {
        $usersArray = array();
        $sql = 'SELECT * FROM users ';
        $Result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($Result) > 0) {
            while ($row = mysqli_fetch_assoc($Result)) {
                $user = new User($row['Username'], $row['Password'], $row['Role'], $row['EmployeeID']);
                $usersArray[] = $user;
            }
            return $usersArray;
        } else {
            return null;
        }
    }
}
?>