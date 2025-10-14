<html>
     <head>


     </head>

    <body>
        <?php
             require "../conexao.php";
             require "../funcoes.php";
             require "usuario.php";
             
             echo $_SESSION["usuario"];
             $sql = "select * from login where usuario = '".$_SESSION["usuario"]. "'";
             $executar = mysqli_query($conexao , $sql);
             
             $u = $executar->fetch_object();
             if($executar->num_rows == 1){
                

                echo "<head>
        <title>Veterinario</title>
        <link rel='stylesheet' href='../css/reset.css'>
        <link rel='stylesheet' href='../css/padrao.css'>
        <link rel='stylesheet' href='../style2.css'>
        <meta charset='utf8'>
     </head>

    <body class='fundoform'>

          <section class='sn8'> 
       
        <div class='hma'> ";

                echo "<form class='mudei' action='usuarioexcluir.php' method='post'>
              <h1 class = 'ela'>Tem certeza que quer deletar o usuario</h1>
              <input class = 'in1p' type='text' name='usuario' value = '$u->usuario' readonly>

              <input class = 'in1p' type='submit' value='EXCLUIR'>
              

              
              </form>";

       echo " </div> ";

        echo "
         <a class = 'a3' href='../index.php'>   Voltar ao index</a>
        </section>";

            

             }else{
                header('Location: usuarioLoginForm.php');
             }

        ?> 
         
    </body>
</html>