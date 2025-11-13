<?php
include "conexao.php";

$sql = "SELECT * FROM nomes";
$result = mysqli_query($conn, $sql);

echo "<h2>Lista de Nomes</h2>";

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . "<br>";
  }
} else {
  echo "Nenhum nome encontrado.";
}
?>
