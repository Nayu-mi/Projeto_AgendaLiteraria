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
    <title>Bibliotecas de SP</title>
    <link rel="stylesheet" href="css/biblioteca.css">
    <script src="biblioteca.js" defer></script>
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
            <h3>Bibliotecas</h3>
            <div class="box">

                <h2>Venha Conhecer algumas das Bibliotecas públicas de São Paulo!</h2>
                <br><br><br>
                <h4>&#129534; Biblioteca Alceu de Amoroso Lima</h4>
                <p>
                    A Biblioteca Pública de Pinheiros,foi inaugurada em dezembro de 1979, após um movimento de reivindicação dos moradores e comerciantes 
                    do bairro de Pinheiros que não encontravam na região um ambiente apropriado para a leitura e o acesso à informação.
                </p>
                <p>
                    Selecionada para ser uma das Bibliotecas Temáticas do Sistema Municipal de Bibliotecas, o espaço foi reformulado em 2006 e passou 
                    a contar com um andar exclusivo para o Núcleo Temático de Poesia , onde o público pode desfrutar do acervo de poesia num ambiente agradável para a leitura, cursos e oficinas.
                </p>

                <div id="mapa">
                </div>
                <br><br><br>

                <h4>&#129534; Biblioteca Álvaro Guerra</h4>
                    <p>
                        A Biblioteca Infantil de Pinheiros, estabelecida em 1955 através do apoio de movimentos populares e do empenho de Lenyra Fraccaroli, 
                        passou por diversas transformações ao longo dos anos. Diante da crescente demanda, foram realizadas expansões para acomodar um número 
                        cada vez maior de usuários. No entanto, em julho de 1989, um incêndio criminoso causou danos significativos, levando à parcial destruição 
                        da biblioteca. Após intensos esforços de recuperação, a biblioteca reabriu suas portas em julho de 1992.
                    </p>
                    <p>
                        Em 1973, a Biblioteca Infantil de Pinheiros recebeu uma nova denominação, passando a ser conhecida como Biblioteca Infanto-Juvenil 
                        Álvaro Guerra, em honra ao renomado educador e poeta brasileiro. Entretanto, em 2008, por meio de um decreto, foi oficialmente renomeada 
                        como Biblioteca Álvaro Guerra, refletindo seu compromisso contínuo com a comunidade e seu legado educacional.
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14629.154889632922!2d-46.7008035!3d-23.5580718!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57b0950e0523%3A0xdc4682c83b41eed3!2sBiblioteca%20%C3%81lvaro%20Guerra!5e0!3m2!1spt-BR!2sbr!4v1716318555840!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <br><br><br>

                <h4>&#129534; Biblioteca Anne Frank</h4>
                    <p>
                        A Biblioteca Infantil do Itaim, inaugurada em 25 de janeiro de 1946, inicialmente, ocupou uma casa adaptada, porém 
                        devido à crescente demanda, foi necessário construir um novo prédio, inaugurado em 1955.
                    </p>
                    <p>
                        Em 1962, a Biblioteca do Itaim foi renomeada para Biblioteca Infantil Anne Frank, em homenagem à jovem escritora 
                        judia que registrou sua experiência durante o Holocausto em um diário. 
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4348.314919023298!2d-46.68744238341226!3d-23.587025300145118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce579a09f8e54d%3A0x7557c09f3ad09c8a!2sBiblioteca%20P%C3%BAblica%20Municipal%20Anne%20Frank!5e0!3m2!1spt-BR!2sbr!4v1716319677170!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <br><br><br>

                <h4>&#129534; Biblioteca Camila Cerqueira César</h4>
                    <p>
                        Em 1982, começaram as primeiras notícias de uma biblioteca na região do Butantã, durante reuniões entre representantes de entidades locais 
                        e moradores. Em 1988 se tornou realidade com a inauguração da Biblioteca Camila Cerqueira César.
                    </p>
                    <p>
                        A Biblioteca Camila Cerqueira César passou por uma reforma completa no início de 2015 e foi reinaugurada oficialmente em 2 de outubro 
                        do mesmo ano, após 27 anos de existência. As obras incluíram melhorias na infraestrutura, como substituição de cobertura, instalações 
                        elétricas e pisos, além de tornar o espaço totalmente acessível. A área externa foi redesenhada para oferecer um ambiente de convívio, 
                        com bancos, mesas e paisagismo.
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.790461824277!2d-46.74076172483762!3d-23.575967962128644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce567ab716ca8d%3A0x6ca00fb854ae61cc!2sBiblioteca%20Camila%20Cerqueira%20C%C3%A9sar!5e0!3m2!1spt-BR!2sbr!4v1716323440034!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <br><br><br>

                <h4>&#129534; Biblioteca Hans Christian Andersen</h4>
                    <p>  
                        A Biblioteca Infantil do Tatuapé, fundada por Lenyra Fraccaroli em 1951, foi inaugurada em 1952 como a primeira biblioteca 
                        da região Leste de São Paulo. Três anos depois, em 1955, foi renomeada Biblioteca Infanto-Juvenil Hans Christian Andersen, 
                        em homenagem ao renomado escritor dinamarquês de contos de fadas.
                    </p>
                    <p>
                        O Sistema Municipal de Bibliotecas criou a Biblioteca Temática em Contos de Fadas, projetando um ambiente encantador e 
                        acolhedor para atrair crianças ao mundo mágico das histórias infantis. Sob a direção do cenógrafo Sidnei Caria, o espaço 
                        foi concebido com elementos que remetem aos contos de Hans Christian Andersen, como uma fachada decorada com figuras de 
                        suas histórias e estantes em formato de castelo medieval. O cantinho do patrono homenageia Andersen, oferecendo uma breve 
                        história de sua vida, enquanto uma área confortável convida as crianças a escolherem seus livros favoritos para ler ou 
                        emprestar.
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12303.61669278947!2d-46.58449228580169!3d-23.536561749254385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5ee7d6f10015%3A0xf0292e57c948dda!2sBiblioteca%20P%C3%BAblica%20Hans%20Christian%20Andersen!5e0!3m2!1spt-BR!2sbr!4v1716324444072!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <br><br><br>

                <h4>&#129534; Biblioteca Mario de Andrade</h4>
                <p>
                    A Biblioteca Mário de Andrade (BMA) é uma das mais importantes bibliotecas de pesquisa do país. Fundada em 1925 como Biblioteca Municipal de São Paulo, é a maior biblioteca pública 
                    da cidade e a segunda maior biblioteca pública do país, superada, apenas, pela Biblioteca Nacional.
                </p>
                <p>
                    Em 1937, incorporou a Biblioteca Pública do Estado e, a partir de então, importantes aquisições de livros, muitos deles raros e especiais, enriqueceram seu acervo.
                </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.584326057418!2d-46.64465182478899!3d-23.547448461081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce584d91ca6d61%3A0x6ba05dbf5f45f24d!2sBiblioteca%20M%C3%A1rio%20de%20Andrade!5e0!3m2!1spt-BR!2sbr!4v1713818638231!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <br><br><br>

                <h4>&#129534; Biblioteca Mario Schenberg</h4>
                    <p>
                        A Biblioteca Pública da Lapa foi inaugurada em 1953, mas devido ao aumento do número de usuários, um novo prédio foi 
                        construído em 1961. Durante a transição, a biblioteca temporariamente se mudou para um galpão de madeira e, em 1966, se 
                        estabeleceu permanentemente na Rua Catão. 
                    </p>
                    <p>
                        Em 1970, foi renomeada Biblioteca Municipal Francisco Pati. Posteriormente, em 2005, seu nome foi alterado para 
                        Biblioteca Pública Mário Schenberg, e em 2008 tornou-se a Biblioteca Temática de Ciências, com ambientação e exposições 
                        relacionadas ao tema, realizadas por profissionais como Miguel Paladino e Oscar Bressane.
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12304.508626619274!2d-46.70787667293487!3d-23.527023994184905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef87a67ded98d%3A0x6e457092f26acd76!2sBiblioteca%20M%C3%A1rio%20Schenberg!5e0!3m2!1spt-BR!2sbr!4v1716324665188!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <br><br><br>

                <h4>&#129534; Biblioteca Monteiro Lobato</h4>
                    <p>
                        A Biblioteca Infantil Municipal, criada em 1936 como parte de um projeto cultural liderado por Mário de Andrade, 
                        é a mais antiga em funcionamento no Brasil. Dirigida por Lenyra Camargo Fraccaroli até 1960, também foi pioneira na 
                        construção de bibliotecas infantis em diversos bairros da capital paulista e do interior do estado de São Paulo.
                    </p>
                    <p>
                        Monteiro Lobato era um dos autores preferidos dos frequentadores da biblioteca, e cada visita sua era uma festa. 
                        Foi homenageado em vida várias vezes, como quando recebeu o convite para ser patrono do Grêmio Juvenil de Cultura da 
                        Biblioteca, em 1943. Em 1955, a biblioteca passou a denominar-se Monteiro Lobato em sua homenagem, sendo ele um escritor 
                        que tanto encanta crianças, jovens e adultos.
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2586.350890644337!2d-46.6514351128168!3d-23.544997562051666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5848642f7257%3A0x77e0e14eda6dfeca!2sBiblioteca%20Infanto%20Juvenil%20Monteiro%20Lobato!5e0!3m2!1spt-BR!2sbr!4v1716324803076!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <br><br><br>

                <h4>&#129534; Biblioteca Parque Villa Lobos</h4>
                    <p>
                        A Biblioteca Parque Villa-Lobos (BVL) é um modelo de biblioteca ativa, semelhante à Biblioteca de São Paulo (BSP). 
                        Além de oferecer livros, é um local de imersão cultural. Situada no Parque Villa-Lobos e inaugurada em 2015, representa 
                        uma revitalização urbana, ocupando o espaço anteriormente usado como depósito de resíduos da CEAGESP.
                    </p>
                    <p>
                        A Biblioteca Parque Villa-Lobos oferece uma ampla gama de atividades culturais gratuitas, incluindo contação de histórias, 
                        saraus, oficinas e apresentações musicais. Seu espaço inclui sala de games, ludoteca, computadores com acesso à internet, auditório, 
                        deck com vista para o parque, bicicletário e skatário. O acervo, com foco em literatura e questões ambientais, é atualizado semanalmente e 
                        inclui diversos formatos como livros, revistas, jornais, audiolivros, HQs, DVDs e CDs, além de materiais acessíveis para pessoas com deficiência. 
                        Reconhecida internacionalmente, a biblioteca recebeu prêmios de excelência da Feira do Livro de Londres e da Federação Internacional de Associações 
                        e Instituições Bibliotecárias, além de distinções no Prêmio IPL - Retratos da Leitura.
                    </p>
                    <div id="mapaBvl">
                    </div>
                <br><br><br>
                <p>
                    Para mais informações sobre acervo, horários, entre outros, acesse o site oficial da 
                    <a href="https://www.prefeitura.sp.gov.br/cidade/secretarias/cultura/bibliotecas/" target="_blank">Prefeitura de São Paulo</a>.
                    E também o site oficial da <a href="https://bvl.org.br/" target="_blank">Biblioteca Parque Villa-Lobos</a>. 
                </p>
                <p>
                    Aproveite e conheça as outras bibliotecas da cidade de São Paulo! 
                </p>

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
