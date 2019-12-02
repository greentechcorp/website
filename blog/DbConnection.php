<?php
class DbConnection
{
    protected $connection = null;
    public function OpenConnection()
    {
        $this->connection = new mysqli('localhost', 'root', '', 'greentech') or die($connection->connect_error);
        return $this->connection;
    }
    public function CloseConnection()
    {
        $this->connection->close();
    }
}
?>
