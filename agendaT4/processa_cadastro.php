<?php
// Inclui o arquivo de conexão
include_once "conexao.php";

try {
    // Recebe dados do formulário
    $nome = $_POST['nomeCompleto'];
    $nasc = date('Y-m-d', strtotime($_POST['dataNascimento'])); // Converte para o formato de data do SQL
    $nomeuser = $_POST['username'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografia de senha

    // Insere dados na tabela usando prepared statements para prevenir SQL injection
    $sql = $conn->prepare("INSERT INTO usuarios (nome, nasc, nomeuser, email, senha) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("sssss", $nome, $nasc, $nomeuser, $email, $senha);

    if ($sql->execute()) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql->error;
    }

    // Redireciona para a página de cadastro (ou outra página de sucesso)
    header("Location: mainpage.php");
    exit;
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>
