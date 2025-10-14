<?php
     $u = $_POST ["usuario"];
     $s = $_POST ["senha"];
     require "../conexao.php";
     require "../funcoes.php";

     if($u == "" or $s == ""){

        require "usuarioLoginForm.php";
       
     }else{
          echo "Usuario e senha foram passados <br>";
          
          $sql = "select * from login where usuario = '$u'";
          
          $executar = mysqli_query($conexao , $sql);

          $logar = $executar->fetch_object();

          if(validarcripto($s , $logar->senha)){
               echo "As senhas correspondem <br>";
               $_SESSION["usuario"] = $logar->usuario;
               $_SESSION["senha"] = $logar->senha;
               $_SESSION["nivel"] = $logar->nivel;
               $_SESSION["id"] = $logar->id;

               echo "<hr> Bem vindo ". $_SESSION['usuario']. "<hr>";

               header("Location: ../index.php");
          }else{
               header("Location: usuarioLoginForm.php");
          }

     }

     //senha alexandre e usuario alexandre também.


?>




