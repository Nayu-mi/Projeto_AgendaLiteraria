<?php
// Iniciar sessão
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Inclui arquivo de conexão PHP
include_once "conexao.php";

try {
    // Receber dados do formulário
    $username = $_SESSION['usuario']; // Nome de usuário atual da sessão
    $email = $_POST['email'];
    $nova_senha = $_POST['nova_senha'];
    $confirma_senha = $_POST['confirma_senha'];

    // Verificar se as senhas coincidem
    if ($nova_senha !== $confirma_senha) {
        echo "<script>
                alert('As senhas não coincidem. Tente novamente.');
                window.location.href = 'alterarCadastro.php';
              </script>";
        exit();
    }

    // Atualizar o email e a senha no banco de dados
    $senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);
    $sql = $conn->prepare("UPDATE usuarios SET email = ?, senha = ? WHERE nomeuser = ?");
    $sql->bind_param("sss", $email, $senha_hash, $username);
    $sql->execute();

    if ($sql->affected_rows > 0) {
        echo "<script>
                alert('Informações atualizadas com sucesso.');
                window.location.href = 'mainpage.php';
              </script>";
    } else {
        echo "<script>
                alert('Nenhuma alteração feita.');
                window.location.href = 'alterarCadastro.html';
              </script>";
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}

$conn->close();
?>
