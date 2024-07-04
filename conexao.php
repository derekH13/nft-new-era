<?php
$hostname = "localhost";
$username = "root";
$password = "1331cbed";
$database = "nft_new_era";

// Estabelece a conexão
$conn = new mysqli($hostname, $username, $password, $database);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>