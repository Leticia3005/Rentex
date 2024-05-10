<?php
session_start();
$user = "root";
$pass = "qwe123";
$host = "localhost";
$db = "rentex";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Código para criar uma nova conta
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["criar_conta"])) {
    // Recebendo os dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $nome = $_POST["nome"];

    // Preparando a consulta SQL para inserir o usuário no banco de dados
    $sql = "INSERT INTO aluno (email, senha, nome) VALUES (:email, :senha, :nome)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':nome', $nome);

    // Executando a consulta SQL
    if ($stmt->execute()) {
        echo "Conta criada com sucesso!";
    } else {
        echo "Erro ao criar conta: " . $stmt->errorInfo()[2];
    }
}

// Código para acessar uma conta existente
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["acessar_conta"])) {
    // Recebendo os dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Preparando a consulta SQL para buscar o usuário
    $sql = "SELECT * FROM aluno WHERE email=:email AND senha=:senha";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    // Verificando se o usuário foi encontrado
    if ($stmt->rowCount() > 0) {
        // Usuário autenticado com sucesso
        echo "Login realizado com sucesso!";
        // Aqui você pode redirecionar o usuário para uma página de boas-vindas, por exemplo
    } else {
        // Usuário não encontrado ou senha incorreta
        echo "Usuário não encontrado ou senha incorreta.";
    }
}

// Fechar conexão
$conn = null;
?>
