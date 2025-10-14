<?php
require "conexao.php";
$codigo = $_GET['codigo'];
$localizacao = $_GET['localizacao'];
$bairro = $_GET['bairro'];
$descricao = $_GET['descricao'];
$situacao = $_GET['situacao'];
$valor = $_GET['valor'];


$sql = "insert into cadastro (codigo , localizacao, bairro , descricao , situacao , valor) values ('$codigo' , '$localizacao' , '$bairro' , '$descricao' , '$situacao' , '$valor')";

$executar = mysqli_query($conexao , $sql);

echo "Informações cadastradas com sucesso";

echo "<br> <br>";

header('Location: index.php');
                
 ?>