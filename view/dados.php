<?php 
session_start();
include_once('../bd/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dados.css">
    <link rel="stylesheet" href="../css/styled.css">
    <title>dados</title>
</head>
    <br>
<body class="dados"> 
    <div>
        <h1>Jogos mais vendidos!</h1>
        <div>
            <canvas id="canvas"></canvas>
        </div><br><br>
        <div>
            <canvas id="canvas-two"></canvas>
        </div>
        </div><br><br>
        <div>
            <canvas id="canvas-three"></canvas>
        </div>
    </div>   
    <a  class="btn" href="./index.php">Voltar</a>
    <a class="btn3" href="../controller/sair.php">Sair</a> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.0/dist/chart.min.js"></script>
    <script type="text/javascript" src="../controller/grafico.js"></script>
</body>
</html>