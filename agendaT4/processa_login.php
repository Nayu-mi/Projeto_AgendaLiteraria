<?php

// Inclui arquivo de conexão PHP
include_once "conexao.php";

// Início de sessão
session_start();

try {
    // Recebe dados do login
    $nomeuser = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Prepara a consulta SQL para buscar o usuário
    $sql = $conn->prepare("SELECT * FROM usuarios WHERE nomeuser = ?");
    $sql->bind_param("s", $nomeuser);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        // Obtém os dados do usuário
        $user = $result->fetch_assoc();

        // Verifica se a senha está correta
        if (password_verify($senha, $user['senha'])) {
            // Sucesso no login
            $_SESSION['usuario'] = $user['nomeuser'];
            header("Location: mainpage.php");
            exit;
        } else {
            // Senha incorreta
            $_SESSION['erro_login'] = "Senha incorreta. Tente novamente.";
            header("Location: login.php");
            exit;
        }
    } else {
        // Usuário não encontrado
        $_SESSION['erro_login'] = "Usuário não encontrado. Tente novamente.";
        header("Location: login.php");
        exit;
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>
