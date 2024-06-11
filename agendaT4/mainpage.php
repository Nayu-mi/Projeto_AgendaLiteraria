<?php
// Conectar ao banco de dados
$conn = new mysqli('localhost', 'root', '', 'agendalit');
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Buscar todos os livros
$sql = "SELECT idl, nome, autor, capa, LinkPage FROM livros";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="mainstyle.css">
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
        <!--Pagina após o login-->
        <br>
        <div class="central">
            <h3>Bem vindo!</h3>
            <h4 class="h4">Faça sua pesquisa com o nome do livro ou autor</h4>
            <div class="box">
                <div class="searchWrapper">
                    <input type="text" name="searchBar" id="searchBar" placeholder="Pesquise seu Livro"/>
                </div>
                <br><br>
                <ul id="booksList">
                    <?php while($row = $result->fetch_assoc()): ?>
                        <li class="Livros">
                            <img src="<?php echo htmlspecialchars($row['capa']); ?>" alt="<?php echo htmlspecialchars($row['nome']); ?>">
                            <h4><?php echo htmlspecialchars($row['nome']); ?></h4>
                            <p><?php echo htmlspecialchars($row['autor']); ?></p>
                            <a href="<?php echo htmlspecialchars($row['LinkPage']); ?>">Saiba Mais</a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="index.html" class="back">Voltar</a>
        <br><br>
    </main>
    <footer class="footer">
        <div class="foot">
            <p>&copy; 2024 all rights reserved</p>
        </div>
    </footer>
    <script>
        const searchBar = document.getElementById('searchBar');
        searchBar.addEventListener('keyup', function() {
            const searchString = searchBar.value.toLowerCase();
            const booksList = document.getElementById('booksList');
            const books = booksList.getElementsByTagName('li');
            Array.from(books).forEach(function(book) {
                const title = book.getElementsByTagName('h4')[0].innerText.toLowerCase();
                const author = book.getElementsByTagName('p')[0].innerText.toLowerCase();
                if (title.includes(searchString) || author.includes(searchString)) {
                    book.style.display = '';
                } else {
                    book.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
<?php
$conn->close();
?>
