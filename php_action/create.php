<?php
//sessão
session_start();

//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-adicionar'])) :
    $marca = mysqli_escape_string($connect, $_POST['marca']);
    $modelo = mysqli_escape_string($connect, $_POST['modelo']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $fabricacao = mysqli_escape_string($connect, $_POST['fabricacao']);
    $cor = mysqli_escape_string($connect, $_POST['cor']);
    $placa = mysqli_escape_string($connect, $_POST['placa']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);

    $sql = "INSERT INTO estoque (marca, modelo, descricao, fabricacao, cor, placa, valor)
     VALUES ('$marca', '$modelo', '$descricao', '$fabricacao', '$cor', '$placa', '$valor')";

    if(mysqli_query($connect, $sql)) :
        header('Location: ../index.php?sucesso');
    else :
        header('Location: ../index.php?erro');
    endif;
endif;

?>