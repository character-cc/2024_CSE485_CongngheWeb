<?php
class Employee
{
private $EmployeeID;
private $FullName ;
private $Address;
private $Email ;
private $MobilePhone ;
private $Position ;
private $Avatar ;
private $DepartmentID ;


    public function __construct($EmployeeID, $FullName, $Address, $Email, $MobilePhone, $Position, $Avatar, $DepartmentID)
    {
        $this->EmployeeID = $EmployeeID;
        $this->FullName = $FullName;
        $this->Address = $Address;
        $this->Email = $Email;
        $this->MobilePhone = $MobilePhone;
        $this->Position = $Position;
        $this->Avatar = $Avatar;
        $this->DepartmentID = $DepartmentID;
    }

    public function getEmployeeID()
    {
        return $this->EmployeeID;
    }


    public function setEmployeeID($EmployeeID): void
    {
        $this->EmployeeID = $EmployeeID;
    }


    public function getFullName()
    {
        return $this->FullName;
    }


    public function setFullName($FullName): void
    {
        $this->FullName = $FullName;
    }


    public function getAddress()
    {
        return $this->Address;
    }


    public function setAddress($Address): void
    {
        $this->Address = $Address;
    }


    public function getEmail()
    {
        return $this->Email;
    }


    public function setEmail($Email): void
    {
        $this->Email = $Email;
    }


    public function getMobilePhone()
    {
        return $this->MobilePhone;
    }


    public function setMobilePhone($MobilePhone): void
    {
        $this->MobilePhone = $MobilePhone;
    }


    public function getPosition()
    {
        return $this->Position;
    }


    public function setPosition($Position): void
    {
        $this->Position = $Position;
    }


    public function getAvatar()
    {
        return $this->Avatar;
    }


    public function setAvatar($Avatar): void
    {
        $this->Avatar = $Avatar;
    }


    public function getDepartmentID()
    {
        return $this->DepartmentID;
    }


    public function setDepartmentID($DepartmentID): void
    {
        $this->DepartmentID = $DepartmentID;
    }

    public static function getDataEmployees($conn)
    {
        $EmployeesList = [];
        $sql = 'SELECT * FROM Employees';
        $Result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($Result) > 0) {
            while ($row = mysqli_fetch_assoc($Result)) {
                $user = new Employee($row['EmployeeID'], $row['FullName'], $row['Address'], $row['Email'],$row['MobilePhone'],$row['Position'],$row['Avatar'],$row['DepartmentID']);
                $EmployeesList[] = $user;
            }
            return $EmployeesList;
        } else {
            return null;
        }
    }
}