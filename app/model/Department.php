<?php
class Department
{
    private $DepartmentID ;
    private $DepartmentName ;
    private $Address;
    private $Email;
    private $Phone;
    private $Logo;
    private $Website;
    private $ParentDepartmentID;


    public function __construct($DepartmentID, $DepartmentName, $Address, $Email, $Phone, $Logo, $Website, $ParentDepartmentID)
    {
        $this->DepartmentID = $DepartmentID;
        $this->DepartmentName = $DepartmentName;
        $this->Address = $Address;
        $this->Email = $Email;
        $this->Phone = $Phone;
        $this->Logo = $Logo;
        $this->Website = $Website;
        $this->ParentDepartmentID = $ParentDepartmentID;
    }

    public function getDepartmentID()
    {
        return $this->DepartmentID;
    }


    public function setDepartmentID($DepartmentID): void
    {
        $this->DepartmentID = $DepartmentID;
    }


    public function getDepartmentName()
    {
        return $this->DepartmentName;
    }

    public function setDepartmentName($DepartmentName): void
    {
        $this->DepartmentName = $DepartmentName;
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


    public function getPhone()
    {
        return $this->Phone;
    }


    public function setPhone($Phone): void
    {
        $this->Phone = $Phone;
    }


    public function getLogo()
    {
        return $this->Logo;
    }


    public function setLogo($Logo): void
    {
        $this->Logo = $Logo;
    }


    public function getWebsite()
    {
        return $this->Website;
    }


    public function setWebsite($Website): void
    {
        $this->Website = $Website;
    }


    public function getParentDepartmentID()
    {
        return $this->ParentDepartmentID;
    }


    public function setParentDepartmentID($ParentDepartmentID): void
    {
        $this->ParentDepartmentID = $ParentDepartmentID;
    }

    public static function getDataDepartments($conn)
    {
        $DepartmentsList = [];
        $sql = 'SELECT * FROM Departments';
        $Result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($Result) > 0) {
            while ($row = mysqli_fetch_assoc($Result)) {
                $user = new Department($row['DepartmentID'], $row['DepartmentName'], $row['Address'], $row['Email'],$row['Phone'],$row['Logo'],$row['Website'],$row['ParentDepartmentID']);
                $DepartmentsList[] = $user;
            }
            return $DepartmentsList;
        } else {
            return null;
        }
    }
}

