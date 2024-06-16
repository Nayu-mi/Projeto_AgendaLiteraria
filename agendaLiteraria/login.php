<?php
session_start();
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
    <script>
        // Verificar se há uma mensagem de erro na sessão e exibir usando SweetAlert
        <?php if (isset($_SESSION['erro_login'])): ?>
            swal("Erro", "<?php echo $_SESSION['erro_login']; ?>", "error");
            <?php unset($_SESSION['erro_login']); // Limpar a mensagem de erro da sessão ?>
        <?php endif; ?>
    </script>
</body>
</html>
