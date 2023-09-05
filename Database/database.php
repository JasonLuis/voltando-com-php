<?php 
class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "test";
    private $connection;

    public function connect() {
        $this->connection = null;

        try {
            $this->connection = new PDO(
                "mysql:host={$this->host};dbname={$this->db}",
                $this->user,
                $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\Throwable $e) {
            echo "Connection error: " . $e->getMessage();
        }

        return $this->connection;
    }
}
?>