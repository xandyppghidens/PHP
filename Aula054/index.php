<?php
    require "conexao.php";
   include_once "funcoes.php";
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 54</title>

    <link rel="stylesheet" href="./Assets/css/_reset.css">
    <link rel="stylesheet" href="./Assets/css/default.css">
    <link rel="stylesheet" href="./Assets/css/style.css">
    <link rel="stylesheet" href="style2.css">

    <style>
        
         .modes
{
    display: grid;
    grid-template-columns: 1fr 100px !important;
    grid-template-rows: auto 1fr;

    grid-template-areas: 
        "header header"
        "footer aside" !important;

    background-color: var(--black);
    color: var(--white);
}



 
</style>

</head>
<body class="modes">


    
    <header class="eu">

    <!-- meu 3d -->

       <section class="meu3d" id='cub'>
                <div class="cubo">
                
                      <a href='./login/usuarionovoform.php'> <h1> Criar conta </h1> </a>
                      <a href='./login/usuarioLoginForm.php'> <h1> login </h1> </a>
                     <a href='./login/usuarioeditarform.php'>  <h1> Editar </h1> </a>
                      <a href='./login/usuarioexcluirform.php'> <h1> Deletar </h1> </a>
                      <h1>  @xandy_ppg</h1> 
                      <a href='#'>  <h1 class='x'> x </h1> </a>


                </div>
       </section>


    <!-- fim do meu 3d -->


    
 <a href="#cub"> <img class = "user3" src="imagem/seta.jpg"> </a>
        <div class="container_user">

      

        <?php

        echo "<h1 class='b1'> Bem-vindo , ( " . $_SESSION["usuario"] . " )</h1>";

        if(!estaLogado()){
            echo "<a href='login/usuarioLoginForm.php'> <li>Logar</li></a>";
        }

        echo "<br><br><br>";


        $sql = "SELECT * FROM imagem";
        $executar = mysqli_query($conexao, $sql);

        while ($obj1 = $executar->fetch_object()) {
            echo "
            <div class='col-xl-6 fl'>
                <a href='editarfoto.php?id=$obj1->id'>
                    <img class='user' src='imagem/$obj1->foto' alt='Foto do usuário'>
                </a>
            </div>";
        }

        echo "<a href='login/deslogar.php'>
                <img src='./Assets/images/icons/door.svg' alt='Sair' class='logoff'>
              </a>
              
            </header> ";
        
?>



 <aside>
        <br>
        <nav class="container_nav">
            <div class="wrapper_nav"><img src="./Assets/images/icons/home.svg" alt=""></div>
            <div class="wrapper_nav"><img src="./Assets/images/icons/rent.svg" alt=""></div>
            <div class="wrapper_nav"><img src="./Assets/images/icons/key-house.svg" alt=""></div>
            <div class="wrapper_nav"><img src="./Assets/images/icons/client.svg" alt=""></div>
            <div class="wrapper_nav"><img src="./Assets/images/icons/car-house.svg" alt=""></div>
            <div class="wrapper_nav"><img src="./Assets/images/icons/contact.svg" alt=""></div>
        </nav>
    </aside>
   
         
    <br>
    <footer>
       
       <h1 class="titulo">Cadastro de Produtos</h1>

  <!-- Formulário para cadastrar -->
  <form class="form-produto" action="cada.php" method="get">
    <input type="text" name="localizacao" placeholder="Localização" required>
    <input type="text" name="bairro" placeholder="Bairro" required>
    <input type="text" name="descricao" placeholder="Descrição" required>
    <input type="text" name="situacao" placeholder="Situação" required>
    <input type="text" name="valor" placeholder="Valor (R$)" required>
    <input class="btn-cadastrar" type="submit" value="Cadastrar Produto">
  </form>

 <section class="tabelas-container">
    <table class="tabela-dados">
        <thead>
            <tr>
                <th class="header-col">Código</th>
                <th class="header-col">Localização</th>
                <th class="header-col">Bairro</th>
                <th class="header-col">Descrição</th>
                <th class="header-col">Situação</th>
                <th class="header-col">Valor</th>
                <th class="header-col acoes-header" colspan="2">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Conexão e query (garanta que $conexao está definida antes)
            $sql = "select * from cadastro";
            $executar = mysqli_query($conexao , $sql);
            
            while($c = $executar->fetch_object()){
            ?>
            <tr class="linha-dados">
                <td data-label="Código"><?php echo $c->codigo; ?></td>
                <td data-label="Localização"><?php echo $c->localizacao; ?></td>
                <td data-label="Bairro"><?php echo $c->bairro; ?></td>
                <td data-label="Descrição"><?php echo $c->descricao; ?></td>
                <td data-label="Situação"><?php echo $c->situacao; ?></td>
                <td data-label="Valor"><?php echo $c->valor; ?></td>

                <td class="col-acao-icon">
                   <a href="excluir.php?id=<?php echo $c->codigo; ?>" class="icon-excluir">
                              🗑️
                      </a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</section>
 
  
    
   </footer>
</body>
</html>