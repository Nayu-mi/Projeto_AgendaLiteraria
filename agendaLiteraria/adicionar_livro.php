<?php
session_start();
include_once("conexao.php");

if (!isset($_POST["id_livro"]) || !isset($_POST["lista"])) {
    die("ID do livro ou lista não fornecidos");
}

$id_livro = intval($_POST["id_livro"]);
$lista = $conn->real_escape_string($_POST["lista"]);

$sql = "INSERT INTO listas_livros (id_livro, lista) 
        VALUES ($id_livro, '$lista')";

if ($conn->query($sql) === TRUE) {
    echo "Livro adicionado à lista com sucesso!";
} else {
    echo "Erro ao adicionar o livro: " . $conn->error;
}

$conn->close();
?>
