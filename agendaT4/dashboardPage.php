<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboardStyle.css">
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
                    <a href="sobrenos.html"><li>Sobre nós</li></a>
                    <a href="biblioteca.html"><li>Bibliotecas de SP</li></a>
                </ul>
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
                    
                    $sql = "SELECT livros.nome, livros.autor, livros.capa 
                            FROM listas_livros 
                            JOIN livros ON listas_livros.id_livro = livros.idl 
                            WHERE listas_livros.lista='$lista'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='livro'>";
                            echo "<img src='" . $row['capa'] . "' alt='" . $row['nome'] . "'>";
                            echo "<h4>" . $row['nome'] . "</h4>";
                            echo "<p>" . $row['autor'] . "</p>";
                            echo "</div>";
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
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="mainpage.php" class="back">Voltar</a>
            <br><br>
        </div>
    </main>
    <footer class="footer">
        <div class="foot">
            <p>&copy; 2024 all rights reserved</p>
        </div>
    </footer>
</body>
</html>
