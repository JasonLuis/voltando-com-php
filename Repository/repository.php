<?php 

include_once 'model/Task.php';

class Repository {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function listAll() {
        $query = "SELECT * FROM tasks";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $tasks = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $task = new Task($row['id'], $row['description'], $row['dateCreated']);

            $tasks[] = $task;
        }

        return $tasks;
    }

    public function saveTask($description) {
        $query = "INSERT INTO tasks (description, dateCreated) VALUES (:description, :dateCreated)";
        $stmt = $this->conn->prepare($query);
        // 
        $stmt->bindParam(':descricao', $description);
        $dateCreated = date('Y-m-d');
        $stmt->bindParam(':dateCreated', $dateCreated);

        return $stmt->execute();
    }
}
?>