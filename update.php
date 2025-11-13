<?php
include "conexao.php";

$id = $_POST["id"];
$novo_nome = $_POST["nome"];

if ($id == "" || $novo_nome == "") {
  echo "Informe o ID e o novo nome!";
  exit;
}

$sql = "UPDATE nomes SET nome = '$novo_nome' WHERE id = $id";
if (mysqli_query($conn, $sql)) {
  echo "Nome atualizado!";
} else {
  echo "Erro: " . mysqli_error($conn);
}
?>
