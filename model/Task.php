<?php 

class Task {
    private $id;
    private $description;
    private $dateCreated;

    public function __construct($id, $description, $dateCreated) {
        $this->id = $id;
        $this->description = $description;
        $this->dateCreated = $dateCreated;
    }   

    
    public function getId() {
        return $this->id;
    }

    public function getDescription()
    {
        return $this->description;
    }
 
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
    
    public function __toString() {
        return $this->description;
    }
}

?>