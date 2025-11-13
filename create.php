<?php
include "conexao.php";

$nome = $_POST["nome"];

if ($nome == "") {
  echo "Você precisa digitar um nome!";
  exit;
}

$sql = "INSERT INTO nomes (nome) VALUES ('$nome')";
if (mysqli_query($conn, $sql)) {
  echo "Nome salvo com sucesso!";
} else {
  echo "Erro: " . mysqli_error($conn);
}
?>
