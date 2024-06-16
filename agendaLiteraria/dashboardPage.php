<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    // Redirecionar para a página de login se o usuário não estiver logado
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboardStyle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".btnDel").click(function() {
                var id_livro = $(this).data("id_livro");
                var lista = $(this).data("lista");
                
                $.ajax({
                    url: 'deletar_livro.php',
                    type: 'POST',
                    data: { id_livro: id_livro, lista: lista },
                    success: function(response) {
                        alert(response);
                        location.reload();  // Recarrega a página após a exclusão
                    },
                    error: function() {
                        alert("Erro ao excluir o livro.");
                    }
                });
            });
        });
    </script>
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
        <div class="central">
            <h3>Dashboard</h3>
            <br>
            <div class="dashboard">
                <?php
                include('conexao.php');
                
                $listas = ['JaLi' => '🕮 Já Li', 'EstouLendo' => '🕮 Estou Lendo', 'QueroLer' => '🕮 Quero Ler'];
                
                foreach ($listas as $lista => $titulo) {
                    echo "<div class='dash'>";
                    echo "<h4>$titulo</h4>";
                    echo "<div class='$lista'>";
                    
                    $sql = "SELECT livros.idl, livros.nome, livros.autor, livros.capa 
                            FROM listas_livros 
                            JOIN livros ON listas_livros.id_livro = livros.idl 
                            WHERE listas_livros.lista='$lista'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<ul>";
                            echo "<li>";
                            echo "<img src='" . $row['capa'] . "' alt='" . $row['nome'] . "'>";
                            echo "<p>" . $row['nome'] . " - " . $row['autor'] . "</p>";
                            echo "<button class='btnDel' data-id_livro='" . $row['idl'] . "' data-lista='$lista'>&#10060;</button>";
                            echo "</li>";
                            echo "</ul>";
                        }
                    } else {
                        echo "<p>Nenhum livro nesta lista</p>";
                    }
                    
                    echo "</div>";
                    echo "</div>";
                }
                
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="foot">
            <p>&copy; 2024 all rights reserved</p>
        </div>
    </footer>
</body>
</html>
