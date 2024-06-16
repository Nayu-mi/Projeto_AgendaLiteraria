<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    // Redirecionar para a página de login se o usuário não estiver logado
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <link rel="stylesheet" href="css/sobrestyle.css">
    
</head>
<body>
    <header>
        <!--Menu hamburguer-->
        <nav role="navigation">
            <div id="menuToggle">
                <input type="checkbox">

                <span></span>
                <span></span>
                <span></span>
                
                <ul id="menu">
                    <a href="mainpage.php"><li class="pular">Inicio</li></a>
                    <a href="dashboardPage.php"><li>Dashboard</li></a>
                    <a href="sobrenos.php"><li>Sobre nós</li></a>
                    <a href="biblioteca.php"><li>Bibliotecas de SP</li></a>
                    <a href="alterarCadastro.php"><li>Alterar Cadastro</li></a>
                </ul>
            </div>
            <div class="sessao">
                <form action="" class="sessao">
                    <p class="user">Bem Vindo(a), <?php echo htmlspecialchars($_SESSION['usuario']); ?> &nbsp; <a href="index.html" class="back">Sair</a></p>
                </form>
            </div>
        </nav>
    </header>
    <br><br>
    <main>
        <br><br>
        <div class="central">
            <h3>Sobre Nós</h3>
            <div class="box">

    
                <p>
                    Nosso site é uma agenda literária onde você pode armazenar seus
                    intereses literários, descobrir novos livros e autores.
                </p>
                <p>
                    Nosso objetivo é criar um ambiente vibrante para leitores, onde você 
                    possa compartilhar suas paixões literárias e encontrar sua próxima leitura.
                </p>

                <p>Venha Conhecer algumas das Bibliotecas públicas de São Paulo!</p>

            </div>
            
        </div>

    </main>
    <footer class="footer">
        <div class="foot">
            <p>
                &copy; 2024 all rights reserved
            </p>
        </div>
    </footer>
</body>
</html>
