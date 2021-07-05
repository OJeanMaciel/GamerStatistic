<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../controller/valida.php"></script>
    <link rel="stylesheet" href="../css/styled.css">
    <title>Tela Login</title>
</head>
<body> 
    <script>
        function statusChangeCallback(response) {
            console.log('statusChangeCallback');
            console.log(response);
            if (response.status === 'connected') {
                testAPI();  
            } else {
                document.getElementById('status').innerHTML = 'Por favor, faça login. ' +
                'Acesso Negado!.';
            }
        }
        
        function checkLoginState() {
            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
        }
        
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '854873945449043',
                xfbml      : true,
                version    : 'v10.0'
            });
            FB.AppEvents.logPageView();
        };
        
        function testAPI() {
            FB.api('/me', function(response) {
                document.getElementById('status').innerHTML =
                'Obrigado por Logar, ' + response.name + '!';
                window.location.replace('../view/page.php')
            });
            }        
            </script>
            
            <div id="status">
                </div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
                
                <form method="POST" action="../controller/valida.php">
                <div class="container2">
                    <h2>Tela de Login</h2>
                    <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
            <div >
                <label class="login" id="nome">Login:</label>
                <input class="cadastrar" type="text" name="usuario" placeholder="Digite seu E-mail"> 
            </div>
            <div>
                <label class="senha" id="senha">Senha:</label>
                <input class="cadastrar" type="password" name="senha"> 
            </div>
            
            <input class="btnlogin" name="btnLogin" type="submit" value="Login">
            <a  class="btncad" href="../view/cadastro.php">Cadastre-se</a>
            
            <br><br><br>
            
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v10.0&appId=854873945449043&autoLogAppEvents=1" nonce="YmyK0m7m"></script>
            
            <fb:login-button name="btnFacebook" data-width="" data-size="large" data-button-type="continue_with" 
            data-layout="default" data-auto-logout-link="false" data-use-continue-as="false" 
            scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
            </div>
        </form>
    </body>
    </html>