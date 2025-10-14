<?php
    require "../conexao.php";
    require "../funcoes.php";
    require "usuario.php";
     $usuario = $_POST["usuario"];
     $senha = $_POST["senha"];
     $novasenha = $_POST["novasenha"];
     $nivel = $_POST["nivel"];
     $id =  $_SESSION["id"] ;

     if($senha == $novasenha){
        $senha = cripto($senha);

        header('Location: ../index.php');
     }else {echo "Deu ruim ";}

     $sql = "update login set usuario = '$usuario' where id = '$id'";

     $executar = mysqli_query($conexao , $sql);

     $sql = "update login set senha = '$senha' where id = '$id'";

     $executar = mysqli_query($conexao , $sql);







?>