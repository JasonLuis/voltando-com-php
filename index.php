<?php
include_once "./Controller/controller.php";

$controller = new Controller();

if(isset($_POST["input-task"])) {
    $task_description = $_POST["input-task"];
    $controller->saveTask($task_description);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="form mt-5">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="input-task">Descrição da Tarefa</label>
                    <input type="text" class="form-control mt-1" id="input-task" name="input-task" aria-describedby="taskHelp" placeholder="Enter task">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($controller->listAll() as $task) {
                ?>

                    <tr>
                        <th scope="row">
                            <?php echo $task->getId(); ?>
                        </th>
                        <td><?php echo $task->getDescription(); ?></td>
                        <td><?php echo $task->getDateCreated(); ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>