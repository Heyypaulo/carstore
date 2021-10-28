<?php
//conexão com o banco de dados

$servername = "localhost";
$username = "root";
$password ="";
$db_name = "car_store";

$connect = mysqli_connect ($servername, $username, $password, $db_name);

if (mysqli_connect_error()):
  echo "Erro de conexão: ".mysqli_connect_error();
else :
    echo "Sucesso";
endif;