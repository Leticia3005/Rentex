<?php
include_once("conn.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $conn->prepare("SELECT * FROM escola WHERE email = :email AND senha = :senha");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    $eeep = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($eeep) {
        //Login correto
        header("Location: index.php");
        exit();
    } else {
        // Login falhou
        header("Location: login.php");
    }

}
?>