<?php
require "conexao.php";
require_once "funcoes.php";

if (!isset($_POST['id']) || !isset($_FILES['foto'])) {
    die("Erro: Dados incompletos. ID ou arquivo de foto não foram recebidos.");
}

$id = (int)$_POST["id"];
$foto = $_FILES['foto'];

// Verificar erro no upload
if ($foto['error'] !== UPLOAD_ERR_OK) {
    die("Erro no upload do arquivo. Código de erro: " . $foto['error']);
}

$nomeNoBanco = basename($foto['name']);
$destino = "imagem/" . $nomeNoBanco;

// Mover imagem para a pasta
if (!move_uploaded_file($foto['tmp_name'], $destino)) {
    die("Erro: Falha ao mover o arquivo para a pasta de destino.");
}

// Atualizar o banco
$sql = "UPDATE imagem SET foto = ? WHERE id = ?";
$stmt = $conexao->prepare($sql);

if ($stmt === false) {
    die("Erro na preparação da query: " . $conexao->error);
}

$stmt->bind_param("si", $nomeNoBanco, $id);

if ($stmt->execute()) {
    echo "<h1>Imagem atualizada com sucesso!</h1>";
    echo "<img src='imagem/$nomeNoBanco' alt='Nova foto' style='width:200px;border-radius:10px;'><br><br>";
} else {
    echo "Erro ao atualizar o banco de dados: " . $stmt->error;
}

$stmt->close();

header("Location: index.php");
?>
