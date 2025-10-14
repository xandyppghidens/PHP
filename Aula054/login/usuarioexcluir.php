<?php
     require "../conexao.php";
    $usuario = $_POST["usuario"];

    $sql = "delete from login where usuario = '$usuario' ";

    $executar = mysqli_query($conexao , $sql);

     header('Location: ../index.php');


?>