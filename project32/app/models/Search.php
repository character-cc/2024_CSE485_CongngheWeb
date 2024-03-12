<?php
include("./config/database.php");
class Search
{
    private $total_page;
    public function getDataBySearch()
    {
        $cnt = new connectDB();
        $conn = $cnt->getConn();
        $contact = $_POST['contact'];
        $input_search = $_POST['search'];
        $data = [];
        if($contact == "DepartmentName" || $contact == "Email"){
            $sql = "SELECT * FROM departments WHERE ";
            $sql .= " {$contact} LIKE '%$input_search%'";
            $stmt = $conn -> prepare($sql);
            $stmt -> execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

        }
        if($contact == "FullName" || $contact == "Email" || $contact == "Position"){
            $sql = "SELECT * FROM employees WHERE ";
            $sql .= " {$contact} LIKE '%$input_search%'";
            $stmt = $conn -> prepare($sql);
            $stmt -> execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        $conn -> close();
        $data = array('departments' => $departments , 'employees' => $employees);
        $this -> total_page =  count($data);
        return $data;

    }
}