<?php
include_once("conn.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];
    $serie =  $_POST['serie'];

    $stmt = $conn->prepare("INSERT INTO aluno(nome, email, curso, serie) VALUES (:nome, :email, :curso, :serie)");    
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":curso", $curso);
    $stmt->bindParam(":serie", $serie);

}
?>