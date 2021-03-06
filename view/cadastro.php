<?php 
session_start();
include_once('../bd/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../controller/script.js"></script>
    <link rel="stylesheet" href="../css/styled.css">

    <script type="text/javascript">
    function formatar_mascara(src, mascara) {
    var campo = src.value.length;
    var saida = mascara.substring(0,1);
    var texto = mascara.substring(campo);
    if(texto.substring(0,1) != saida) {
    src.value += texto.substring(0,1);
    }
    }
    </script>
    
    <title>Cadastro</title>
</head>
<body>  
    <h2>Faça seu cadastro para obter as informações!</h2>
    <?php 
            if(isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }            
        ?>
    <div>
    <form class="form" method="POST" action="../controller/processa.php">
        <div class="area">
            <label>Nome:</label> <input class="cadastrar" name="nome" type="text" id="txtnome">
            <label>Senha: </label><input class="cadastrar" name="senha" type="password" id="txtidade" >
            <label>E-mail: </label><input class="cadastrar" name="email" type="text" id="txtE-mail">
            <label>CEP:</label> <input class="cadastrar" name="cep" type="text" id="txtCep" maxlength="9" onkeypress="formatar_mascara(this,'#####-###')" >
        </div>  
        <div class="area1">
            <label>Cidade: </label><input class="cadastrar" name="cidade" type="text" id="txtCidade" readonly=“true”>
            <label>Estado: </label><input class="cadastrar" name="estado" type="text" id="txtEstado" readonly=“true”>
            <label>Bairro: </label><input class="cadastrar" name="bairro" type="text" id="txtBairro" readonly=“true”>
            <label>Rua: </label><input class="cadastrar" name="rua" type="text" id="txtRua" readonly=“true”>
        </div>

    </div>
    
    <a class="btn" href="../view/login.php">Voltar</a>   
    <input class="btn2" type="submit" value="Cadastrar">

</form>   
</body>
</html>