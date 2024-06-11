<?php
// Iniciar a sessão
session_start();

// Verificar se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar as credenciais do usuário 
    // Se as credenciais forem válidas, armazenar um token de autenticação persistente
    $id_usuario = obter_id_usuario($nomeuser, $password); 
    if ($id_usuario) {
        // Gerar um token de autenticação único e persistente
        $token = bin2hex(random_bytes(32)); // Gera um token aleatório de 32 bytes

        // Armazenar o token no banco de dados para o usuário
        salvar_token_usuario($id_usuario, $token); // Função fictícia para salvar o token no banco de dados

        // Armazenar o token na sessão para uso posterior
        $_SESSION['auth_token'] = $token;

        // Redirecionar para o dashboard após o login bem-sucedido
        header("Location: dashboardPage.php");
        exit();
    } else {
        $erro_login = "Credenciais inválidas. Tente novamente.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo de volta</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="logscript.js" defer></script>
</head>
<body>

    <main>
        <br><br>
        <div class="login">

            <form action="processa_login.php" method="post" id="loginForm">
                <fieldset>
                    <legend>Login</legend>
                    <br>
                    <label for="usuario">
                        Usuário: <br>
                        <input type="text" id="usuario" name="usuario" required>
                    </label>
                    <br>
                    <label for="senha">
                        Senha: <br>
                        <input type="password" id="senha" name="senha" required>
                    </label>
                    <br><br>
                    <button class="btnlog" type="submit">Entrar</button>
                    <br><br>
                </fieldset>
            </form>

        </div>
    </main>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
