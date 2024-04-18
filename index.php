<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "210802ac";
$database = "authentication_db";

$conn = new mysqli("localhost", "root", "210802ac", "authentication_db");

// Verifica se a conexão foi bem sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtém os dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Query para verificar as credenciais
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

// Verifica se o usuário foi encontrado
if ($result->num_rows > 0) {
    echo "Login bem sucedido!";
} else {
    echo "Nome de usuário ou senha incorretos.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
