<?php
$DB_HOST = "localhost:3307";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "teste2";

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>
