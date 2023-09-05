<?php 
include_once 'Database/database.php';
include_once 'Repository/repository.php';


class Controller {
    private $database;
    private $db;
    private $repository;

    public function __construct() {
        $this->database = new Database();
        $this->db = $this->database->connect();
        $this->repository = new Repository($this->db);
    }

    public function listAll() {
        $tasks = $this->repository->listAll();
        /*foreach ($tasks as $task) {
            echo "ID: " . $task->getId() . "<br>";
            echo "Descrição: " . $task->getDescription() . "<br>";
            echo "Data de Criação: " . $task->getDateCreated() . "<br>";
            // Adicione aqui outras propriedades que deseja imprimir
            echo "<br>";
        }*/
        return $tasks;
    }

    public function saveTask($description) {
        $task = $this->repository->saveTask($description);
        return $task;
    }
}

?>