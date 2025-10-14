
<html>
     <head>


     </head>

    <body>
        <?php
             require "../conexao.php";
             require "../funcoes.php";
             require "usuario.php";
             $usuario = $_SESSION ["usuario"];

             @$sql = "select * from login where usuario = '$usuario'";
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
          <div class='col-xl-3 fl esquerda'>

          </div>

          <section class='sn4'> 
       
        <div class='col-xl-3 fl direita'> ";

                echo "<form class = 'for' action='usuarioeditar.php' method='post'>
              <h1 class = 'edia'>Editar o usuario</h1>
              <input class = 'i1' type='text' name='usuario' value = '$u->usuario'>
             
              <h1 class = 'edia'>Digite a senha </h1>
              <input class = 'i1' type='text' name='senha' placeholder = 'digite a nova senha'>

              <h1 class = 'edia'> Confirme a nova senha </h1>
              <input class = 'i1' type = 'text' name = 'novasenha' placeholder = 'confirmar nova senha'>
              
              <h1 class = 'edia'>Escolha o nivel</h1>
              <input class = 'i1' type = 'text' name = 'nivel' value = '$u->nivel' readonly>

              <input class = 'i1' type='submit' value='EDITAR'>
              

              
         </form>";

         echo "</div>
            <br>
            <a class = 'a3' href='../index.php'>   Voltar ao index</a>
         
         </section>";

             }else{
               header('Location: usuarioLoginForm.php');
             }

        ?> 
         
    </body>
</html>