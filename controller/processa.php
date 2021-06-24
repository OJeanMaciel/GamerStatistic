<?php 
session_start();
include_once("../bd/conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$password = password_hash($senha, PASSWORD_DEFAULT);
 

    $result_cadastro = "INSERT INTO usuarios (nome, senha, email, cep, cidade, estado, bairro, rua ) VALUES ('$nome', '$password', '$email', '$cep', '$cidade', '$estado', '$bairro', '$rua')";
    $result_usuario = mysqli_query($conn, $result_cadastro);
    
    if (mysqli_insert_id ($conn)) {
            $_SESSION['msg'] = "<p style='color:green'> Cadastrada com Sucesso! </p>";
                header("Location: ../view/cadastro.php");
    }else {
        $_SESSION['msg'] = "<p style='color:red'> Não cadastrada! </p>";
        header("Location: ../view/cadastro.php");
    }
?>