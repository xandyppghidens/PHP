<?php
session_start();
      require_once "conexao.php";
     // funções gerais

function imagemErro($capa){
        $caminho = "fotos/$capa";
        if(!file_exists($caminho)){
            return "indisponivel.png";
        }else{
            return $capa;
        }
    }

  
    function sucesso($s){
            echo "<h1 class = 'sucesso'> $s</h1>";
    }
 
    function alerta($a){
        echo "<h1 class = 'alerta'> $a </h1>";
    }

    function falha($f){
        echo "<h1 class = 'falha'> $f </h1>";
    }

  

    // funções de login
    

    function cripto($senha){
        $senhacripto = password_hash($senha , PASSWORD_DEFAULT);
        return $senhacripto;
    }

    function validarcripto($senha , $senhacripto){
        $verifica = password_verify($senha , $senhacripto);
        return $verifica;
    }
    
    // se a sessão não existe crie a sessão com tudo vazio

    
    

    if(!isset($_SESSION["usuario"])){
        $_SESSION["usuario"] = "";
        $_SESSION["senha"] = "";
        $_SESSION["nivel"] = "";
    }
    function estaLogado(){
        if($_SESSION["usuario"] == ""){
            return false;
        }else{
            return true;
        }
    }

    function verificaNivel(){
        if(estaLogado()){
            $sql = "select * from login where usuario = '". $_SESSION["usuario"]. "'";

            $conexao = mysqli_connect("localhost" , "root" , "" , "sistemajogos");

            $executar = mysqli_query($conexao , $sql);
            $p = $executar->fetch_object();

            if($executar->num_rows >0){
                $p = $executar->fetch_object();
                return $p;

            }
        } return false;
    }
    function deslogar(){
        unset($_SESSION["usuario"]);
        unset($_SESSION["senha"]);
        unset($_SESSION["nivel"]);
    }


    
?>