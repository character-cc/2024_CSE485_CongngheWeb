<?php
include("./config/database.php");
class Search
{
    private $total_page;
    public function getDataBySearch($contact , $input_search)
    {
        $cnt = new connectDB();
        $conn = $cnt->getConn();
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
        $this -> total_page =  count($data);
        return $data;
    }

    /**
     * @return mixed
     */
    public function getTotalPage()
    {
        return $this->total_page;
    }

    /**
     * @param mixed $total_page
     */
    public function setTotalPage($total_page): void
    {
        $this->total_page = $total_page;
    }
}