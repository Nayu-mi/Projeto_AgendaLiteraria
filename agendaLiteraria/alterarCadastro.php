<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cadastro</title>
    <link rel="stylesheet" href="./css/altCad.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <main>
        <a href="./mainpage.php" class="back">&#8592;</a>
        <div class="cadastro">
            <form action="processa_alterarCadastro.php" method="post" id="cadastroForm">
                <fieldset>
                    <legend>Informações de Cadastro</legend>
                    <p>Preencha o Formulário para <strong><em>Alterar</em></strong> seu Cadastro!</p>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="">
                                Endereço de e-mail: <br>
                                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="" class="senha">
                                Nova senha: <br>
                                <input type="password" name="nova_senha" id="nova_senha" class="senha-olho" placeholder="Digite sua nova senha" required>
                                <i class="fa-solid fa-eye" onclick="togglePasswordVisibility()"></i>
                            </label>
                        </div>
                        <div class="col">
                            <label for="" class="senha">
                                Confirme sua nova senha: <br>
                                <input type="password" name="confirma_senha" id="confirma_senha" class="senha-olho" placeholder="Confirme sua nova senha" required>
                                <i class="fa-solid fa-eye" onclick="togglePasswordVisibility()"></i>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btncad">Enviar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>
    <footer class="footer">
        <div class="foot">
            <p>&copy; 2024 all rights reserved</p>
        </div>
    </footer>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function togglePasswordVisibility() {
            const passwordFields = document.querySelectorAll('.senha-olho');
            passwordFields.forEach(field => {
                field.type = field.type === 'password' ? 'text' : 'password';
            });
        }
    </script>
</body>
</html>
