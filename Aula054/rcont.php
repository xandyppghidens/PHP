 <?php
 $sql = "select * from cadastro";
                          $executar = mysqli_query($conexao , $sql);
 
                          while($c = $executar->fetch_object()){
                            echo "<div class='col-xl-3 fl centraliza Rcontato'>
                            <h1>$c->codigo </h1>
                          </div>
 
                        <div class='col-xl-3 fl centraliza Rcontato'>
                            <h1> $c->localizacao </h1>
                       </div>
 
                       <div class='col-xl-3 fl centraliza Rcontato'>
                            <h1> $c->bairro </h1>
                       </div>
 
                       <div class='col-xl-3 fl centraliza Rcontato'>
                            <h1> $c->descricao </h1>
                       </div>

                        <div class='col-xl-3 fl centraliza Rcontato'>
                            <h1> $c->situacao </h1>
                       </div>

                        <div class='col-xl-3 fl centraliza Rcontato'>
                            <h1> $c->valor </h1>
                       </div>
 
                       <hr>
                       ";
                          }

?>