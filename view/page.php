<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../controller/script.js"></script>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/noticias.css">
    <title>Home Page</title>
</head>
<body> 
    <input type="checkbox" id="check">
    <label id="icone" for="check"><img src="../css/image/icone.png"></label>

    <div class="barra">
        <nav>
            <a href="../view/dados.php"><div class="link">Dados</div></a>
            <a href="../view/tweet.php"><div class="link">Tweets</div></a>
            <a href="../controller/sair.php"><div class="link">Sair</div></a> 
        </nav>
    </div>

    <div class="texto">
        <h2>Conheça o que está rolando no mundo dos games!</h2>
        <div>
            <h1><li>Analise os dados e fique de olho nas notícias!</li></h1>
            <p class="conteudo-page">
                Na página notícias você pode visualizar, os tweets sobre os lançamentos de jogos, <br>
                e tudo o que esta rolando no mundo dos games!
            </p>
        </div>  
        <div>
            <h1><li>Analise os Gráficos!</li></h1>
            <p class="conteudo-page">
                Na aba dados, você terá a experiência de visualizar quais países os jogos<br> 
                são mais vendidos!. Acessando a área de análise dos jogos, <br>
                o usuário se deparará com gráficos de vendas, ranking dos jogos mais populares, <br>
                tanto em escala mundial como regional, tabelas, além de textos explicativos. 
 
            </p>
        </div>      
    </div>
</body>
</html>