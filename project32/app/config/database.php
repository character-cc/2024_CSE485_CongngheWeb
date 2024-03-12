<?php
define('APP_ROOT', dirname(__FILE__, 3));
global $server, $user, $password, $database;

$database = 'contacttlu';

class connectDB
{
    public $conn;

    public function __construct()
    {
        global  $database;
        $this->conn = new mysqli("127.0.0.1", "root", '', $database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConn()
    {
        return $this->conn;
    }
}
?>
