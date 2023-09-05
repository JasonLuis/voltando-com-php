<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    if(isset($_POST['nome'])) {
        $sql = $pdo->prepare("INSERT INTO clientes (nome, email) VALUES ( ?, ?)");
        $sql->execute(array($_POST['nome'], $_POST['email']));
        echo "inserido com sucesso";
    }
?>


<form action="" method="post" value="teste">
    <input type="text" name="nome">
    <input type="text" name="email">
    <input type="submit" name="listar" value="Enviar">
</form>