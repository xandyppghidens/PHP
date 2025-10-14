<?php
require "../conexao.php";
require "../funcoes.php";
require "Usuario.php";
$u6 = new Usuario;

$u6->usuario = $_POST["usuario"];
$u6->senha = $_POST["senha"];
$u6->nivel = $_POST["nivel"];

$u6->senha = cripto($u6->senha);

$sql = "insert into login (usuario , senha , nivel) values ('$u6->usuario' , '$u6->senha' , '$u6->nivel')";

$executar = mysqli_query($conexao , $sql);

header("Location: ../index.php");

/* Nome e senha e alexandre */
?>