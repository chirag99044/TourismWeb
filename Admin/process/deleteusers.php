<?php
    $pdo = new PDO("mysql:host=localhost;dbname=tourism", "root", "");
    $id = $_GET['id'];
    $statementplace = $pdo->prepare("UPDATE users SET user_delete=? WHERE Id=?");
    $statementplace->execute(array(1,$id));
    header("Location: ../usersmanagement.php")
?>