<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../controller/script.js"></script>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/noticias.css">
    <title>Tweets</title>
</head>
<body class="tweet-noticias"> 
    <input type="checkbox" id="check">
    <label id="icone" for="check"><img src="../css/image/icone.png"></label>

    <div class="barra">
        <nav>
            <a href="../view/dados.php"><div class="link">Dados</div></a>
            <a href="../view/page.php"><div class="link">Page</div></a>
            <a href="../controller/sair.php"><div class="link">Sair</div></a> 
        </nav>
    </div>

    <div class="noticias">
    <a class="twitter-timeline" href="https://twitter.com/GV_Oficial?ref_src=twsrc%5Etfw">Tweets by GV_Oficial</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</body>
</html>