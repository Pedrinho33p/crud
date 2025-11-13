<?php
include "conexao.php";

$id = $_POST["id"];

if ($id == "") {
  echo "Informe o ID!";
  exit;
}

$sql = "DELETE FROM nomes WHERE id = $id";
if (mysqli_query($conn, $sql)) {
  echo "Nome deletado!";
} else {
  echo "Erro: " . mysqli_error($conn);
}
?>
