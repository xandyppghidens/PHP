<html>
     <head>
        <title>System</title>
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/padrao.css">
        <link rel="stylesheet" href="../style2.css">
        <meta charset="utf8">
     </head>

    <body class="fundo1">

          <section class="sn1"> 
       
        <div class="col-xl-3 fl direita"> 
         
         <form action="usuarionovo.php" method="post">
              <h1 >Novo usuario</h1>
              <input class="in1" type="text" name="usuario" placeholder="Digite seu usuario">
              <h1 >Digite a senha </h1>
              <input class="in1" type="text" name="senha" placeholder="Senha para o usuario">
              <h1>Escolha o nivel</h1>
              <select class="sele" name="nivel">
                      <option>Adm</option>
                      <option>Editor</option>
              </select>

              <input class="in2" type="submit" value="Cadastrar">

             
               
              
         </form>

         <br>
               <br>
                <a class = 'a3' href='../index.php'>   Voltar ao index</a>
                 <br>
                 <br>
                 <br>
                <a class = 'a3' href='usuarioLoginForm.php'>   Ja tem uma conta ? </a>

         </section>

        </div>
    </body>
</html>