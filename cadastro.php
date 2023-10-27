<?php
include_once('config.php');

$nome = $_GET['nome'];
$email = $_GET['email'];
$datanascimento = $_GET['data_nascimento'];
$senha = $_GET['senha'];

$sql = "insert into cliente (nome,email,datanascimento,senha) values
('$nome','$email','$datanascimento','$senha')";

    mysqli_query($conexao,$sql) or die ("erro ao tentar cadastrar registro");

    echo "cadastrado com sucesso";

?>