<?php
require "conexao.php";
require_once "funcoes.php";

$id = $_GET["id"] ?? null;

if (!$id) {
    echo "<h1>Erro: ID da imagem não fornecido na URL.</h1>";
    exit();
}

// Buscar imagem pelo ID
$sql = "SELECT * FROM imagem WHERE id = ?";
$stmt = $conexao->prepare($sql);

if ($stmt === false) {
    die("Erro na preparação da query: " . $conexao->error);
}

$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$u1 = $resultado->fetch_object();

if ($resultado->num_rows == 1) {
    echo "

    <head>
        <meta charset='utf-8'>
        <title>Editar Imagem </title>
        <link rel='stylesheet' href='style2.css'>
    </head>
<section class='foto'> 
    <body class='fundoforms21'>
    <div class='d123'>
        <h1 class='sla21'>Foto atual:</h1>
        <img src='imagem/$u1->foto' alt='Foto atual' style='width:200px;border-radius:10px;'><br><br>

        <form action='mudarfoto.php' method='post' enctype='multipart/form-data'>
            <h2>Escolha uma nova imagem:</h2>
            <input  type='file' name='foto' required><br><br>
            <input  class = 'ipt12' type='hidden' name='id' value='$id'>
            <input  class = 'ipt12' type='submit' value='Atualizar imagem'>
        </form>
        <br>
        <br>
        <a class = 'a2' href='index.php'>Voltar ao index</a>
    </div>
    </body>";
} else {
    echo "<h1>Foto não encontrada</h1>
    
</section>";
}

$stmt->close();
?>
