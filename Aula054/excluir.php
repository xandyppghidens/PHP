<?php
require "conexao.php";

if (!isset($_GET["id"])) {
   
    die("Erro: ID de registro não fornecido na URL.");
}

$codigo = $_GET["id"];


$codigo_seguro = mysqli_real_escape_string($conexao, $codigo); 

$sql = "DELETE FROM cadastro WHERE codigo = '$codigo_seguro'";

$executar = mysqli_query($conexao , $sql);

if ($executar) {

    if (mysqli_affected_rows($conexao) > 0) {
        header('Location: index.php');
        exit();
    } else {
        die("Alerta: A exclusão foi executada, mas nenhuma linha foi afetada. O ID $codigo pode não existir.");
    }
} else {
    die("Erro ao tentar excluir o registro: " . mysqli_error($conexao));
}

?>