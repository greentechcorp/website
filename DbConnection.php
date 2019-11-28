<?php
class DbConnection
{
    protected $conn = null;
    public function OpenCon()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'greentech') or die($conn->connect_error);
        return $this->conn;
    }
    public function CloseCon()
    {
        $this->conn->close();
    }
}
?>
